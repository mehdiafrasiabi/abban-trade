<?php

namespace App\Livewire\Client\Auth;

use App\Trait\UploadFile;
use Artesaos\SEOTools\Traits\SEOTools;
use Intervention\Image\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\kyc_documents;
use Illuminate\Support\Facades\Storage;


class Kyc extends Component
{
    use WithFileUploads, UploadFile, SEOTools;

    public $nationalCard;
    public $selfie;
    public $message = '';


    public $kycStatus = null;

    public function mount()
    {
        $this->seoConfig();

        $userId = auth()->id();
        $kyc = kyc_documents::where('user_id', $userId)->latest()->first();

        $this->kycStatus = $kyc?->status;
    }

    public function seoConfig()
    {
        $this->seo()->setTitle('آپلود مدارک');
    }
    public function rules()
    {
        return [
            'nationalCard' => 'required|image|mimes:png,jpeg|max:1024',
            'selfie' => 'required|image|mimes:jpg,jpeg|max:1024',
        ];
    }

    public function messages()
    {
        return [
            'nationalCard.required' => 'کارت ملی الزامی است!',
            'nationalCard.image' => 'فایل باید تصویر باشد!',
            'nationalCard.mimes' => 'فرمت فایل باید PNG یا JPEG باشد!',
            'nationalCard.max' => 'حجم فایل نباید بیشتر از 1 مگابایت باشد!',
            'selfie.required' => 'سلفی الزامی است!',
            'selfie.image' => 'فایل باید تصویر باشد!',
            'selfie.mimes' => 'فرمت فایل باید jpg یا  JPEG باشد!',
            'selfie.max' => 'حجم فایل نباید بیشتر از 1 مگابایت باشد!',
        ];
    }


    public function uploadDocuments()
    {
        $this->validate();

        try {
            $userId = auth()->id();
            $nationalCardPath = $this->uploadImageInJpgFormat($this->nationalCard, $userId, 1200, 675, 'national_cards');
            $selfiePath = $this->uploadImageInWebpFormat($this->selfie, $userId, 1200, 675, 'selfies');

            // بررسی وجود رکورد ریجکت‌شده
            $existing = kyc_documents::where('user_id', $userId)->where('status', 'rejected')->first();

            if ($existing) {
                $existing->update([
                    'national_card_path' => $nationalCardPath,
                    'selfie_path' => $selfiePath,
                    'status' => 'pending', // ارسال مجدد برای بررسی
                ]);
            } else {
                kyc_documents::create([
                    'user_id' => $userId,
                    'national_card_path' => $nationalCardPath,
                    'selfie_path' => $selfiePath,
                    'status' => 'pending',
                ]);
            }

            // حذف فایل‌های موقت Livewire
            $this->nationalCard->delete();
            $this->selfie->delete();

            session()->flash('messageSuccess', 'عزیزم، خوش اومدی');
            $this->redirectRoute('client.home');

        } catch (\Exception $e) {
            $this->message = 'خطا در آپلود مدارک: ' . $e->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.client.auth.kyc')->layout('layouts.client.auth');
    }
}
