<?php

namespace App\Livewire\Client\Auth;

use App\Notifications\SendOtpToUser;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\User;
use App\Models\Otp;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Validate;

class Register extends Component
{
    use SEOTools;
    public $step = 'mobile';
    public $sendSmsError = '';
    public $userMobile;
    public $name;
    public $otpCode;
    public $codeErrorMessage;
    public $password;
    public $countdown = 0;
    public $passwordStrength = [
        'length' => false,
        'number' => false,
        'case' => false,
        'special' => false,
    ];

    public function mount()
    {
        $this->seoConfig();
    }
    public function seoConfig()
    {
        $this->seo()->setTitle('ثبت نام در آبان ترید');
    }
    public function updatedPassword($value)
    {
        $this->validatePasswordStrength($value);
    }

    public function validatePasswordStrength($password)
    {
        $this->passwordStrength['length'] = strlen($password) >= 8;
        $this->passwordStrength['number'] = preg_match('/\d/', $password);
        $this->passwordStrength['case'] = preg_match('/[A-Z]/', $password) || preg_match('/[a-z]/', $password);
        $this->passwordStrength['special'] = preg_match('/[@!#$+%]/', $password);
    }

    public function sendOtp($formData)
    {
        $validator = Validator::make($formData, [
            'name' => ['required', 'string', 'max:55','regex:/^[\p{Arabic}\s]+$/u'],
            'mobile' => ['required',  'regex:/^09\d{9}$/', 'unique:users,mobile'],
        ], [
            'name.required' => 'وارد کردن نام الزامی است!',
            'name.string' => 'فرمت نام صحیح نیست.',
            'name.regex' => 'نام و نام خانوادگی باید فقط با حروف فارسی نوشته شود!',
            'mobile.required' => 'شماره موبایل الزامی است!',
            'mobile.regex' => 'شماره موبایل نامعتبر است!',
            'mobile.unique' => 'این شماره موبایل قبلاً ثبت شده است!',
        ]);

        $validator->validate();

        $code = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        $expiresAt = now()->addMinutes(5);

        Otp::create([
            'mobile' => $formData['mobile'],
            'code' => $code,
            'expires_at' => $expiresAt,
        ]);

        try {
            $user = new User(['mobile' => $formData['mobile']]);
            $user->notify(new SendOtpToUser($formData['mobile'], $code));

            $this->step = 'otp';
            $this->name = $formData['name'];
            $this->userMobile = $formData['mobile'];
            $this->otpCode = $code;
            $this->countdown = 60;

            $this->dispatch('start-countdown');
        } catch (\Exception $e) {
            Log::error('Send OTP Notification Error', ['error' => $e->getMessage()]);
            $this->sendSmsError = 'متاسفانه پیامک ارسال نشد. خطا: ' . $e->getMessage();
        }
    }

    public function verifyOtp($formData)
    {
        $validator = Validator::make($formData, [
            'code' => ['required', 'numeric', 'digits:6'],
        ], [
            'required' => 'لطفا این قسمت را خالی نگذارید!',
            'code.digits' => 'کد باید 6 رقمی باشد!',
        ]);

        $validator->validate();
        $this->resetValidation();

        $otp = Otp::where('mobile', $this->userMobile)
            ->where('code', $formData['code'])
            ->where('is_used', false)
            ->where('expires_at', '>', now())
            ->first();

        if (!$otp) {
            $this->codeErrorMessage = 'کد نامعتبر یا منقضی شده است!';
            return;
        }

        $otp->update(['is_used' => true]);
        $this->step = 'password';
    }

    public function register($formData)
    {
        $validator = Validator::make($formData, [
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@!#$+%])[A-Za-z\d@!#$+%]{8,}$/']

        ], [
            '*.required' => 'رمز عبور الزامی است!',
            '*.min' => 'رمز عبور باید حداقل 8 کاراکتر باشد!',
            '*.regex' => 'رمز عبور باید شامل حداقل یک عدد، یک حرف بزرگ یا کوچک، و یکی از کاراکترهای @!#$+% باشد!',
        ]);

        $validator->validate();

        $existingUser = User::query()->where('mobile', $this->userMobile)->first();

        if (!$existingUser) {

            $newUser = User::query()->create([
                'name' => $this->name,
                'mobile' => $this->userMobile,
                'password' => bcrypt($formData['password']),
            ]);

            Auth::login($newUser, true);
        } else {
            $existingUser->update(['password' => bcrypt($formData['password'])]);
            Auth::login($existingUser, true);
        }

        return redirect()->route('client.kyc');
    }

    public function updateCountdown()
    {
        if ($this->countdown > 0) {
            $this->countdown--;
        }
    }


    public function render()
    {
        return view('livewire.client.auth.register')->layout('layouts.client.auth');
    }
}
