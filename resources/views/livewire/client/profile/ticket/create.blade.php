<div>
    <div class="profile profile-v2">
        <div class="container container--profile-v2">
            <div class="table-container">
                <div class="profile__content-wrapper">
                    <div class="profile__content-title">
                        <br>
                        <h6 class="content-title-1 aos-init aos-animate" data-aos="fade-right">
                            ثبت تیکت جدید
                           ( <a href="{{route('client.profile.ticket')}}">بازگشت</a>)
                        </h6>
                        <p class="fb-regular content-title-2 aos-init aos-animate" data-aos="fade-right" data-aos-delay="50"></p>
                    </div>
<br>
                    <form  wire:submit.prevent="submit">
                        <div class="profile__personal-info">
                            <div class="personal-info__name-form">
                                <p class="fb-regular fb-regular--bold personal-info__name-form-text">عنوان تیکت:</p>
                                <br>
                                <div class="d-block mini-form-sm__box personal-info__name-form-input aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                                    <input type="text" wire:model.defer="title" class="form-control form-control-sm mini-form__input" placeholder="" autocomplete="off">
                                    @error('title') <span class="text-danger text-sm">{{ $message }}</span> @enderror

                                </div>
                            </div>
                            <div class="personal-info__name-form mt-3">
                                <p class="fb-regular fb-regular--bold personal-info__name-form-text">دپارتمان</p>
                                <br>
                                <div class="d-block mini-form-sm__box personal-info__name-form-input aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                                        <select wire:model.defer="department_id" class="form-control form-control-sm mini-form__input">
                                            <option value="">دپارتمان خودرا انتخاب کنید</option>
                                            @foreach($departments as $department)
                                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('department_id') <span class="text-danger text-sm">{{ $message }}</span> @enderror

                                </div>
                            </div>
                            <div class="personal-info__name-form mt-3" >
                                <p class="fb-regular fb-regular--bold personal-info__name-form-text">اولویت</p>
                                <br>
                                <div class="d-block mini-form-sm__box personal-info__name-form-input aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">

                                    <select wire:model.defer="priority" class="form-control form-control-sm mini-form__input">
                                        <option value="">دپارتمان خودرا انتخاب کنید</option>
                                        <option value="low">کم</option>
                                        <option value="medium">متوسط</option>
                                        <option value="high">زیاد</option>
                                    </select>
                                    @error('priority') <span class="text-danger text-sm">{{ $message }}</span> @enderror

                                </div>
                            </div>
                            <div class="personal-info__name-form mt-3">
                                <p class="fb-regular fb-regular--bold personal-info__name-form-text">پیام</p>
                                <br>
                                <div class="d-block mini-form-sm__box personal-info__name-form-input aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">

                                        <textarea type="text" wire:model.defer="message" class="form-control form-control-sm mini-form__input" rows="5"></textarea>
                                    @error('message') <span class="text-danger text-sm">{{ $message }}</span> @enderror

                                </div>
                            </div>
                            <div class="personal-info__name-form mt-3">
                                <p class="fb-regular fb-regular--bold personal-info__name-form-text">فایل پیوست (اختیاری)</p>
                                <br>
                                <div class="d-block mini-form-sm__box personal-info__name-form-input aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">

                                        <input type="file" class="form-control form-control-sm mini-form__input" wire:model="attachment">
                                    @error('attachment') <span class="text-danger text-sm">{{ $message }}</span> @enderror

                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success px-4 py-2 text-white rounded">ارسال تیکت</button>
                        <br>
                        <br>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>
