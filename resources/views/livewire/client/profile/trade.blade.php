<div>
    @push('link')
        <link href="/client/assets/css/pages/exchange-v2.css" rel="stylesheet" type="text/css">
    @endpush
        <div class="exchange exchange--v2">
            <div class="container container--dashboard-v2">
                <!-- Start::Dashboard Navbar v2 -->
                <nav class="navbar navbar-expand-lg header-navbar header-navbar-dashboard--v2" data-aos="fade-down">
                    <div class="container container--dashboard-nav">
                        <div class="navbar-left">
                            <a class="navbar-brand" href="exchange-v2.html#">
                                <p class="navbar-brand__text">تبادل</p>
                                <img src="/client/assets/media/images/icons/logo.png" alt="" class="navbar-brand__icon">
                            </a>
                        </div>
                        <div class="navbar-right">
                            <div class="navbar-search">
                                <input type="text" class="navbar-search__input" placeholder="Search">
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
                            </div>
                        </div>
                        <div class="navbar-search-popup">
                            <input type="text" class="navbar-search-popup__input js-navbar-search-popup__input" placeholder="جستجو">
                            <img src="/client/assets/media/images/icons/search.svg" alt="search-icon" class="navbar-search-popup__image">
                            <img src="/client/assets/media/images/icons/plus-icon.svg" alt="cancel-icon" class="navbar-search-popup__image--cancel js-navbar-search-popup__image--cancel">
                        </div>
                    </div>
                </nav>
                <!-- End::Dashboard Navbar v2 -->    <div class="container container--dashboard">
                    <h2 class="dashboard__title mb-4">تبادل</h2>
                    <div class="exchange-group">
                        <div class="exchange-group--right">
                            <!-- Start::Standard Card -->
                            <div class="standard-card standard-card--type-8-v1" data-aos="fade-up">
                                <div class="standard-card__container">
                                    <div class="standard-card__items">
                                        <div class="standard-card__item standard-card__item--1">
                                            <div class="standard-card__item-left">
                                                <img src="{{ $data['image']['large'] }}" alt="" class="standard-card__item-image">
                                                <div class="standard-card__item-desc">
                                                    <p class="fb-regular standard-card__item-title">{{ strtoupper($data['symbol']) }}</p>
                                                    <p class="fd-sm fd-sm--bold standard-card__item-crypto">{{ $data['name'] }}</p>
                                                </div>
                                            </div>
                                            <div class="standard-card__item-collapse">
                                                <div class="item-collapse__group-1">
                                                    <div class="item-collapse__title">
                                                        <p class="fb-sm item-collapse__title-text">تغییر 24 ساعته</p>
                                                        <div class="item-collapse__title-influsion">
                                                            <img src="/client/assets/media/images/icons/arrow-bullish.svg" alt="" class="item-collapse__title-influsion-icon">
                                                            <p class="fb-regular fb-regular--bold item-collapse__title-influsion-value text-bullish">2.11%</p>
                                                        </div>
                                                    </div>
                                                    <div class="item-collapse__chart-wrapper">
                                                        <div id="item-collapse__chart-line-1" class="item-collapse__chart-render"></div>
                                                    </div>
                                                </div>
                                                <div class="item-collapse__group-2">
                                                    <p class="fb-sm item-collapse__price">آخرین قیمت: <span class="item-collapse__price-value text-bullish">18432.320</span></p>
                                                    <p class="fb-sm item-collapse__price">24 ساعت کم: <span class="item-collapse__price-value text-bearish">18432.320</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="standard-card__separator"></div>

                                        <div class="standard-card__separator"></div>
                                        <div class="standard-card__item standard-card__item--3">
                                            <p class="fb-regular standard-card__item-title">آخرین قیمت</p>
                                            <p class="fd-sm fd-sm--bold standard-card__item-value">{{ number_format($data['market_data']['current_price']['usd'], 2) }} $</p>
                                        </div>
                                        <div class="standard-card__separator"></div>
                                        <div class="standard-card__item standard-card__item--4">
                                            <p class="fb-regular standard-card__item-title">  تغییر ۲۴ساعته</p>
                                            <p class="@if($data['market_data']['price_change_percentage_24h'] >= 0) text-green @else text-red @endif fd-sm fd-sm--bold standard-card__item-value">
                                                {{ $data['market_data']['price_change_percentage_24h'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::Standard Card -->
                            <!-- Start::Complete Card -->
                            <div class="complete-card complete-card--type-4" data-aos="fade-up">

                                <div class="tab-content tab-content--desktop">
                                    <iframe
                                        src="https://www.tradingview-widget.com/embed-widget/advanced-chart/?locale=en#%7B%22autosize%22%3Atrue%2C%22symbol%22%3A%22BINANCE%3A{{strtoupper($data['symbol'])}}USDT%22%2C%22interval%22%3A%2240%22%2C%22timezone%22%3A%22Asia%2FTehran%22%2C%22theme%22%3A%22dark%22%2C%22style%22%3A%221%22%2C%22allow_symbol_change%22%3Atrue%2C%22show_popup_button%22%3Atrue%2C%22popup_width%22%3A%221000%22%2C%22popup_height%22%3A%22650%22%2C%22support_host%22%3A%22https%3A%2F%2Fwww.tradingview.com%22%2C%22hide_top_toolbar%22%3Afalse%2C%22withdateranges%22%3Atrue%2C%22hide_side_toolbar%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A%22100%25%22%2C%22hide_legend%22%3Afalse%7D"
                                        style="width: 100%; height: 600px;"
                                        frameborder="0"
                                        allowtransparency="true"
                                        scrolling="no">
                                    </iframe>

                                </div>

                                <div class="tab-content tab-content--mobile">
                                    <iframe
                                        src="https://www.tradingview-widget.com/embed-widget/advanced-chart/?locale=en#%7B%22autosize%22%3Atrue%2C%22symbol%22%3A%22BINANCE%3A{{strtoupper($data['symbol'])}}USDT%22%2C%22interval%22%3A%2240%22%2C%22timezone%22%3A%22Asia%2FTehran%22%2C%22theme%22%3A%22dark%22%2C%22style%22%3A%221%22%2C%22allow_symbol_change%22%3Atrue%2C%22show_popup_button%22%3Atrue%2C%22popup_width%22%3A%221000%22%2C%22popup_height%22%3A%22650%22%2C%22support_host%22%3A%22https%3A%2F%2Fwww.tradingview.com%22%2C%22hide_top_toolbar%22%3Afalse%2C%22withdateranges%22%3Atrue%2C%22hide_side_toolbar%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A%22100%25%22%2C%22hide_legend%22%3Afalse%7D"
                                        style="width: 100%; height: 600px;"
                                        frameborder="0"
                                        allowtransparency="true"
                                        scrolling="no">
                                    </iframe>

                                </div>
                            </div>
                            <!-- End::Complete Card -->          <!-- Start::Table Section -->
                            <div class="table-wrapper table--type-3" data-aos="fade-up">
                                <div class="table__title">
                                    <h6 class="table__title-text">معاملات بازار</h6>
                                    <nav class="navbar">
                                        <div class="table__title-tabs" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <p class="fb-regular fb-regular--bold table__title-tab active" id="pills-market-trades-open-order-tab" data-bs-toggle="pill" data-bs-target="#pills-market-trades-open-order" role="tab" aria-controls="pills-market-trades-open-order" aria-selected="true">سفارش باز</p>
                                            </li>
                                            <li class="nav-item">
                                                <p class="fb-regular fb-regular--bold table__title-tab" id="pills-market-trades-order-history-tab" data-bs-toggle="pill" data-bs-target="#pills-market-trades-order-history" role="tab" aria-controls="pills-market-trades-order-history" aria-selected="false">تاریخچه سفارش ها</p>
                                            </li>
                                            <li class="nav-item">
                                                <p class="fb-regular fb-regular--bold table__title-tab" id="pills-market-trades-order-book-tab" data-bs-toggle="pill" data-bs-target="#pills-market-trades-order-book" role="tab" aria-controls="pills-market-trades-order-book" aria-selected="false">سفارش کتاب</p>
                                            </li>
                                        </div>
                                    </nav>
                                    <div class="dropdown table__dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            سفارش باز
                                            <img src="/client/assets/media/images/icons/arrow-down.svg" alt="">
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="pills-tab" role="tablist">
                                            <li><a class="dropdown-item active" href="exchange-v2.html#" id="pills-market-trades-open-order-tab" data-bs-toggle="pill" data-bs-target="#pills-market-trades-open-order" role="tab" aria-controls="pills-market-trades-open-order" aria-selected="true">سفارش باز</a></li>
                                            <li><a class="dropdown-item" href="exchange-v2.html#" id="pills-market-trades-order-history-tab" data-bs-toggle="pill" data-bs-target="#pills-market-trades-order-history" role="tab" aria-controls="pills-market-trades-order-history" aria-selected="false">تاریخچه سفارش ها</a></li>
                                            <li><a class="dropdown-item" href="exchange-v2.html#" id="pills-market-trades-order-book-tab" data-bs-toggle="pill" data-bs-target="#pills-market-trades-order-book" role="tab" aria-controls="pills-market-trades-order-book" aria-selected="false">سفارش کتاب</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="pills-market-trades-open-order" role="tabpanel" aria-labelledby="pills-market-trades-open-order-tab">
                                        <div class="table-container">
                                            <table class="table table-content">
                                                <thead>
                                                <tr>
                                                    <th class="fb-regular table__head">زمان</th>
                                                    <th class="fb-regular table__head">قیمت (ETH)</th>
                                                    <th class="fb-regular table__head">مقدار (BTC)</th>
                                                    <th class="fb-regular table__head">کل (ETH)</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bearish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bearish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bearish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bearish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-market-trades-order-history" role="tabpanel" aria-labelledby="pills-market-trades-order-history-tab">
                                        <div class="table-container">
                                            <table class="table table-content">
                                                <thead>
                                                <tr>
                                                    <th class="fb-regular table__head">زمان</th>
                                                    <th class="fb-regular table__head">قیمت (ETH)</th>
                                                    <th class="fb-regular table__head">مقدار (BTC)</th>
                                                    <th class="fb-regular table__head">کل (ETH)</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bearish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bearish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bearish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bearish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-market-trades-order-book" role="tabpanel" aria-labelledby="pills-market-trades-order-book-tab">
                                        <div class="table-container">
                                            <table class="table table-content">
                                                <thead>
                                                <tr>
                                                    <th class="fb-regular table__head">زمان</th>
                                                    <th class="fb-regular table__head">قیمت (ETH)</th>
                                                    <th class="fb-regular table__head">مقدار (BTC)</th>
                                                    <th class="fb-regular table__head">کل (ETH)</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bearish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bearish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bearish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bearish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="fb-regular">12:34:44</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular text-bullish">243546.12443536</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">12425.21435364</p>
                                                    </td>
                                                    <td>
                                                        <p class="fb-regular">24324.320214535</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="table__vignette"></div>
                            </div>
                            <!-- End::Table Section -->        </div>
                        <div class="exchange-group--left">
                            <!-- Start::Advance Card -->
                            <div class="advance-card advance-card--type-2" data-aos="fade-up">
                                <div class="advance-card__title">
                                    <h6 class="advance-card__title-text">بیتکوین</h6>
                                    <img src="/client/assets/media/images/icons/logo-btc.svg" alt="" class="advance-card__title-image">
                                </div>
                                <div class="advance-card__form">
                                    <div class="advance-card__form-title">
                                        <p class="advance-card__form-title-text">موجودی فعلی</p>
                                    </div>
                                    <div class="forms-purchase forms-purchase--advance-card">
                                        <div class="forms-group forms-group--value">
                                            <input type="number" min="0" value="4000" class="form-control forms-purchase__value">
                                        </div>
                                        <div class="forms-group forms-group--purchase js-forms-group--purchase" id="custom-select-purchase3">
                                            <div class="forms-group__items selected" data-selected="btc">
                                                <p class="fg-items__value">BTC</p>
                                            </div>
                                            <div class="forms-group__dropdown js-forms-group__dropdown">
                                                <div class="forms-group__items" data-selected="usd">
                                                    <p class="fg-items__value">دلار</p>
                                                </div>
                                                <div class="forms-group__items active" data-selected="btc">
                                                    <p class="fg-items__value">BTC</p>
                                                </div>
                                                <div class="forms-group__items" data-selected="eth">
                                                    <p class="fg-items__value">ETH</p>
                                                </div>
                                                <div class="forms-group__items" data-selected="bnb">
                                                    <p class="fg-items__value">BNB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="advance-card__form">
                                    <div class="advance-card__form-title">
                                        <p class="advance-card__form-title-text">صدا (24 ساعته)</p>
                                        <div class="advance-card__form-title-percent">
                                            <img src="/client/assets/media/images/icons/arrow-bullish.svg" alt="" class="advance-card__form-title-percent-image">
                                            <p class="advance-card__form-title-percent-value text-bullish">2.36%</p>
                                        </div>
                                    </div>
                                    <div class="forms-purchase forms-purchase--advance-card">
                                        <div class="forms-group forms-group--value">
                                            <input type="number" min="0" value="4000" class="form-control forms-purchase__value">
                                        </div>
                                        <div class="forms-group forms-group--purchase js-forms-group--purchase" id="custom-select-purchase4">
                                            <div class="forms-group__items selected" data-selected="usd">
                                                <p class="fg-items__value">دلار</p>
                                            </div>
                                            <div class="forms-group__dropdown js-forms-group__dropdown">
                                                <div class="forms-group__items active" data-selected="usd">
                                                    <p class="fg-items__value">دلار</p>
                                                </div>
                                                <div class="forms-group__items" data-selected="btc">
                                                    <p class="fg-items__value">BTC</p>
                                                </div>
                                                <div class="forms-group__items" data-selected="eth">
                                                    <p class="fg-items__value">ETH</p>
                                                </div>
                                                <div class="forms-group__items" data-selected="bnb">
                                                    <p class="fg-items__value">BNB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="advance-card__payment">
                                    <div class="advance-card__payment-title">
                                        <p class="advance-card__payment-title-text">روش های پرداخت</p>
                                    </div>
                                    <div class="forms-group forms-select js-forms-select" id="custom-select-form-1">
                                        <div class="forms-group__items selected" data-selected="usd">
                                            <img class="fg-items__icon" src="/client/assets/media/images/icons/usd.svg" alt="">
                                            <p class="fg-items__value">پایوالت</p>
                                        </div>
                                        <img class="forms-select__arrow-down" src="/client/assets/media/images/icons/arrow-down.svg" alt="">
                                        <div class="forms-group__dropdown js-forms-group__dropdown">
                                            <div class="forms-group__items active" data-selected="usd">
                                                <img class="fg-items__icon" src="/client/assets/media/images/icons/usd.svg" alt="">
                                                <p class="fg-items__value">پایوالت</p>
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
                                <div class="advance-card__buttons">
                                    <button class="btn btn-secondary advance-card__button button--green">خرید</button>
                                    <button class="btn btn-secondary advance-card__button button--red">فروش</button>
                                </div>
                            </div>
                            <!-- End::Advance Card -->          <!-- Start::Advance Card -->
                            <div class="advance-card advance-card--type-1-v1" data-aos="fade-up">
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
                                        <div class="forms-currency forms-currency--advance-card">
                                            <div class="forms-group forms-group--value">
                                                <input type="number" min="0" value="5000" class="form-control forms-currency__value">
                                            </div>
                                            <div class="forms-currency__line"></div>
                                            <div class="forms-group forms-group--currency js-forms-group--currency" id="custom-select-currency-1">
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
                                        <p class="advance-card__forms-currency__title">خرید</p>
                                        <div class="forms-currency forms-currency--advance-card">
                                            <div class="forms-group forms-group--value">
                                                <input type="number" min="0" value="5000" class="form-control forms-currency__value">
                                            </div>
                                            <div class="forms-currency__line"></div>
                                            <div class="forms-group forms-group--currency js-forms-group--currency" id="custom-select-currency-2">
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
                            <!-- End::Advance Card -->        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
