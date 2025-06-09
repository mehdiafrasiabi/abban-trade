<div>
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
                                <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))" class="sign-in-form h-100">
                                    <div class="py-4">
                                        <a class="logo-link" href="{{route('client.home')}}">
                                            <img class="logo-image" alt="Logo" src="/client/assets/media/images/icons/logo.png" />
                                        </a>
                                    </div>

                                    <h2 class="text-dark font-weight-bold pb-2">ورود به آبان ترید</h2>
                                    <!-- Begin::form-group -->
                                    <div class="form-group">
                                        <label class="d-flex" for="mobile">نام کابری</label>
                                        <input dir="rtl" wire:model="mobile" name="mobile" class="form-control form-control-lg box-rounded" type="tel" id="mobile" placeholder="شماره موبایل همراه خود را وارد کنید" />
                                        @error('mobile')
                                        <div style="margin-top: 6px" class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="d-flex" for="password">رمز عبور</label>
                                        <input  wire:model="password"  class="form-control form-control-lg box-rounded" type="password" id="password" name="password" placeholder="رمز عبور خود را وارد کنید" />
                                        @error('password')
                                        <div style="margin-top: 6px" class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- End::form-group -->

                                    <!-- Begin::form-row -->
                                    <div class="form-row text-nowrap d-flex my-4">
                                        <div class="col d-flex align-items-center">
                                            <div class="col d-flex justify-content-end align-items-center">
                                                <a class="text-neutral forgot-password-text" href="{{route('client.forgot-password')}}">رمز عبور خود را فراموش کرده اید؟</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End::form-row -->

                                    <button class="btn btn-main shadow-sm btn-block box-rounded" type="submit">ورود</button>
                                </form>
                                <div class="">
                                    <p href="forgot-password.html">
                                       حساب کاربری ندارید؟
                                        <a href="{{route('client.register')}}" class="text-neutral forgot-password-text" >ثبت نام</a>
                                        کنید
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::form-box -->
                </div>
            </div>
        </div>
    </div>
</div>
