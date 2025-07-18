<?php

namespace App\Livewire\Client\Auth;

use Artesaos\SEOTools\Traits\SEOTools;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\RateLimiter;

class ForgotPassword extends Component
{
    use SEOTools;
    public $step = 1;
    public $mobile;
    public $code;
    public $generatedCode;
    public $password;
    public $password_confirmation;

    public $successMessage;
    public function mount()
    {
        $this->seoConfig();
    }
    public function seoConfig()
    {
        $this->seo()->setTitle('فراموشی رمز عبور');
    }


    public function sendCode()
    {
        $this->validate([
            'mobile' => ['required', 'regex:/^09\d{9}$/', 'exists:users,mobile'],
        ], [
            'mobile.required' => 'شماره موبایل الزامی است.',
            'mobile.regex' => 'فرمت شماره صحیح نیست.',
            'mobile.exists' => 'کاربری با این شماره یافت نشد.',
        ]);

        // نرخ ارسال محدود شود (5 بار در 1 دقیقه مثلاً)
        $key = 'send-otp:' . $this->mobile;
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $this->dispatch('error', '⛔ ارسال بیش از حد مجاز. لطفا بعداً امتحان کنید.');
            return;
        }

        RateLimiter::hit($key, 180); // 60 ثانیه

        $this->generatedCode = rand(100000, 999999);

        $user = User::where('mobile', $this->mobile)->first();
        $user->notify(new \App\Notifications\SendOtpToUser($this->mobile, $this->generatedCode));
        session()->put('reset_mobile', $this->mobile); // ذخیره برای مراحل بعد
        $this->dispatch('success', ' درحال پردازش ...');
        sleep(0.5);
        $this->step = 2;
    }

    public function verifyCode()
    {
        if ($this->code == $this->generatedCode) {
            $this->mobile = session()->get('reset_mobile');
            $this->dispatch('success', ' درحال پردازش ...');
            sleep(0.5);
            $this->step = 3;

        } else {
            $this->dispatch('error', 'کد وارد شده نادرست است.');
        }
    }

    public function resetPassword()
    {
        $this->validate([
            'password' => 'required|min:6|confirmed',
        ], [
            'password.required' => 'رمز عبور الزامی است.',
            'password.min' => 'رمز باید حداقل ۶ کاراکتر باشد.',
            'password.confirmed' => 'رمزها یکسان نیستند.',
        ]);
        $mobile = session()->get('reset_mobile'); // گرفتن موبایل

        $user = User::where('mobile', $mobile)->first();
        if ($user) {
            $user->password = Hash::make($this->password);
            $user->save();

            auth()->login($user); // ورود خودکار

            $this->dispatch('success', '✅ رمز با موفقیت تغییر کرد!');

            sleep(3);

            return redirect()->to(route('client.profile.dashboard')); // مسیر دلخواه
        }
    }

    public function render()
    {
        return view('livewire.client.auth.forgot-password')->layout('layouts.client.auth');
    }
}
