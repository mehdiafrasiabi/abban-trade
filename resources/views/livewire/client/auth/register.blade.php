<div>
    <style>
        .circle {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 5px;
        }
        .bg-green-500 { background-color: #10b981; }
        .bg-red-500 { background-color: #ef4444; }
        .requirement-item { margin-bottom: 5px; }
    </style>

    <div id="auth-page" class="swish-wrapper text-center">
        <div class="container-fluid">
            <div class="row flex-row-reverse d-flex vh-100">
                <!-- Begin::overlay-box -->
                <div class="col-md-6 col-lg-8 d-flex overlay-box">
                    <div class="overlay-background">
                    </div>
                    <div class="overlay-content mx-auto my-auto">
                        <div class="row no-gutters my-auto">
                            <div class="col message-box px-2 mx-auto">
                                <h2 class="text-white mb-4">سلام رفیق!</h2>
                                <p class="mb-4">در کمتر از 30 ثانیه در آبان‌تتر احراز هویت کنید
                                    فقط کافی است که کد ملی و تاریخ تولدتان را وارد کنید.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::overlay-box -->

                <!-- Begin::form-box -->
                <div class="col-md-6 col-lg-4 form-box">
                    <div class="d-flex flex-column sign-in-container h-100">
                        <div class="align-items-center sign-in px-3 mx-auto my-auto">
                            <div>
                                @if ($step === 'mobile')
                                    <form class="sign-in-form h-100" wire:submit="sendOtp(Object.fromEntries(new FormData($event.target)))" method="post">
                                        <div class="py-4">
                                            <a class="logo-link" href="{{ route('client.home') }}">
                                                <img class="logo-image" alt="Logo" src="/client/assets/media/images/icons/logo.png" />
                                            </a>
                                        </div>

                                        <h2 class="text-dark font-weight-bold pb-2">ثبت نام در آبان ترید</h2>
                                        <!-- Begin::form-group -->
                                        <div class="form-group">
                                            <label class="d-flex" for="name">نام و نام خانودگی</label>
                                            <input dir="rtl" wire:model="name" class="form-control form-control-lg box-rounded @error('name') is-invalid @enderror"
                                                   name="name" type="text" id="name"
                                                   placeholder="به طور مثال:مهدی افراسیابی گولک" />
                                            @error('name')
                                            <div style="margin-top: 6px" class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="d-flex" for="mobile">شماره موبایل</label>
                                            <input dir="rtl" wire:model="userMobile" class="form-control form-control-lg box-rounded @error('mobile') is-invalid @enderror"
                                                   name="mobile" type="tel" id="mobile" maxlength="11"
                                                   placeholder="به طور مثال:09123456789" />
                                            @error('mobile')
                                            <div style="margin-top: 6px" class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            @if($sendSmsError)
                                                <div style="margin-top: 6px" class="alert alert-danger">{{ $sendSmsError }}</div>
                                            @endif
                                        </div>
                                        <!-- End::form-group -->
                                        <div class="form-row text-nowrap d-flex my-4">
                                            <div class="col d-flex align-items-center">
                                                <div>
                                                    <p>
                                                        ثبت نام در آبان‌ترید به منزله پذیرش
                                                        <a href="#" class="text-neutral forgot-password-text">قوانین و مقررات</a>
                                                        است.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-main shadow-sm btn-block box-rounded" type="submit" wire:loading.attr="disabled">
                                            <span wire:loading>در حال ارسال...</span>
                                            <span wire:loading.remove>ثبت</span>
                                        </button>
                                    </form>
                                    <div class="mt-4">
                                        <p href="forgot-password.html">
                                            قبلا ثبتنام کرده اید؟
                                            <a href="{{route('client.login')}}" class="text-neutral forgot-password-text" >وارد</a>
                                            شوید
                                        </p>
                                    </div>

                                @elseif ($step === 'otp')
                                    <form class="sign-in-form h-100" wire:submit="verifyOtp(Object.fromEntries(new FormData($event.target)))" method="post">
                                        <div class="py-4">
                                            <a class="logo-link" href="{{ route('client.home') }}">
                                                <img class="logo-image" alt="Logo" src="/client/assets/media/images/icons/logo.png" />
                                            </a>
                                        </div>

                                        <h2 class="text-dark font-weight-bold pb-2">تایید کد اعتبارسنجی</h2>
                                        <!-- Begin::form-group -->
                                        <div class="form-group">
                                            <label class="d-flex" for="code">کد</label>
                                            <input dir="rtl" class="form-control form-control-lg box-rounded @error('code') is-invalid @enderror"
                                                   name="code" type="tel" id="code" placeholder="کد اعتبارسنجی برای شما ارسال شد"
                                                  maxlength="6"
                                            />
                                            @error('code')
                                            <div style="margin-top: 6px" class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            @if($codeErrorMessage)
                                                <div style="margin-top: 6px" class="alert alert-danger">{{ $codeErrorMessage }}</div>
                                            @endif
                                        </div>
                                        <!-- End::form-group -->

                                        <!-- Begin::form-row -->
                                        <div class="form-row text-nowrap d-flex my-4">
                                            <div class="col d-flex align-items-center">
                                                <div wire:poll.1s="updateCountdown" class="mb-3">
                                                    @if ($countdown > 0)
                                                      <p>  تا ارسال مجدد کد :</p>
                                                            <p class="text-primary">
                                                               {{ $countdown }}ثانیه
                                                            </p>
                                                    @else
                                                        <button type="button" wire:click="sendOtp" class="btn btn-success">ارسال مجدد OTP</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End::form-row -->

                                        <button class="btn btn-main shadow-sm btn-block box-rounded" type="submit">تایید اعتبارسنجی</button>
                                    </form>
                                @elseif ($step === 'password')
                                    <form class="sign-in-form h-100" wire:submit="register(Object.fromEntries(new FormData($event.target)))" method="post">
                                        <div class="py-4">
                                            <a class="logo-link" href="{{ route('client.home') }}">
                                                <img class="logo-image" alt="Logo" src="/client/assets/media/images/icons/logo.png" />
                                            </a>
                                        </div>

                                        <h2 class="text-dark font-weight-bold pb-2">رمز عبور خود را وارد کنید!</h2>
                                        <!-- Begin::form-group -->
                                        <div class="form-group">
                                            <label class="d-flex" for="password">رمز عبور</label>
                                            <input dir="rtl" wire:model.live="password" class="form-control form-control-lg box-rounded @error('password') is-invalid @enderror" name="password" type="text" id="password" placeholder="لطفا از یک پسورد ایمن استفاده کنید" />
                                            @error('password')
                                            <div style="margin-top: 6px" class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- End::form-group -->

                                        <!-- Begin::form-row -->
                                        <div class="form-row text-nowrap d-flex my-4">
                                            <div class="col d-flex align-items-center">
                                                <div class="password-requirements">
                                                    <div class="requirement-item">
                                                        <span class="circle {{ $passwordStrength['length'] ? 'bg-green-500' : 'bg-red-500' }}"></span>
                                                        حداقل 8 کاراکتر
                                                    </div>
                                                    <div class="requirement-item">
                                                        <span class="circle {{ $passwordStrength['number'] ? 'bg-green-500' : 'bg-red-500' }}"></span>
                                                        حداقل یک عدد
                                                    </div>
                                                    <div class="requirement-item">
                                                        <span class="circle {{ $passwordStrength['case'] ? 'bg-green-500' : 'bg-red-500' }}"></span>
                                                        حداقل یک حرف بزرگ یا کوچک
                                                    </div>
                                                    <div class="requirement-item">
                                                        <span class="circle {{ $passwordStrength['special'] ? 'bg-green-500' : 'bg-red-500' }}"></span>
                                                        حداقل یکی از کاراکترهای @!#$%+
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End::form-row -->

                                        <button class="btn btn-main shadow-sm btn-block box-rounded" type="submit">ثبت نام</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::form-box -->
            </div>
        </div>
    </div>
</div>
