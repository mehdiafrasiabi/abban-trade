<div >

    <div class="market market--v2" >
        <div class="container container--market-v2">
            <!-- Start::Dashboard Navbar v2 -->
            <nav  class="navbar navbar-expand-lg header-navbar header-navbar-dashboard--v2" data-aos="fade-down">
                <div class="container container--dashboard-nav">
                    <div class="navbar-left">
                        <a class="navbar-brand" href="market-v2.html#">
                            <p class="navbar-brand__text">بازار کریپتو</p>
                            <img src="/client/assets/media/images/icons/logo.png" alt="" class="navbar-brand__icon">
                        </a>
                    </div>
                    <div class="navbar-right">
                        <div class="navbar-search">
                            <input type="text" id="search-input" class="navbar-search__input" >
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
{{--                        <div class="navbar-profile-menu">--}}
{{--                            <p class="navbar-profile-menu__text">جان دو</p>--}}
{{--                            <img src="/client/assets/media/images/profile-photo.png" alt="profile-photo-icon" class="navbar-profile-menu__image">--}}
{{--                            <img src="/client/assets/media/images/icons/arrow-down.svg" alt="arrow-down-icon" class="navbar-profile-menu__arrow">--}}
{{--                            <div class="navbar-profile-menu__dropdown">--}}
{{--                                <div class="navbar-profile-menu__dropdown-item">--}}
{{--                                    <a class="fb-regular dropdown-item__link" href="profile-v2.html">حساب</a>--}}
{{--                                </div>--}}
{{--                                <div class="navbar-profile-menu__dropdown-item">--}}
{{--                                    <a class="fb-regular dropdown-item__link" href="sign-in-v2.html">خروج</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <img src="/client/assets/media/images/icons/menu.svg" alt="MENU">
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navbar-collapse__content">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('client.profile.dashboard') ? 'active' : '' }}" href="{{route('client.profile.dashboard')}}">داشبورد</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('client.profile.market') ? 'active' : '' }}" href="{{route('client.profile.market')}}">بازار</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('client.profile.wallet') ? 'active' : '' }}" href="{{route('client.profile.wallet')}}">کیف پول</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('client.profile.ticket') ? 'active' : '' }}" href="{{route('client.profile.ticket')}}">پشتیبانی و تیکت</a>
                                </li>
                            </ul>
{{--                            <div class="navbar-profile-menu">--}}
{{--                                <p class="navbar-profile-menu__text">جان دو</p>--}}
{{--                                <img src="/client/assets/media/images/profile-photo.png" alt="profile-photo-icon" class="navbar-profile-menu__image">--}}
{{--                                <img src="/client/assets/media/images/icons/arrow-down.svg" alt="arrow-down-icon" class="navbar-profile-menu__arrow">--}}
{{--                                <div class="navbar-profile-menu__dropdown">--}}
{{--                                    <div class="navbar-profile-menu__dropdown-item">--}}
{{--                                        <a class="fb-regular dropdown-item__link" href="profile-v2.html">حساب</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="navbar-profile-menu__dropdown-item">--}}
{{--                                        <a class="fb-regular dropdown-item__link" href="sign-in-v2.html">خروج</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="navbar-search-popup">
                        <input type="text" class="navbar-search-popup__input js-navbar-search-popup__input" placeholder="جستجو" >
                        <img src="/client/assets/media/images/icons/search.svg" alt="search-icon" class="navbar-search-popup__image">
                        <img src="/client/assets/media/images/icons/plus-icon.svg" alt="cancel-icon" class="navbar-search-popup__image--cancel js-navbar-search-popup__image--cancel">
                    </div>
                </div>
            </nav>
            <!-- End::Dashboard Navbar v2 -->    <div class="container container--dashboard">
                <h2 class="dashboard__title mb-4">بازار کریپتو</h2>
                <div class="market-group">
                    <div class="market-group-carousel" data-aos="zoom-in-up">
                        <div class="market-group-cards">
                            <!-- Start::Standard Card -->
                            @if($topGainer)
                            <div class="standard-card standard-card--type-1" data-aos="fade-up">
                                <div class="container">
                                    <p class="standard-card__title">بیشترین سود  (24 ساعت)</p>
                                    <div class="standard-card__content">
                                        <img src="{{@$topGainer['image'] }}" alt="" class="standard-card__content-image">
                                        <div class="standard-card__content-desc">
                                            <p class="standard-card__content-desc-price">دلار {{number_format($topGainer['current_price'])}}</p>
                                            <p class="standard-card__content-desc-currency">{{ $topGainer['name'] }}</p>
                                        </div>
                                        <div class="standard-card__content-graph">
                                            <div class="standard-card__content-percentage">
                                                <img class="standard-card__content-arrow" src="/client/assets/media/images/icons/green-arrow-up.svg" alt="">
                                                <p class="standard-card__content-value">({{ number_format($topGainer['price_change_percentage_24h'], 2) }}%)</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($topLoser)
                            <div class="standard-card standard-card--type-1" data-aos="fade-up">
                                <div class="container">
                                    <p class="standard-card__title">بیشترین ضرر  (24 ساعت)</p>
                                    <div class="standard-card__content">
                                        <img src="{{@$topLoser['image'] }}" alt="" class="standard-card__content-image">
                                        <div class="standard-card__content-desc">
                                            <p class="standard-card__content-desc-price">دلار {{number_format($topLoser['current_price'])}}</p>
                                            <p class="standard-card__content-desc-currency">{{ $topLoser['name'] }}</p>
                                        </div>
                                        <div class="standard-card__content-graph">
                                            <div class="standard-card__content-percentage">
                                                <p class="standard-card__content-value" style="color: red">({{ number_format($topLoser['price_change_percentage_24h'], 2) }}%)</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <!-- End::Standard Card -->            <!-- Start::Standard Card -->
                        </div>
                        <div class="slick__pagination">
                            <div class="assets-carousel__arrows">
                                <a href="market-v2.html#" class="assets-carousel__prev">
                                    <img src="/client/assets/media/images/icons/light-circle-arrow-left.svg" alt="Previous">
                                </a>
                                <a href="market-v2.html#" class="assets-carousel__next">
                                    <img src="/client/assets/media/images/icons/light-circle-arrow-right.svg" alt="Next">
                                </a>
                            </div>
                            <div class="assets-carousel__pagination slick__pagination--dots">
                                <div class="assets-carousel__slick-slider-dots slick-slider-dots"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Start::Table Section -->
                    <div  class="table-wrapper table--type-2" data-aos="fade-up">
                        <div class="table__title">
                            <h6 class="table__title-text"></h6>
{{--                            <nav class="navbar">--}}
{{--                                <div class="table__title-tabs" id="pills-tab" role="tablist">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <p class="fb-regular fb-regular--bold table__title-tab active" id="pills-market-table-all-tab" data-bs-toggle="pill" data-bs-target="#pills-market-table-all" role="tab" aria-controls="pills-market-table-all" aria-selected="true">تمام دارایی ها</p>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <p class="fb-regular fb-regular--bold table__title-tab" id="pills-market-table-gainers-tab" data-bs-toggle="pill" data-bs-target="#pills-market-table-gainers" role="tab" aria-controls="pills-market-table-gainers" aria-selected="false">سودآوران</p>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <p class="fb-regular fb-regular--bold table__title-tab" id="pills-market-table-losers-tab" data-bs-toggle="pill" data-bs-target="#pills-market-table-losers" role="tab" aria-controls="pills-market-table-losers" aria-selected="false">بازنده ها</p>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <p class="fb-regular fb-regular--bold table__title-tab" id="pills-market-table-tradeble-tab" data-bs-toggle="pill" data-bs-target="#pills-market-table-tradeble" role="tab" aria-controls="pills-market-table-tradeble" aria-selected="false">قابل معامله</p>--}}
{{--                                    </li>--}}
{{--                                </div>--}}
{{--                            </nav>--}}
{{--                            <div class="dropdown table__dropdown">--}}
{{--                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                    تمام دارایی ها--}}
{{--                                    <img src="/client/assets/media/images/icons/arrow-down.svg" alt="">--}}
{{--                                </button>--}}
{{--                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="pills-tab" role="tablist">--}}
{{--                                    <li><a class="dropdown-item active" href="market-v2.html#" id="pills-market-table-all-tab" data-bs-toggle="pill" data-bs-target="#pills-market-table-all" role="tab" aria-controls="pills-market-table-all" aria-selected="true">تمام دارایی ها</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="market-v2.html#" id="pills-market-table-gainers-tab" data-bs-toggle="pill" data-bs-target="#pills-market-table-gainers" role="tab" aria-controls="pills-market-table-gainers" aria-selected="false">سودآوران</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="market-v2.html#" id="pills-market-table-losers-tab" data-bs-toggle="pill" data-bs-target="#pills-market-table-losers" role="tab" aria-controls="pills-market-table-losers" aria-selected="false">بازنده ها</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="market-v2.html#" id="pills-market-table-tradeble-tab" data-bs-toggle="pill" data-bs-target="#pills-market-table-tradeble" role="tab" aria-controls="pills-market-table-tradeble" aria-selected="false">قابل معامله</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-market-table-all" role="tabpanel" aria-labelledby="pills-market-table-all-tab">
                                <div class="table-container">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success mt-2">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    <input class="form-control"
                                        type="text" wire:model.live.debounce.500ms="search"
                                           placeholder="جستجو بر اساس نام فارسی، انگلیسی یا نماد...">
                                        <br>
                                    <table class="table table-content" >
                                        <thead>
                                        <tr>
                                            <th class="fb-regular table__head" colspan="2">رمز ارز</th>
                                            <th class="fb-regular table__head">قیمت لحظه ای</th>
                                            <th class="fb-regular table__head">تغییر 24h</th>
                                            <th class="fb-regular table__head">حجم معاملات</th>
                                            <th class="fb-regular table__head">تجارت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                       @foreach($cryptos as $crypto)
                                           @php
                                               $priceChange = $crypto['price_change_percentage_24h'];
                                               $changeColor = match(true) {
                                                   $priceChange > 0 => 'text-green',
                                                   $priceChange < 0 => 'text-red',
                                                   default => 'text-gray',
                                               };

                                               $changeSign = $priceChange > 0 ? '+' : '';
                                           @endphp
                                           <tr>
                                               <td class="table__assets">
                                                   <div class="table__assets-crypto">
                                                       <img src="{{@$crypto['image']}}" alt="" class="table__assets-crypto-icon">
                                                       <p class="fb-regular fb-regular--bold table__assets-crypto-abbr">{{ $crypto['name'] }}</p>
                                                   </div>
                                               </td>
                                               <td>
                                                   <p class="fb-regular table__assets-name">{{ $crypto['name'] }}</p>
                                               </td>
                                               <td>
                                                   <p class="fb-regular">{{ number_format(@$crypto['current_price']) }} $</p>
                                               </td>
                                               <td>
                                                   <p class="fb-regular ">
                                                       {{ $changeSign }}{{ number_format($priceChange, 2) }}%
                                                   </p>
                                               </td>
                                               <td>
                                                   <p class="fb-regular table__market text-bullish">{{ number_format(@$crypto['total_volume']) }}</p>
                                               </td>
                                               <td>
                                                   <a href="{{ route('client.profile.trade', $crypto['id']) }}" class="btn btn-primary btn-sm btn-pill table__btn">خرید</a>
                                               </td>
                                           </tr>
                                       @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="table__vignette"></div>
                    </div>
                    <!-- End::Table Section -->      </div>
            </div>
        </div>
    </div>

</div>
