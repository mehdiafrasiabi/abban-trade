<div>
    @push('link')
        <link href="/client/assets/css/pages/profile-v2.css" rel="stylesheet" type="text/css">
    @endpush

        <div class="profile profile-v2">
            <div class="container container--profile-v2">
                <!-- Start::Dashboard Navbar v2 -->
                <nav  class="navbar navbar-expand-lg header-navbar header-navbar-dashboard--v2" data-aos="fade-down">
                    <div class="container container--dashboard-nav">
                        <div class="navbar-left">
                            <a class="navbar-brand" href="profile-v2.html#">
                                <p class="navbar-brand__text">تیکت و پشتیبانی</p>
                                <img src="/client/assets/media/images/icons/logo.png" alt="" class="navbar-brand__icon">
                            </a>
                        </div>
                        <div class="navbar-right">
                            <div class="navbar-search">
                                <input type="text" class="navbar-search__input" placeholder="جستجو">
                                <img src="/client/assets/media/images/icons/search.svg" alt="search-icon" class="navbar-search__image">
                            </div>
                            <div class="navbar-notifications">
                                <img src="/client/assets/media/images/icons/notifications.svg" alt="notifications-icon" class="navbar-notifications__image">
                                <div class="navbar-notifications__dropdown">
                                    <p class="fb-regular fb-regular--bold notifications__title">اطلاعیه</p>
                                    <div class="notifications__box">
                                        <div class="notifications__item">
                                            <img src="/client/assets/media/images/notification-image.png" alt="" class="notifications__item-image">
                                            <div class="notifications__item-message">
                                                <p class="notifications__item-sender">ریوز کیانو</p>
                                                <p class="notifications__item-text">پست شما را تبلیغ کرد</p>
                                            </div>
                                        </div>
                                        <div class="notifications__item">
                                            <img src="/client/assets/media/images/notification-image.png" alt="" class="notifications__item-image">
                                            <div class="notifications__item-message">
                                                <p class="notifications__item-sender">ریوز کیانو</p>
                                                <p class="notifications__item-text">پست شما را تبلیغ کرد</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="navbar-profile-menu">--}}
{{--                                <p class="navbar-profile-menu__text">جان دو</p>--}}
{{--                                <img src="/client/assets/media/images/profile-photo.png" alt="profile-photo-icon" class="navbar-profile-menu__image">--}}
{{--                                <img src="/client/assets/media/images/icons/arrow-down.svg" alt="arrow-down-icon" class="navbar-profile-menu__arrow">--}}
{{--                                <div class="navbar-profile-menu__dropdown">--}}
{{--                                    <div class="navbar-profile-menu__dropdown-item">--}}
{{--                                        <a class="fb-regular dropdown-item__link" href="profile-v2.html">اکانت</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="navbar-profile-menu__dropdown-item">--}}
{{--                                        <a class="fb-regular dropdown-item__link" href="sign-in-v2.html">خروج</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <img src="/client/assets/media/images/icons/menu.svg" alt="MENU">
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="navbar-collapse__content">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('client.profile.dashboard')}}">داشبورد</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('client.profile.market')}}">بازار</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('client.profile.wallet')}}">کیف پول</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('client.profile.ticket')}}">پشتیبانی و تیکت</a>
                                    </li>
                                </ul>
{{--                                <div class="navbar-profile-menu">--}}
{{--                                    <p class="navbar-profile-menu__text">جان دو</p>--}}
{{--                                    <img src="/client/assets/media/images/profile-photo.png" alt="profile-photo-icon" class="navbar-profile-menu__image">--}}
{{--                                    <img src="/client/assets/media/images/icons/arrow-down.svg" alt="arrow-down-icon" class="navbar-profile-menu__arrow">--}}
{{--                                    <div class="navbar-profile-menu__dropdown">--}}
{{--                                        <div class="navbar-profile-menu__dropdown-item">--}}
{{--                                            <a class="fb-regular dropdown-item__link" href="profile-v2.html">اکانت</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="navbar-profile-menu__dropdown-item">--}}
{{--                                            <a class="fb-regular dropdown-item__link" href="sign-in-v2.html">خروج</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <div class="navbar-search-popup">
                            <input type="text" class="navbar-search-popup__input js-navbar-search-popup__input" placeholder="جستجو">
                            <img src="/client/assets/media/images/icons/search.svg" alt="search-icon" class="navbar-search-popup__image">
                            <img src="/client/assets/media/images/icons/plus-icon.svg" alt="cancel-icon" class="navbar-search-popup__image--cancel js-navbar-search-popup__image--cancel">
                        </div>
                    </div>
                </nav>
                <!-- End::Dashboard Navbar v2 -->    <div class="container container--dashboard container--dashboard--profile">
                    <div class="profile__title">
                        <h2 class="profile__title-text">تیکت ها</h2>
                    </div>

                    <div class="profile__container">
                        <div class="profile__content">

                            <div class="table-wrapper table--type-1 aos-init aos-animate" data-aos="fade-up">
                                <div class="table-container">
                                    <table class="table table-content">
                                        <thead>
                                        <tr>
                                            <th class="fb-regular table__head" colspan="2">#</th>
                                            <th class="fb-regular table__head">عنوان</th>
                                            <th class="fb-regular table__head">دپارتمان</th>
                                            <th class="fb-regular table__head">وضعیت</th>
                                            <th class="fb-regular table__head">تاریخ</th>
                                            <th class="fb-regular table__head">اقدام</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($tickets as $ticket)
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto">
                                                        <p class="fb-regular fb-regular--bold table__assets-crypto-abbr"></p>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{$loop->iteration}}
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__order">{{$ticket->title}}</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__available">{{$ticket->department->name ?? '-'}}</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__total
                                                        @if($ticket->status == 'waiting')
                                                        text-yellow
                                                        @elseif($ticket->status == 'answered')
                                                        text-blue
                                                        @elseif($ticket->status == 'closed')
                                                        text-danger
                                                        @endif">

                                                       @if($ticket->status=='waiting')
                                                           در انتظار پاسخ ادمین
                                                        @elseif($ticket->status=='answered')
                                                           پاسخ داده شده
                                                        @elseif($ticket->status=='closed')
                                                           بسته شده
                                                       @endif
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">{{ jalali($ticket->created_at)->format('Y/m/d H:i') }}</p>
                                                </td>
                                                <td>
                                                    <a href="{{ route('client.profile.ticket.show', $ticket->id) }}" class="fb-regular table__market text-green-pale">مشاهده</a>
                                                </td>
                                            </tr>
                                        @empty
                                          <tr>
                                             <p class="btn btn-danger">تیکتی وجود ندارد </p>
                                          </tr>
                                        @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
