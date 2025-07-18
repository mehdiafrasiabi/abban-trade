<div>
    @push('link')
        <link href="/client/assets/css/pages/wallet-v2.css" rel="stylesheet" type="text/css">
        <link href="/client/assets/css/pages/wallet-v1.css" rel="stylesheet" type="text/css">
    @endpush

    <div class="wallet wallet--v2">
        <div class="container container--wallet-v2">
            <!-- Start::Dashboard Navbar v2 -->
            <nav class="navbar navbar-expand-lg header-navbar header-navbar-dashboard--v2" >
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

            <div class="container container--dashboard">
                <h2 class="dashboard__title mb-4">کیف پول رمزنگاری شده</h2>

                <div class="wallet-group">
                    <div class="wallet-group--right">
                        <!-- Start::Advance Card -->
                        <div class="advance-card advance-card--type-3-v1" >
                            <div class="advance-card__balance">
                                <p class="advance-card__balance-title">کل موجودی</p>
                                <p class="advance-card__balance-crypto-value">
                                    {{ number_format($wallet->balance ?? 0, 2) }}
                                </p>
                                <p class="advance-card__balance-currency-value">
                                    حدود {{ number_format(($wallet->balance ?? 0) / 89_000, 0) }}
                                    <span class="advance-card__balance-currency">دلار</span>
                                </p>
                            </div>

                            <div>


                                    <div class="wallet-form-section">
                                        @if($notification)
                                            <div class="alert alert-info mt-3">{{ $notification }}</div>
                                        @endif

                                        {{-- فرم واریز --}}
                                        <form wire:submit.prevent="submitDeposit" class="mb-4" wire:ignore.self>
                                            <h5>فرم واریز</h5>
                                            <div class="mb-3">
                                                <label>مبلغ واریز (تومان):</label>
                                                <input type="number" class="form-control" wire:model.defer="deposit_amount">
                                                @error('deposit_amount') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label>کد تراکنش (TX ID):</label>
                                                <input type="text" class="form-control" wire:model.defer="deposit_tx_id">
                                                @error('deposit_tx_id') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <button class="btn btn-green">
                                                <span wire:confirm="ایا از مقدار واریزی خود اطمینان دارید؟" wire:loading.remove wire:target="submitDeposit">ثبت واریز</span>
                                                <div wire:loading wire:target="submitDeposit" class="spinner-border text-light" role="status"></div>
                                            </button>
                                        </form>
<hr>
                                        {{-- فرم برداشت --}}
                                        <form wire:submit.prevent="submitWithdraw" wire:ignore.self="submitWithdraw">
                                            <h5>فرم برداشت</h5>
                                            <div class="mb-3">
                                                <label>مبلغ برداشت (تومان):</label>
                                                <input type="number" class="form-control" wire:model.defer="withdraw_amount">
                                                @error('withdraw_amount') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label>توضیحات:</label>
                                                <textarea class="form-control" wire:model.defer="withdraw_description"></textarea>
                                                @error('withdraw_description') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <button class="btn btn-danger">
                                                <span wire:confirm="ایا از مقدار برداشت خود اطمینان دارید ؟" wire:loading.remove wire:target="submitWithdraw">ثبت برداشت</span>
                                                <div wire:loading wire:target="submitWithdraw" class="spinner-border text-light" role="status"></div>
                                            </button>
                                        </form>
                                    </div>
                            </div>
                        </div>

                        <!-- Start::Table Section -->
                        <div  class="table-wrapper table--type-2" >
                            <div class="table-container">
                                <table class="table table-content">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نوع</th>
                                        <th>مبلغ</th>
                                        <th>TX ID</th>
                                        <th>وضعیت</th>
                                        <th>توضیح</th>
                                        <th>تاریخ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($transactions as $tx)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $tx->type == 'deposit' ? 'واریز' : 'برداشت' }}</td>
                                            <td>{{ number_format($tx->amount) }}</td>
                                            <td>{{ $tx->tx_id ?? '---' }}</td>
                                            <td>
                                                @if($tx->status == 'approved')
                                                    <span class="text-success">تأیید شده</span>
                                                @elseif($tx->status == 'pending')
                                                    <span class="text-warning">در حال بررسی</span>
                                                @else
                                                    <span class="text-danger">رد شده</span>
                                                @endif
                                            </td>
                                            <td>{{ $tx->description ?? '---' }}</td>
                                            <td>{{ jalali($tx->created_at)->format('Y/m/d H:i') }}</td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="6">هیچ تراکنشی یافت نشد.</td></tr>
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
