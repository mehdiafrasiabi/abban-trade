<div>
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
                                @if ($kycStatus === 'rejected')
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 120 120">
                                        <ellipse cx="60" cy="63.5" opacity=".35" rx="48" ry="48.5"></ellipse><ellipse cx="60" cy="59.5" fill="#ff1200" rx="48" ry="48.5"></ellipse><ellipse cx="60" cy="59.5" fill="#ff1200" rx="48" ry="48.5"></ellipse><g opacity=".35"><path d="M81.379,34.136C75.4,29.654,68.007,27,60,27c-19.882,0-36,16.342-36,36.5c0,7.937,2.507,15.276,6.75,21.265L81.379,34.136 z"></path><path d="M89.662,42.823L39.202,93.283C45.077,97.508,52.249,100,60,100c19.882,0,36-16.342,36-36.5 C96,55.822,93.656,48.701,89.662,42.823z"></path></g><path fill="#ffc1bf" d="M81.379,30.136C75.4,25.654,68.007,23,60,23c-19.882,0-36,16.342-36,36.5 c0,7.937,2.507,15.276,6.75,21.265L81.379,30.136z"></path><path fill="#ffc1bf" d="M89.662,38.823L39.202,89.283C45.077,93.508,52.249,96,60,96c19.882,0,36-16.342,36-36.5 C96,51.822,93.656,44.701,89.662,38.823z"></path>
                                    </svg>
                                    <div class="alert alert-danger mt-4">

                                        <strong>احراز هویت شما رد شده است.</strong><br>
                                        لطفاً دوباره مدارک خود را آپلود کنید.

                                    </div>
                                    <form class="sign-in-form h-100" wire:submit="uploadDocuments(Object.fromEntries(new FormData($event.target)))" method="post">
                                        <div class="py-4">
                                            <a class="logo-link" href="{{ route('client.home') }}">
                                                <img class="logo-image" alt="Logo" src="/client/assets/media/images/icons/logo.png" />
                                            </a>

                                        </div>

                                        <h2 class="text-dark font-weight-bold pb-2">آپلود مدارک و سلفی</h2>
                                        <img class="w-100" src="/client/auth/assets/images/kyc.jpg">
                                        <!-- Begin::form-group -->
                                        <div class="form-group">
                                            <label class="d-flex" for="nationalCard">کارت ملی:</label>
                                            <input dir="rtl" wire:model="nationalCard" class="form-control form-control-lg box-rounded" accept="image/png,image/jpeg"
                                                   name="nationalCard" type="file" id="nationalCard"
                                                   placeholder="شماره موبایل همراه خود را وارد کنید" />
                                            @error('nationalCard')
                                            <div style="margin-top: 6px" class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="d-flex" for="selfie">عکس سلفی:</label>
                                            <input dir="rtl" wire:model="selfie" class="form-control form-control-lg box-rounded" accept="image/png,image/jpeg"
                                                   name="selfie" type="file" id="selfie"
                                                   placeholder="شماره موبایل همراه خود را وارد کنید" />
                                            @error('selfie')
                                            <div style="margin-top: 6px" class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        @if ($message)
                                            <div class="alert {{ strpos($message, 'خطا') !== false ? 'alert-danger' : 'alert-info' }}">
                                                {{ $message }}
                                            </div>
                                        @endif
                                        <!-- End::form-group -->
                                        <button class="btn btn-main shadow-sm btn-block box-rounded" type="submit" wire:loading.attr="disabled">
                                            <span wire:loading>در حال ارسال...</span>
                                            <span wire:loading.remove>ثبت</span>
                                        </button>
                                    </form>
                                @elseif ($kycStatus === 'pending')
                                    <img src="/client/auth/assets/images/pendding.png">
                                    <div class="alert alert-warning mt-4">
                                        مدارک شما در حال بررسی هستند. لطفاً منتظر بمانید.
                                    </div>
                                @elseif ($kycStatus === 'completed')
                                    <img src="/client/auth/assets/images/completed.png">

                                    <div class="alert alert-success mt-4">
                                        <strong>تبریک!</strong> احراز هویت شما با موفقیت انجام شد.
                                    </div>
                                @else
                                    <form class="sign-in-form h-100" wire:submit="uploadDocuments(Object.fromEntries(new FormData($event.target)))" method="post">
                                        <div class="py-4">
                                            <a class="logo-link" href="{{ route('client.home') }}">
                                                <img class="logo-image" alt="Logo" src="/client/assets/media/images/icons/logo.png" />
                                            </a>

                                        </div>

                                        <h2 class="text-dark font-weight-bold pb-2">آپلود مدارک و سلفی</h2>
                                        <img class="w-100" src="/client/auth/assets/images/kyc.jpg">
                                        <!-- Begin::form-group -->
                                        <div class="form-group">
                                            <label class="d-flex" for="nationalCard">کارت ملی:</label>
                                            <input dir="rtl" wire:model="nationalCard" class="form-control form-control-lg box-rounded" accept="image/png,image/jpeg"
                                                   name="nationalCard" type="file" id="nationalCard"
                                                   placeholder="شماره موبایل همراه خود را وارد کنید" />
                                            @error('nationalCard')
                                            <div style="margin-top: 6px" class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="d-flex" for="selfie">عکس سلفی:</label>
                                            <input dir="rtl" wire:model="selfie" class="form-control form-control-lg box-rounded" accept="image/png,image/jpeg"
                                                   name="selfie" type="file" id="selfie"
                                                   placeholder="شماره موبایل همراه خود را وارد کنید" />
                                            @error('selfie')
                                            <div style="margin-top: 6px" class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        @if ($message)
                                            <div class="alert {{ strpos($message, 'خطا') !== false ? 'alert-danger' : 'alert-info' }}">
                                                {{ $message }}
                                            </div>
                                        @endif
                                        <!-- End::form-group -->
                                        <button class="btn btn-main shadow-sm btn-block box-rounded" type="submit" wire:loading.attr="disabled">
                                            <span wire:loading>در حال ارسال...</span>
                                            <span wire:loading.remove>ثبت</span>
                                        </button>
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

