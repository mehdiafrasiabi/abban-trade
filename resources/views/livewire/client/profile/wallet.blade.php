<div>
    @push('link')
        <link href="/client/assets/css/pages/wallet-v2.css" rel="stylesheet" type="text/css">
        <link href="/client/assets/css/pages/wallet-v1.css" rel="stylesheet" type="text/css">

    @endpush
    <div class="wallet wallet--v2">
        <div   class="container container--wallet-v2">
            <!-- Start::Dashboard Navbar v2 -->
            <nav class="navbar navbar-expand-lg header-navbar header-navbar-dashboard--v2" data-aos="fade-down">
                <div class="container container--dashboard-nav">
                    <div class="navbar-left">
                        <a class="navbar-brand" href="wallet-v2.html#">
                            <p class="navbar-brand__text">کیف پول رمزنگاری شده</p>
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
{{--                        <div class="navbar-profile-menu">--}}
{{--                            <p class="navbar-profile-menu__text">جان دو</p>--}}
{{--                            <img src="/client/assets/media/images/profile-photo.png" alt="profile-photo-icon" class="navbar-profile-menu__image">--}}
{{--                            <img src="/client/assets/media/images/icons/arrow-down.svg" alt="arrow-down-icon" class="navbar-profile-menu__arrow">--}}
{{--                            <div class="navbar-profile-menu__dropdown">--}}
{{--                                <div class="navbar-profile-menu__dropdown-item">--}}
{{--                                    <a class="fb-regular dropdown-item__link" href="profile-v2.html">اکانت</a>--}}
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
{{--                                        <a class="fb-regular dropdown-item__link" href="profile-v2.html">اکانت</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="navbar-profile-menu__dropdown-item">--}}
{{--                                        <a class="fb-regular dropdown-item__link" href="sign-in-v2.html">خروج</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="navbar-search-popup">
                        <input type="text" class="navbar-search-popup__input js-navbar-search-popup__input" placeholder="جستجو">
                        <img src="/client/assets/media/images/icons/search.svg" alt="search-icon" class="navbar-search-popup__image">
                        <img src="/client/assets/media/images/icons/plus-icon.svg" alt="cancel-icon" class="navbar-search-popup__image--cancel js-navbar-search-popup__image--cancel">
                    </div>
                </div>
            </nav>
            <!-- End::Dashboard Navbar v2 -->    <div  class="container container--dashboard">
                <h2 class="dashboard__title mb-4">کیف پول رمزنگاری شده</h2>
                <div class="wallet-group">
                    <div class="wallet-group--left">
                        <!-- Start::Standard Card -->
                        <div class="standard-card standard-card--type-6-v1">
                            <div class="container">
                                <div class="standard-card__content" data-aos="fade-up">
                                    <div class="standard-card__content-head">
                                        <div class="standard-card__content-currency">
                                            <img src="/client/assets/media/images/icons/بیتکوین.svg" alt="" class="standard-card__content-currency-icon">
                                            <p class="standard-card__content-currency-name">BTC</p>
                                        </div>
                                        <p class="standard-card__content-percentage text-bullish">0.25%</p>
                                    </div>
                                    <p class="standard-card__content-price-1">0.2133214214</p>
                                    <p class="standard-card__content-price-2">3,230.98 دلار</p>
                                    <div class="standard-card__content-chart-wrapper">
                                        <div id="standard-card__content-chart-7" class="standard-card__content-chart-render"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End::Standard Card -->          <!-- Start::Standard Card -->
                        <div class="standard-card standard-card--type-6-v2" data-aos="fade-up">
                            <div class="container">
                                <div class="standard-card__content">
                                    <div class="standard-card__content-head">
                                        <div class="standard-card__content-currency">
                                            <img src="/client/assets/media/images/icons/ETH.svg" alt="" class="standard-card__content-currency-icon">
                                            <p class="standard-card__content-currency-name">ETH</p>
                                        </div>
                                        <p class="standard-card__content-percentage text-bearish">0.12%</p>
                                    </div>
                                    <p class="standard-card__content-price-1">0.3454364</p>
                                    <p class="standard-card__content-price-2">2,345.21 دلار</p>
                                    <div class="standard-card__content-chart-wrapper">
                                        <div id="standard-card__content-chart-8" class="standard-card__content-chart-render"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End::Standard Card -->          <!-- Start::Standard Card -->
                        <div class="standard-card standard-card--type-6-v2" data-aos="fade-up">
                            <div class="container">
                                <div class="standard-card__content">
                                    <div class="standard-card__content-head">
                                        <div class="standard-card__content-currency">
                                            <img src="/client/assets/media/images/icons/USDT.svg" alt="" class="standard-card__content-currency-icon">
                                            <p class="standard-card__content-currency-name">USDT</p>
                                        </div>
                                        <p class="standard-card__content-percentage text-bullish">0.56%</p>
                                    </div>
                                    <p class="standard-card__content-price-1">0.3454364</p>
                                    <p class="standard-card__content-price-2">2,345.21 دلار</p>
                                    <div class="standard-card__content-chart-wrapper">
                                        <div id="standard-card__content-chart-9" class="standard-card__content-chart-render"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End::Standard Card -->
                        <!-- Start::Standard Card -->
                        <div class="standard-card standard-card--type-6-v3" data-aos="fade-up">
                            <div class="container">
                                <div class="standard-card__content">
                                    <button class="standard-card__content-button-wrapper">
                                        <div class="standard-card__content-button">
                                            <img src="/client/assets/media/images/icons/plus-icon.svg" alt="" class="standard-card__content-button-icon">
                                            <div class="standard-card__content-button-ellipse--inner"></div>
                                            <div class="standard-card__content-button-ellipse--mid"></div>
                                        </div>
                                        <p class="fb-regular fb-regular--bold standard-card__content-button-text">
                                            افزودن کیف پول جدید
                                        </p>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- End::Standard Card -->        </div>
                    <div class="wallet-group--right">
                        <!-- Start::Advance Card -->
                        <div class="advance-card advance-card--type-3-v1" data-aos="fade-up">
                            <div class="advance-card__title">
                                <img src="/client/assets/media/images/icons/logo-eth.svg" alt="" class="advance-card__title-image">
                                <h6 class="advance-card__title-text">ETH</h6>
                            </div>
                            <div class="advance-card__balance">
                                <p class="advance-card__balance-title">کل موجودی</p>
                                <p class="advance-card__balance-crypto-value">0.2133214214</p>
                                <p class="advance-card__balance-currency-value">
                                    3,230.98
                                    <span class="advance-card__balance-currency"> دلار</span>
                                </p>
                            </div>
                            <div class="advance-card__card">
                                <div class="advance-card__card-desc">
                                    <p class="advance-card__card-desc-title">موجودی مبادله</p>
                                    <div class="advance-card__card-desc-value">
                                        <p class="advance-card__card-desc-value-crypto">0.213435345</p>
                                        <p class="advance-card__card-desc-value-currency">3,897.98 دلار</p>
                                    </div>
                                </div>
                                <div class="advance-card__card-chart-wrapper">
                                    <div id="advance-card__card-radial-1" class="advance-card__card-chart-render"></div>
                                </div>
                            </div>
                            <div class="advance-card__card">
                                <div class="advance-card__card-desc">
                                    <p class="advance-card__card-desc-title">تراز دارایی ها</p>
                                    <div class="advance-card__card-desc-value">
                                        <p class="advance-card__card-desc-value-crypto">0.213435345</p>
                                        <p class="advance-card__card-desc-value-currency">3,897.98 دلار</p>
                                    </div>
                                </div>
                                <div class="advance-card__card-chart-wrapper">
                                    <div id="advance-card__card-radial-2" class="advance-card__card-chart-render"></div>
                                </div>
                            </div>
                            <div class="advance-card__buttons">
                                <button class="btn btn-primary advance-card__button btn-sm btn-pill">کنار کشیدن</button>
                                <button class="btn btn-secondary advance-card__button btn-sm">سپرده</button>
                            </div>
                        </div>
                        <!-- End::Advance Card -->          <!-- Start::Table Section -->
                        <div class="table-wrapper table--type-1" data-aos="fade-up">
                            <div class="table-container">
                                <table class="table table-content">
                                    <thead>
                                    <tr>
                                        <th class="fb-regular table__head" colspan="2">دارایی ها</th>
                                        <th class="fb-regular table__head">در صورت سفارش</th>
                                        <th class="fb-regular table__head">موجودی موجود</th>
                                        <th class="fb-regular table__head">موجودی کل</th>
                                        <th class="fb-regular table__head">بازار 24 ساعته</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="table__assets">
                                            <div class="table__assets-crypto">
                                                <img src="/client/assets/media/images/icons/logo-btc.svg" alt="" class="table__assets-crypto-icon">
                                                <p class="fb-regular fb-regular--bold table__assets-crypto-abbr">BTC</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__assets-name">بیتکوین</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__order"> دلار 53,260.20</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__available"> دلار 53,260.20</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__total"> دلار 53,260.20</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__market text-bullish">0.25%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table__assets">
                                            <div class="table__assets-crypto">
                                                <img src="/client/assets/media/images/icons/logo-eth.svg" alt="" class="table__assets-crypto-icon">
                                                <p class="fb-regular fb-regular--bold table__assets-crypto-abbr">ETH</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__assets-name">اتریوم</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__order"> دلار 1,643.80</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__available"> دلار 1,643.80</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__total"> دلار 1,643.80</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__market text-bearish">4.51%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table__assets">
                                            <div class="table__assets-crypto">
                                                <img src="/client/assets/media/images/icons/logo-bnb.svg" alt="" class="table__assets-crypto-icon">
                                                <p class="fb-regular fb-regular--bold table__assets-crypto-abbr">BNB</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__assets-name">سکه بایننس</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__order"> دلار 247.72</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__available"> دلار 247.72</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__total"> دلار 247.72</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__market text-bullish">2.43%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table__assets">
                                            <div class="table__assets-crypto">
                                                <img src="/client/assets/media/images/icons/logo-xrp.svg" alt="" class="table__assets-crypto-icon">
                                                <p class="fb-regular fb-regular--bold table__assets-crypto-abbr">XRP</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__assets-name">اکس پی آر</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__order"> دلار 0.5657</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__available"> دلار 0.5657</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__total"> دلار 0.5657</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__market text-bullish">2.42%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table__assets">
                                            <div class="table__assets-crypto">
                                                <img src="/client/assets/media/images/icons/logo-usdt.svg" alt="" class="table__assets-crypto-icon">
                                                <p class="fb-regular fb-regular--bold table__assets-crypto-abbr">USDT</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__assets-name">تتر</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__order"> دلار 0.9999</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__available"> دلار 0.9999</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__total"> دلار 0.9999</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__market text-bearish">0.40%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table__assets">
                                            <div class="table__assets-crypto">
                                                <img src="/client/assets/media/images/icons/logo-xrp.svg" alt="" class="table__assets-crypto-icon">
                                                <p class="fb-regular fb-regular--bold table__assets-crypto-abbr">XRP</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__assets-name">اکس پی آر</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__order"> دلار 0.5657</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__available"> دلار 0.5657</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__total"> دلار 0.5657</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__market text-bullish">2.42%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table__assets">
                                            <div class="table__assets-crypto">
                                                <img src="/client/assets/media/images/icons/logo-act.svg" alt="" class="table__assets-crypto-icon">
                                                <p class="fb-regular fb-regular--bold table__assets-crypto-abbr">ACT</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__assets-name">آچاین</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__order"> دلار 40,355.12</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__available"> دلار 40,355.12</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__total"> دلار 40,355.12</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__market text-bullish">0.05%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table__assets">
                                            <div class="table__assets-crypto">
                                                <img src="/client/assets/media/images/icons/logo-ogn.svg" alt="" class="table__assets-crypto-icon">
                                                <p class="fb-regular fb-regular--bold table__assets-crypto-abbr">OGN</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__assets-name">پروتکل مبدا</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__order"> دلار 3,152.93</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__available"> دلار 3,152.93</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__total"> دلار 3,152.93</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__market text-bearish">0.22%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table__assets">
                                            <div class="table__assets-crypto">
                                                <img src="/client/assets/media/images/icons/logo-itc.svg" alt="" class="table__assets-crypto-icon">
                                                <p class="fb-regular fb-regular--bold table__assets-crypto-abbr">ITC</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__assets-name">زنجیره اینترنت اشیا</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__order"> دلار 21,222.20</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__available"> دلار 21,222.20</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__total"> دلار 21,222.20</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__market text-bullish">0.23%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table__assets">
                                            <div class="table__assets-crypto">
                                                <img src="/client/assets/media/images/icons/logo-xrp.svg" alt="" class="table__assets-crypto-icon">
                                                <p class="fb-regular fb-regular--bold table__assets-crypto-abbr">XRP</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__assets-name">اکس پی آر</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__order"> دلار 0.5657</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__available"> دلار 0.5657</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__total"> دلار 0.5657</p>
                                        </td>
                                        <td>
                                            <p class="fb-regular table__market text-bullish">2.42%</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End::Table Section -->        </div>
                </div>
            </div>
        </div>
    </div>
</div>
