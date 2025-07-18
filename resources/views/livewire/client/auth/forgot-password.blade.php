<div>
    <div id="auth-page" class="swish-wrapper text-center">
        <div class="container-fluid">
            <div class="row flex-row-reverse d-flex vh-100">
                <!-- Begin::overlay-box -->
                <div class="col-md-6 col-lg-8 d-flex overlay-box">
                    <div class="overlay-background"></div>
                    <div class="overlay-content mx-auto my-auto">
                        <div class="row no-gutters my-auto">
                            <div class="col message-box px-2 mx-auto">
                                <h2 class="text-white mb-4">اعتبار معاملاتی دریافت کنید!</h2>
                                <p class="mb-4">تا سقف ۶۰۰ میلیون تومان یا ۱۲۰۰۰ تتر به انتخاب خودتان!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::overlay-box -->

                <!-- Begin::form-box -->
                <div class="col-md-6 col-lg-4 form-box">
                    <div class="d-flex flex-column sign-in-container h-100">
                        <div class="align-items-center sign-in px-3 mx-auto my-auto">
                            <!-- Begin::form -->
                            <div class="sign-in-form h-100">
                                <div class="py-4">
                                    <a class="logo-link" href="{{route('client.home')}}">
                                        <img class="logo-image" alt="Logo" src="/client/assets/media/images/icons/logo.png" />
                                    </a>
                                </div>

                                <h2 class="text-dark font-weight-bold pb-2">بازنشانی گذرواژه</h2>
                                @if ($successMessage)
                                    <div class="bg-success text-white p-4 rounded">{{ $successMessage }}</div>
                                @endif
                                <!-- Begin::form-group -->
                                @if ($step === 1)
                                <div class="form-group">
                                    <label class="d-flex" for="mobile">نام کابری</label>
                                    <input maxlength="11" dir="rtl" class="form-control form-control-lg box-rounded" type="tel" id="mobile" name="mobile" wire:model="mobile" placeholder="شماره موبایل همراه خود را وارد کنید" />
                                    @error('mobile') <span class="text-danger ">{{ $message }}</span> @enderror
                                    <br>
                                    <button  wire:click="sendCode" class="btn btn-main shadow-sm btn-block box-rounded" type="submit">مرحله بعد</button>
                                    <br>
                                    <a href="{{route('client.login')}}" class=" btn btn-warning">بازگشت</a>
                                </div>
                                @elseif($step == 2)
                                    <div class="form-group">
                                        <label class="d-flex" for="mobile">کد تایید</label>
                                        <input dir="rtl" class="form-control form-control-lg box-rounded" type="tel" id="mobile" name="code" wire:model="code" placeholder="کد تایید 6 رقمی خود را وارد کنید" />
                                        @error('code') <span class="text-danger text-sm">{{ $message }}</span> @enderror
                                        <br>
                                        <button  wire:click="verifyCode" class="btn btn-main shadow-sm btn-block box-rounded" type="submit">تایید</button>

                                    </div>
                                @elseif($step == 3)
                                    <div>
                                        <label>رمز عبور جدید:</label>
                                        <input type="password" wire:model="password" class="form-control form-control-lg box-rounded">
                                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                        <br>
                                        <label class="mt-3">تکرار رمز عبور:</label>
                                        <input type="password" wire:model="password_confirmation" class="form-control form-control-lg box-rounded">
                                        @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror

                                        <br>
                                        <button wire:click="resetPassword" class="btn btn-main shadow-sm btn-block box-rounded">
                                            تغییر رمز عبور
                                        </button>
                                    </div>
                                @endif
                                <!-- End::form-group -->

                            </div>
                            <!-- End::form -->
                        </div>
                    </div>
                </div>
                <!-- End::form-box -->
            </div>
        </div>
    </div></div>
