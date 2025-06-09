<?php

namespace App\Livewire\Admin\Kyc;

use App\Models\User;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination,SEOTools;

    public  $search = '';
    public  $statusFilter = '';
    public  $selfieImage = '';
    public  $selectedImage = '';
    public  $nationalCardImage = '';
    public  $ocrData = [];
    public  $ocrError = '';
    public $selectedUserId = null;


    public function mount()
    {
        $this->statusFilter = request()->get('status', '');
        $this->seoConfig();
    }

    public function seoConfig()
    {
        $this->seo()->setTitle('مدیریت KYC');
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingStatusFilter()
    {
        $this->resetPage();
    }

    public function showImage($path,$userId)
    {
        $this->selectedImage = asset('kyc/selfies/'.$userId.'/'.$path);
        $this->dispatch('open-selfie-modal');
    }

        public function showNationalCard($filename,$userId)
    {
        if (empty($filename)) {
            $this->dispatch('error', 'تصویر کارت ملی وجود ندارد.');
            return;
        }

        $this->nationalCardImage = asset("kyc/national_cards/{$userId}/{$filename}");
        $this->selectedUserId = $userId;
        $this->dispatch('open-national-modal');
    }


    public function changeStatus($userId, $value)
    {
        $validator = Validator::make(
            ['status' => $value, 'id' => $userId],
            [
                'id' => 'required|exists:users,id',
                'status' => 'required|in:pending,completed,rejected'
            ],
            [
                '*.required' => 'فیلد اجباری است.',
                'status.in' => 'فرمت وضعیت نادرست است.',
                'id.exists' => 'کاربر یافت نشد.'
            ]
        );

        $validator->validate();
        $this->resetValidation();
        $this->dispatch('success', 'وضعیت با موفقیت بروزرسانی شد.');

        $user = User::with('kyc')->findOrFail($userId);

        if ($user->kyc) {
            $user->kyc->update([
                'status' => $value
            ]);
        }
    }

    public function getStatusColor($status)
    {
        return match ($status) {
            'pending' => 'primary',
            'rejected' => 'danger',
            'completed' => 'success',
            default => 'secondary',
        };
    }

    public function ocrNationalCard($userId)
    {
        $user = User::with('kyc')->findOrFail($userId);

        $filename = $user->kyc?->national_card_path;

        if (!$filename) {
            $this->ocrError = 'تصویر کارت ملی وجود ندارد.';
            $this->dispatch('show-ocr-modal');
            return;
        }

        $path = public_path("kyc/national_cards/{$userId}/{$filename}");

        if (!file_exists($path)) {
            $this->ocrError = 'فایل کارت ملی در سرور یافت نشد.';
            $this->dispatch('show-ocr-modal');
            return;
        }

        $response = Http::attach(
            'nationalCardFront', file_get_contents($path), 'card.jpg'
        )->withHeaders([
            'Authorization' => 'Bearer ' . config('services.zibal.token'),
            'Accept' => 'application/json',
        ])->post('https://api.zibal.ir/v1/facility/nationalCardOcr');

        if ($response->successful()) {
            $json = $response->json();

            if ($json['result'] == 1) {
                $this->ocrData = $json['data']['front'];
                $this->ocrError = '';
            } else {
                $this->ocrData = [];
                $this->ocrError = $this->mapZibalError($json['result']);
            }

            $this->dispatch('show-ocr-modal');
        } else {
            $this->ocrData = [];
            $this->ocrError = 'خطای ناشناخته در اتصال به سرور.';
            $this->dispatch('show-ocr-modal');
        }
    }

    private function mapZibalError($code)
    {
        return match ((int)$code) {
            2 => 'API Key به درستی ارسال نشده است.',
            3 => 'API Key صحیح نیست.',
            4 => 'اجازه دسترسی به این سرویس صادر نشده‌است.',
            5 => 'callbackUrl نامعتبر است.',
            6 => 'مقدار ورودی نامعتبر است.',
            7 => 'IP ارسال‌کننده درخواست نامعتبر می‌باشد.',
            8 => 'API Key غیرفعال است.',
            9 => 'حداقل مبلغ باید ۱۰۰۰ ریال باشد.',
            21 => 'شماره شبای وارد شده معتبر نیست.',
            29 => 'موجودی کیف‌پول کارمزد کافی نیست.',
            44 => 'شبا یافت نشد.',
            45 => 'سرویس‌دهنده‌ها برای استعلام در دسترس نیستند.',
            default => 'خطای ناشناخته (کد ' . $code . ')'
        };
    }

    public function render()
    {
        $users = User::with('kyc')
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('mobile', 'like', '%' . $this->search . '%');
            })
            ->whereHas('kyc', function ($query) {
                if ($this->statusFilter && $this->statusFilter !== 'all') {
                    $query->where('status', $this->statusFilter);
                }
            })
            ->paginate(10);

        $users->getCollection()->transform(function ($user) {
            $user->statusColor = $this->getStatusColor(optional($user->kyc)->status ?? 'pending');
            return $user;
        });

        return view('livewire.admin.kyc.index', ['users' => $users])
            ->layout('layouts.admin.app');
    }
}
