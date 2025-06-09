<div class="container container--dashboard-v2">
    <!-- Start::Dashboard Navbar v2 -->
    <nav class="navbar navbar-expand-lg header-navbar header-navbar-dashboard--v2" data-aos="fade-down">
        <div class="container container--dashboard-nav">
            <div class="navbar-left">
                <a class="navbar-brand" href="href="{{route('client.profile.dashboard')}}"#">
                    <p class="navbar-brand__text">داشبورد</p>
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
                {{--                <div class="navbar-profile-menu">--}}
                {{--                    <p class="navbar-profile-menu__text"> جان دو</p>--}}
                {{--                    <img src="/client/assets/media/images/profile-photo.png" alt="profile-photo-icon" class="navbar-profile-menu__image">--}}
                {{--                    <img src="/client/assets/media/images/icons/arrow-down.svg" alt="arrow-down-icon" class="navbar-profile-menu__arrow">--}}
                {{--                    <div class="navbar-profile-menu__dropdown">--}}
                {{--                        <div class="navbar-profile-menu__dropdown-item">--}}
                {{--                            <a class="fb-regular dropdown-item__link" href="profile-v2.html">حساب</a>--}}
                {{--                        </div>--}}
                {{--                        <div class="navbar-profile-menu__dropdown-item">--}}
                {{--                            <a class="fb-regular dropdown-item__link" href="sign-in-v2.html">خروج از سیستم</a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
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
                    {{--                    <div class="navbar-profile-menu">--}}
                    {{--                        <p class="navbar-profile-menu__text">جان دو</p>--}}
                    {{--                        <img src="/client/assets/media/images/profile-photo.png" alt="profile-photo-icon" class="navbar-profile-menu__image">--}}
                    {{--                        <img src="/client/assets/media/images/icons/arrow-down.svg" alt="arrow-down-icon" class="navbar-profile-menu__arrow">--}}
                    {{--                        <div class="navbar-profile-menu__dropdown">--}}
                    {{--                            <div class="navbar-profile-menu__dropdown-item">--}}
                    {{--                                <a class="fb-regular dropdown-item__link" href="profile-v2.html">اکانت</a>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="navbar-profile-menu__dropdown-item">--}}
                    {{--                                <a class="fb-regular dropdown-item__link" href="sign-in-v2.html">خروج</a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <div class="navbar-search-popup">
                <input type="text" class="navbar-search-popup__input js-navbar-search-popup__input" placeholder="جستجو">
                <img src="/client/assets/media/images/icons/search.svg" alt="search-icon" class="navbar-search-popup__image">
                <img src="/client/assets/media/images/icons/plus-icon.svg" alt="cancel-icon" class="navbar-search-popup__image--cancel js-navbar-search-popup__image--cancel">
            </div>
        </div>
    </nav>
    <!-- End::Dashboard Navbar v2 -->
    <div class="container container--dashboard">
        <div>
            <h2 class="dashboard__title mb-4">داشبورد</h2>
            <div class="dashboard__group dashboard__group--outer">
                <!-- Start::Complete Card -->
                <div class="complete-card complete-card--type-1-v3" data-aos="fade-up">
                    <div class="complete-card__balance">
                        <div class="complete-card__balance-head">
                            <div class="complete-card__balance-head__title">
                                <h6 class="complete-card__balance-head__title-text">تعادل</h6>
                                <div class="complete-card__balance-head__title-influsion">
                                    <img src="/client/assets/media/images/icons/arrow-bullish.svg" alt="" class="complete-card__balance-head__title-influsion-icon">
                                    <p class="fb-regular fb-regular--bold complete-card__balance-head__title-influsion-value text-bullish">2.36%</p>
                                </div>
                            </div>
                            <p class="complete-card__balance-head__value">دلار 12.243,55</p>
                        </div>
                        <div class="complete-card__balance-revenue">
                            <div class="complete-card__balance-revenue__income">
                                <div class="balance-revenue__income-title">
                                    <img src="/client/assets/media/images/icons/arrow-bullish.svg" alt="" class="balance-revenue__income-title-icon">
                                    <p class="fb-regular balance-revenue__income-title-text">درآمد</p>
                                </div>
                                <p class="fd-sm fd-sm--bold balance-revenue__income-value">دلار 12.243,55</p>
                            </div>
                            <div class="complete-card__balance-revenue__separator"></div>
                            <div class="complete-card__balance-revenue__expenses">
                                <div class="balance-revenue__expenses-title">
                                    <img src="/client/assets/media/images/icons/arrow-bearish.svg" alt="" class="balance-revenue__expenses-title-icon">
                                    <p class="fb-regular balance-revenue__expenses-title-text">مخارج</p>
                                </div>
                                <p class="fd-sm fd-sm--bold balance-revenue__expenses-value">دلار 3.132,23</p>
                            </div>
                        </div>
                    </div>
                    <div class="complete-card__separator"></div>
                    <div class="complete-card__wallet">
                        <div class="complete-card__wallet-head">
                            <h6 class="complete-card__wallet-head__title-text">کیف پول</h6>
                            <p class="fb-regular complete-card__wallet-head__title-total-currencies">3 واحد پول</p>
                        </div>
                        <div class="complete-card__wallet-data">
                            <div class="complete-card__wallet-data__chart">
                                <div id="complete-card__wallet-data__donut-chart-2" class="complete-card__wallet-data__donut-chart-render"></div>
                                <div class="complete-card__wallet-data__donut-chart-label">
                                    <img src="/client/assets/media/images/icons/arrow-bullish.svg" alt="" class="complete-card__wallet-data__donut-chart-label-icon"></img>
                                    <p class="fd-sm fd-sm--bold complete-card__wallet-data__donut-chart-label-text">2.31%</p>
                                </div>
                            </div>
                            <div class="complete-card__wallet-data__currencies">
                                <div class="wallet-data__currency">
                                    <img src="/client/assets/media/images/icons/logo-btc.svg" alt="" class="wallet-data__currency-icon">
                                    <div class="wallet-data__currency-text">
                                        <p class="fb-regular fb-regular--bold wallet-data__currency-text-acronym">BTC</p>
                                        <p class="fb-regular wallet-data__currency-text-name">بیت کوین</p>
                                    </div>
                                    <div class="wallet-data__currency-influsion">
                                        <img src="/client/assets/media/images/icons/arrow-bullish.svg" alt="" class="wallet-data__currency-influsion-icon">
                                        <p class="fb-sm wallet-data__currency-influsion-value">2.36%</p>
                                    </div>
                                </div>
                                <div class="wallet-data__currency">
                                    <img src="/client/assets/media/images/icons/logo-eth.svg" alt="" class="wallet-data__currency-icon">
                                    <div class="wallet-data__currency-text">
                                        <p class="fb-regular fb-regular--bold wallet-data__currency-text-acronym">ETH</p>
                                        <p class="fb-regular wallet-data__currency-text-name">اتریوم</p>
                                    </div>
                                    <div class="wallet-data__currency-influsion">
                                        <img src="/client/assets/media/images/icons/arrow-bullish.svg" alt="" class="wallet-data__currency-influsion-icon">
                                        <p class="fb-sm wallet-data__currency-influsion-value">1.80%</p>
                                    </div>
                                </div>
                                <div class="wallet-data__currency">
                                    <img src="/client/assets/media/images/icons/logo-usdt.svg" alt="" class="wallet-data__currency-icon">
                                    <div class="wallet-data__currency-text">
                                        <p class="fb-regular fb-regular--bold wallet-data__currency-text-acronym">USDT</p>
                                        <p class="fb-regular wallet-data__currency-text-name">تتر</p>
                                    </div>
                                    <div class="wallet-data__currency-influsion">
                                        <img src="/client/assets/media/images/icons/arrow-bullish.svg" alt="" class="wallet-data__currency-influsion-icon">
                                        <p class="fb-sm wallet-data__currency-influsion-value">1.64%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="complete-card__separator"></div>
                    <div class="complete-card__exchange">
                        <div class="advance-card__title">
                            <h6 class="advance-card__title-text">تبادل</h6>
                            <img src="/client/assets/media/images/icons/exchange-white.svg" alt="" class="advance-card__title-icon">
                        </div>
                        <div class="advance-card__price">
                            <div class="advance-card__price-crypto">
                                <p class="advance-card__price-crypto-value">1</p>
                                <p class="advance-card__price-crypto-name">BTC</p>
                            </div>
                            <img src="/client/assets/media/images/icons/arrow-right-white.svg" alt="" class="advance-card__price-arrow">
                            <div class="advance-card__price-currency">
                                <p class="advance-card__price-currency-value">53,260.20</p>
                                <p class="advance-card__price-currency-name">دلار</p>
                            </div>
                        </div>
                        <div class="advance-card__forms-currency">
                            <div class="advance-card__forms-currency--get">
                                <p class="advance-card__forms-currency__title">گرفتن</p>
                                <div class="forms-purchase forms-purchase--advance-card">
                                    <div class="forms-group forms-group--value">
                                        <input type="number" min="0" value="4000" class="form-control forms-purchase__value">
                                    </div>
                                    <div class="forms-purchase__line"></div>
                                    <div class="forms-group forms-group--purchase js-forms-group--purchase" id="custom-select-purchase3">
                                        <div class="forms-group__items selected" data-selected="usd">
                                            <img class="fg-items__icon" src="/client/assets/media/images/icons/usd.svg" alt="">
                                            <p class="fg-items__value">دلار</p>
                                        </div>
                                        <img class="forms-currency__icon-arrow-down" src="/client/assets/media/images/icons/arrow-down.svg" alt="">
                                        <div class="forms-group__dropdown js-forms-group__dropdown">
                                            <div class="forms-group__items active" data-selected="usd">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/usd.svg" alt="">
                                                <p class="fg-items__value">دلار</p>
                                            </div>
                                            <div class="forms-group__items" data-selected="btc">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-btc.svg" alt="">
                                                <p class="fg-items__value">BTC</p>
                                            </div>
                                            <div class="forms-group__items" data-selected="eth">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-eth.svg" alt="">
                                                <p class="fg-items__value">ETH</p>
                                            </div>
                                            <div class="forms-group__items" data-selected="bnb">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-bnb.svg" alt="">
                                                <p class="fg-items__value">BNB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="forms-currency forms-currency--advance-card">
                                    <div class="forms-group forms-group--value">
                                        <input type="number" min="0" value="5000" class="form-control forms-currency__value">
                                    </div>
                                    <div class="forms-currency__line"></div>
                                    <div class="forms-group forms-group--currency js-forms-group--currency" id="custom-select-currency-4">
                                        <div class="forms-group__items selected" data-selected="usd">
                                            <img class="fg-items__icon" src="/client/assets/media/images/icons/usd.svg" alt="">
                                        </div>
                                        <img class="forms-currency__icon-arrow-down" src="/client/assets/media/images/icons/arrow-down.svg" alt="">
                                        <div class="forms-group__dropdown js-forms-group__dropdown">
                                            <div class="forms-group__items active" data-selected="usd">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/usd.svg" alt="">
                                            </div>
                                            <div class="forms-group__items" data-selected="btc">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-btc.svg" alt="">
                                            </div>
                                            <div class="forms-group__items" data-selected="eth">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-eth.svg" alt="">
                                            </div>
                                            <div class="forms-group__items" data-selected="bnb">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-bnb.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="advance-card__forms-currency--pay">
                                <p class="advance-card__forms-currency__title">پرداخت</p>
                                <div class="forms-purchase forms-purchase--advance-card">
                                    <div class="forms-group forms-group--value">
                                        <input type="number" min="0" value="4000" class="form-control forms-purchase__value">
                                    </div>
                                    <div class="forms-purchase__line"></div>
                                    <div class="forms-group forms-group--purchase js-forms-group--purchase" id="custom-select-purchase1">
                                        <div class="forms-group__items selected" data-selected="usd">
                                            <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-btc.svg" alt="">
                                            <p class="fg-items__value">BTC</p>
                                        </div>
                                        <img class="forms-currency__icon-arrow-down" src="/client/assets/media/images/icons/arrow-down.svg" alt="">
                                        <div class="forms-group__dropdown js-forms-group__dropdown">
                                            <div class="forms-group__items active" data-selected="btc">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-btc.svg" alt="">
                                                <p class="fg-items__value">BTC</p>
                                            </div>
                                            <div class="forms-group__items" data-selected="eth">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-eth.svg" alt="">
                                                <p class="fg-items__value">ETH</p>
                                            </div>
                                            <div class="forms-group__items" data-selected="bnb">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-bnb.svg" alt="">
                                                <p class="fg-items__value">BNB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="forms-currency forms-currency--advance-card">
                                    <div class="forms-group forms-group--value">
                                        <input type="number" min="0" value="5000" class="form-control forms-currency__value">
                                    </div>
                                    <div class="forms-currency__line"></div>
                                    <div class="forms-group forms-group--currency js-forms-group--currency" id="custom-select-currency-1">
                                        <div class="forms-group__items selected" data-selected="usd">
                                            <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-btc.svg" alt="">
                                        </div>
                                        <img class="forms-currency__icon-arrow-down" src="/client/assets/media/images/icons/arrow-down.svg" alt="">
                                        <div class="forms-group__dropdown js-forms-group__dropdown">
                                            <div class="forms-group__items active" data-selected="btc">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-btc.svg" alt="">
                                            </div>
                                            <div class="forms-group__items" data-selected="eth">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-eth.svg" alt="">
                                            </div>
                                            <div class="forms-group__items" data-selected="bnb">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/logo-bnb.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="advance-card__button btn btn-primary btn-pill">تبادل</button>
                    </div>
                </div>
                <!-- End::Complete Card -->      <div class="dashboard__group dashboard__group--middle">
                    <!-- Start::Complete Card -->
                    <div class="complete-card complete-card--type-2-v2" data-aos="fade-up">
                        <div class="complete-card__head">
                            <h6 class="complete-card__head-title">رشد کلی</h6>
                            <nav class="navbar">
                                <ul class="complete-card__head-tabs" id="pills-tab" role="tablist">
                                    <li class="complete-card__head-tab nav-item">
                                        <p class="complete-card__head-tab-text nav-link active" id="pills-overall-column-1-m-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-1-m" role="tab" aria-controls="pills-overall-column-1-m" aria-selected="true">1 دقیقه</p>
                                    </li>
                                    <li class="complete-card__head-tab nav-item">
                                        <p class="complete-card__head-tab-text nav-link" id="pills-overall-column-3-m-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-3-m" role="tab" aria-controls="pills-overall-column-3-m" aria-selected="false">3 دقیقه</p>
                                    </li>
                                    <li class="complete-card__head-tab nav-item">
                                        <p class="complete-card__head-tab-text nav-link" id="pills-overall-column-30-m-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-30-m" role="tab" aria-controls="pills-overall-column-30-m" aria-selected="false">30 دقیقه</p>
                                    </li>
                                    <li class="complete-card__head-tab nav-item">
                                        <p class="complete-card__head-tab-text nav-link" id="pills-overall-column-1-h-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-1-h" role="tab" aria-controls="pills-overall-column-1-h" aria-selected="false">1 ساعت</p>
                                    </li>
                                    <li class="complete-card__head-tab nav-item">
                                        <p class="complete-card__head-tab-text nav-link" id="pills-overall-column-24-h-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-24-h" role="tab" aria-controls="pills-overall-column-24-h" aria-selected="false">24 ساعت</p>
                                    </li>
                                    <li class="complete-card__head-tab nav-item">
                                        <p class="complete-card__head-tab-text nav-link" id="pills-overall-column-1-d-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-1-d" role="tab" aria-controls="pills-overall-column-1-d" aria-selected="false">1 روز</p>
                                    </li>
                                    <li class="complete-card__head-tab nav-item">
                                        <p class="complete-card__head-tab-text nav-link" id="pills-overall-column-1-w-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-1-w" role="tab" aria-controls="pills-overall-column-1-w" aria-selected="false">1 هفته</p>
                                    </li>
                                </ul>
                            </nav>
                            <div class="dropdown complete-card__dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    1 دقیقه
                                    <img src="/client/assets/media/images/icons/arrow-down.svg" alt="">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2" id="pills-tab" role="tablist">
                                    <li><a class="dropdown-item active" href="href="{{route('client.profile.dashboard')}} id="pills-overall-column-1-m-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-1-m" role="tab" aria-controls="pills-overall-column-1-m" aria-selected="true">1 دقیقه</a></li>
                                    <li><a class="dropdown-item" href="href="{{route('client.profile.dashboard')}} id="pills-overall-column-3-m-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-3-m" role="tab" aria-controls="pills-overall-column-3-m" aria-selected="false">3 دقیقه</a></li>
                                    <li><a class="dropdown-item" href="href="{{route('client.profile.dashboard')}} id="pills-overall-column-30-m-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-30-m" role="tab" aria-controls="pills-overall-column-30-m" aria-selected="false">30 دقیقه</a></li>
                                    <li><a class="dropdown-item" href="href="{{route('client.profile.dashboard')}} id="pills-overall-column-1-h-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-1-h" role="tab" aria-controls="pills-overall-column-1-h" aria-selected="false">1 ساعت</a></li>
                                    <li><a class="dropdown-item" href="href="{{route('client.profile.dashboard')}} id="pills-overall-column-24-h-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-24-h" role="tab" aria-controls="pills-overall-column-24-h" aria-selected="false">24 ساعت</a></li>
                                    <li><a class="dropdown-item" href="href="{{route('client.profile.dashboard')}} id="pills-overall-column-1-d-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-1-d" role="tab" aria-controls="pills-overall-column-1-d" aria-selected="false">1 روز</a></li>
                                    <li><a class="dropdown-item" href="href="{{route('client.profile.dashboard')}} id="pills-overall-column-1-w-tab" data-bs-toggle="pill" data-bs-target="#pills-overall-column-1-w" role="tab" aria-controls="pills-overall-column-1-w" aria-selected="false">1 هفته</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-overall-column-1-m" role="tabpanel" aria-labelledby="pills-overall-column-1-m-tab">
                                <div class="complete-card__chart-wrapper">
                                    <div id="complete-card__chart-column-1" class="complete-card__chart-render"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-overall-column-3-m" role="tabpanel" aria-labelledby="pills-overall-column-3-m-tab">
                                <div class="complete-card__chart-wrapper">
                                    <div id="complete-card__chart-column-2" class="complete-card__chart-render"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-overall-column-30-m" role="tabpanel" aria-labelledby="pills-overall-column-30-m-tab">
                                <div class="complete-card__chart-wrapper">
                                    <div id="complete-card__chart-column-3" class="complete-card__chart-render"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-overall-column-1-h" role="tabpanel" aria-labelledby="pills-overall-column-1-h-tab">
                                <div class="complete-card__chart-wrapper">
                                    <div id="complete-card__chart-column-4" class="complete-card__chart-render"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-overall-column-24-h" role="tabpanel" aria-labelledby="pills-overall-column-24-h-tab">
                                <div class="complete-card__chart-wrapper">
                                    <div id="complete-card__chart-column-5" class="complete-card__chart-render"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-overall-column-1-d" role="tabpanel" aria-labelledby="pills-overall-column-1-d-tab">
                                <div class="complete-card__chart-wrapper">
                                    <div id="complete-card__chart-column-6" class="complete-card__chart-render"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-overall-column-1-w" role="tabpanel" aria-labelledby="pills-overall-column-1-w-tab">
                                <div class="complete-card__chart-wrapper">
                                    <div id="complete-card__chart-column-7" class="complete-card__chart-render"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Complete Card -->        <div class="dashboard__group dashboard__group--inner">
                        <!-- Start::Standard Card -->
                        <div class="standard-card standard-card--type-7" data-aos="fade-up">
                            <div class="container">
                                <div class="standard-card__head">
                                    <h6 class="standard-card__title">دارایی های برتر</h6>
                                </div>
                                <div class="standard-card__content">
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/logo-btc.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="fb-regular fb-regular--bold standard-card__content__list-info-value">دلار 53,260.20</p>
                                            <p class="fb-regular standard-card__content__list-info-crypto">بیتکوین</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <div class="standard-card__content__list-info-chart">
                                                <div id="standard-card--type-7-1" class="standard-card__content__list-info-chart-render"></div>
                                            </div>
                                            <div class="standard-card__content__list-info-infusion">
                                                <img src="/client/assets/media/images/icons/arrow-bearish.svg" alt="" class="standard-card__content__list-info-infusion-image">
                                                <p class="fb-sm standard-card__content__list-info-infusion-value text-bearish">1.80%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/logo-bnb.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="fb-regular fb-regular--bold standard-card__content__list-info-value">دلار 53,260.20</p>
                                            <p class="fb-regular standard-card__content__list-info-crypto">سکه بایننس</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <div class="standard-card__content__list-info-chart">
                                                <div id="standard-card--type-7-2" class="standard-card__content__list-info-chart-render"></div>
                                            </div>
                                            <div class="standard-card__content__list-info-infusion">
                                                <img src="/client/assets/media/images/icons/arrow-bullish.svg" alt="" class="standard-card__content__list-info-infusion-image">
                                                <p class="fb-sm standard-card__content__list-info-infusion-value text-bullish">2.22%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/logo-eth.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="fb-regular fb-regular--bold standard-card__content__list-info-value">دلار 12,344.12</p>
                                            <p class="fb-regular standard-card__content__list-info-crypto">اتریوم</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <div class="standard-card__content__list-info-chart">
                                                <div id="standard-card--type-7-3" class="standard-card__content__list-info-chart-render"></div>
                                            </div>
                                            <div class="standard-card__content__list-info-infusion">
                                                <img src="/client/assets/media/images/icons/arrow-bearish.svg" alt="" class="standard-card__content__list-info-infusion-image">
                                                <p class="fb-sm standard-card__content__list-info-infusion-value text-bearish">0.12%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/logo-ogn.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="fb-regular fb-regular--bold standard-card__content__list-info-value">دلار 53,260.20</p>
                                            <p class="fb-regular standard-card__content__list-info-crypto">پروتکل مبدا</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <div class="standard-card__content__list-info-chart">
                                                <div id="standard-card--type-7-4" class="standard-card__content__list-info-chart-render"></div>
                                            </div>
                                            <div class="standard-card__content__list-info-infusion">
                                                <img src="/client/assets/media/images/icons/arrow-bearish.svg" alt="" class="standard-card__content__list-info-infusion-image">
                                                <p class="fb-sm standard-card__content__list-info-infusion-value text-bearish">1.80%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/logo-btc.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="fb-regular fb-regular--bold standard-card__content__list-info-value">دلار 53,260.20</p>
                                            <p class="fb-regular standard-card__content__list-info-crypto">بیت کوین</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <div class="standard-card__content__list-info-chart">
                                                <div id="standard-card--type-7-5" class="standard-card__content__list-info-chart-render"></div>
                                            </div>
                                            <div class="standard-card__content__list-info-infusion">
                                                <img src="/client/assets/media/images/icons/arrow-bearish.svg" alt="" class="standard-card__content__list-info-infusion-image">
                                                <p class="fb-sm standard-card__content__list-info-infusion-value text-bearish">1.80%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/logo-bnb.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="fb-regular fb-regular--bold standard-card__content__list-info-value">دلار 53,260.20</p>
                                            <p class="fb-regular standard-card__content__list-info-crypto">سکه بایننس</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <div class="standard-card__content__list-info-chart">
                                                <div id="standard-card--type-7-6" class="standard-card__content__list-info-chart-render"></div>
                                            </div>
                                            <div class="standard-card__content__list-info-infusion">
                                                <img src="/client/assets/media/images/icons/arrow-bullish.svg" alt="" class="standard-card__content__list-info-infusion-image">
                                                <p class="fb-sm standard-card__content__list-info-infusion-value text-bullish">2.22%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/logo-eth.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="fb-regular fb-regular--bold standard-card__content__list-info-value">دلار 12,344.12</p>
                                            <p class="fb-regular standard-card__content__list-info-crypto">اتریوم</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <div class="standard-card__content__list-info-chart">
                                                <div id="standard-card--type-7-7" class="standard-card__content__list-info-chart-render"></div>
                                            </div>
                                            <div class="standard-card__content__list-info-infusion">
                                                <img src="/client/assets/media/images/icons/arrow-bearish.svg" alt="" class="standard-card__content__list-info-infusion-image">
                                                <p class="fb-sm standard-card__content__list-info-infusion-value text-bearish">0.12%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/logo-ogn.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="fb-regular fb-regular--bold standard-card__content__list-info-value">دلار 53,260.20</p>
                                            <p class="fb-regular standard-card__content__list-info-crypto"> پروتکل مبدا</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <div class="standard-card__content__list-info-chart">
                                                <div id="standard-card--type-7-8" class="standard-card__content__list-info-chart-render"></div>
                                            </div>
                                            <div class="standard-card__content__list-info-infusion">
                                                <img src="/client/assets/media/images/icons/arrow-bearish.svg" alt="" class="standard-card__content__list-info-infusion-image">
                                                <p class="fb-sm standard-card__content__list-info-infusion-value text-bearish">1.80%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="standard-card__vignette"></div>
                            </div>
                        </div>
                        <!-- End::Standard Card -->          <!-- Start::Standard Card -->
                        <div class="standard-card standard-card--type-5-v1" data-aos="fade-up">
                            <div class="container">
                                <div class="standard-card__head">
                                    <h6 class="standard-card__title">معامله</h6>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle dropdown-toggle--card-type-5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            همه
                                            <img src="/client/assets/media/images/icons/arrow-down.svg" alt="">
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="{{route('client.profile.dashboard')}}"></a></li>
                                            <li><a class="dropdown-item" href="{{route('client.profile.dashboard')}}">یک اقدام دیگر</a></li>
                                            <li><a class="dropdown-item" href="{{route('client.profile.dashboard')}}">یه چیز دیگه اینجا</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="standard-card__content">
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/transaction-arrow-green.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="standard-card__content__list-info-date">۱۴۰۲/۰۴/۰۵</p>
                                            <p class="standard-card__content__list-info-status">دريافت كردن</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <p class="standard-card__content__list-info-price"><span class="standard-card__content__list-info-price-value">0.442111</span> BTC</p>
                                            <p class="standard-card__content__list-info-id">ID: 21naSAN214532</p>
                                        </div>
                                    </div>
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/transaction-arrow-red.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="standard-card__content__list-info-date">۱۴۰۲/۰۴/۰۵</p>
                                            <p class="standard-card__content__list-info-status">ارسال</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <p class="standard-card__content__list-info-price"><span class="standard-card__content__list-info-price-value">0.442111</span> BTC</p>
                                            <p class="standard-card__content__list-info-id">ID: 21naSAN214532</p>
                                        </div>
                                    </div>
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/transaction-arrow-green.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="standard-card__content__list-info-date">۱۴۰۲/۰۴/۰۵</p>
                                            <p class="standard-card__content__list-info-status">دريافت كردن</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <p class="standard-card__content__list-info-price"><span class="standard-card__content__list-info-price-value">0.442111</span> BTC</p>
                                            <p class="standard-card__content__list-info-id">ID: 21naSAN214532</p>
                                        </div>
                                    </div>
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/transaction-arrow-green.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="standard-card__content__list-info-date">۱۴۰۲/۰۴/۰۵</p>
                                            <p class="standard-card__content__list-info-status">دریافت</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <p class="standard-card__content__list-info-price"><span class="standard-card__content__list-info-price-value">0.442111</span> BTC</p>
                                            <p class="standard-card__content__list-info-id">ID: 21naSAN214532</p>
                                        </div>
                                    </div>
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/transaction-arrow-red.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="standard-card__content__list-info-date">۱۴۰۲/۰۴/۰۵</p>
                                            <p class="standard-card__content__list-info-status">ارسال</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <p class="standard-card__content__list-info-price"><span class="standard-card__content__list-info-price-value">0.442111</span> BTC</p>
                                            <p class="standard-card__content__list-info-id">ID: 21naSAN214532</p>
                                        </div>
                                    </div>
                                    <div class="standard-card__content__list">
                                        <div class="standard-card__content__list-icon">
                                            <img src="/client/assets/media/images/icons/transaction-arrow-green.svg" alt="" class="standard-card__content__list-icon-image">
                                        </div>
                                        <div class="standard-card__content__list-info-left">
                                            <p class="standard-card__content__list-info-date">۱۴۰۲/۰۴/۰۵</p>
                                            <p class="standard-card__content__list-info-status">دریافت</p>
                                        </div>
                                        <div class="standard-card__content__list-info-right">
                                            <p class="standard-card__content__list-info-price"><span class="standard-card__content__list-info-price-value">0.442111</span> BTC</p>
                                            <p class="standard-card__content__list-info-id">ID: 21naSAN214532</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="standard-card__vignette"></div>
                            </div>
                        </div>
                        <!-- End::Standard Card -->        </div>
                </div>
            </div>
        </div>
    </div>
</div>
