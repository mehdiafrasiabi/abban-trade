<?php

namespace App\Livewire\Admin\Crypto;

use App\Models\Crypto;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Create extends Component
{
    use WithPagination,SEOTools;
    public $coingeckoId, $nameFa;
    public $search = '';
    public function mount()
    {
        $this->seoConfig();
    }

    public function seoConfig()
    {
        $this->seo()->setTitle('رمزارزها');
    }
    public function submit($formData)
    {
        $this->resetErrorBag();

        $validator = Validator::make($formData, [
            'coingeckoId' => 'required|string|max:15',
            'nameFa' => 'required|string|max:20',
        ], [
            '*.required' => 'فیلد ضروری است',
            '*.string' => 'فرمت نوشتاری شما اشتباه است ',
            '*.max' => 'حداکثر نوشتن : 55 کارکتر',
            'nameFa.max' => 'حداکثر نوشتن : 20 کارکتر',
        ]);
        $validator->validate();
        // بررسی تکراری بودن
        if (Crypto::where('coingecko_id', $this->coingeckoId)->exists()) {
            $this->addError('coingeckoId', 'این رمز ارز قبلاً اضافه شده است.');
            return;
        }

        $response = Http::get("https://api.coingecko.com/api/v3/coins/{$this->coingeckoId}");

        if ($response->failed()) {
            $this->addError('coingeckoId', 'دریافت اطلاعات رمز ارز با خطا مواجه شد.');
            return;
        }

        $data = $response->json();

        if (!isset($data['id'], $data['symbol'], $data['name'], $data['image']['thumb'])) {
            $this->addError('coingeckoId', 'اطلاعات رمز ارز ناقص یا نادرست است.');
            return;
        }

        Crypto::create([
            'coingecko_id' => $data['id'],
            'symbol'       => $data['symbol'],
            'name_en'      => $data['name'],
            'name_fa'      => $this->nameFa,
            'image_url'    => $data['image']['thumb'],
        ]);

        $this->reset(['coingeckoId', 'nameFa']);
        $this->dispatch('success','رمزارز با موفقیت اضافه شد.');
    }

    public function delete($id)
    {
        Crypto::find($id)?->delete();
        $this->dispatch('warning', 'رمزارز با موفقیت حذف شد.');
    }

    public function render()
    {
        $cryptos = Crypto::query()
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('name_fa', 'like', '%' . $this->search . '%')
                        ->orWhere('name_en', 'like', '%' . $this->search . '%');
                });
            })
            ->paginate(10);
        return view('livewire.admin.crypto.create',
            ['cryptos'=>$cryptos])
            ->layout('layouts.admin.app');
    }
}
