<div>
    <nav  class="sidebar js-sidebar" data-aos="fade-right">
        <div class="container">
            <div class="sidebar-logo js-sidebar-logo" data-aos="fade-down" data-aos-delay="100">
                <img src="/client/assets/media/images/icons/logo.png" alt="" class="sidebar-logo__image">
            </div>
            <div class="sidebar-menu">
                <img src="/client/assets/media/images/icons/menu.svg" alt="" class="sidebar-menu__hamburger-menu js-sidebar-menu__hamburger-menu">
                <a  href="{{route('client.profile.dashboard')}}" class="sidebar-menu__list {{ request()->routeIs('client.profile.dashboard') ? 'active' : '' }}" data-aos="fade-right" data-aos-delay="100">
                    <img src="/client/assets/media/images/icons/dashboard-menu-icon.svg" alt="" class="sidebar-menu__list-icon">
                    <p class="sidebar-menu__list-name">داشبورد</p>
                </a>

                <a  href="{{route('client.profile.market')}}" class="sidebar-menu__list {{ request()->routeIs('client.profile.market') ? 'active' : '' }}" data-aos="fade-right" data-aos-delay="400">
                    <img src="/client/assets/media/images/icons/market-menu-icon.svg" alt="" class="sidebar-menu__list-icon">
                    <p class="sidebar-menu__list-name">بازار</p>
                </a>
                <a  href="{{route('client.profile.wallet')}}" class="sidebar-menu__list {{ request()->routeIs('client.profile.wallet') ? 'active' : '' }}" data-aos="fade-right" data-aos-delay="300">
                    <img src="/client/assets/media/images/icons/wallet-menu-icon.svg" alt="" class="sidebar-menu__list-icon">
                    <p class="sidebar-menu__list-name">کیف پول</p>
                </a>
                <a  href="{{route('client.profile.ticket')}}" class="sidebar-menu__list {{ request()->routeIs('client.profile.ticket') ? 'active' : '' }}" data-aos="fade-right" data-aos-delay="300">
                    <img src="/client/assets/media/images/icons/support-svgrepo-com.svg" alt="" class="sidebar-menu__list-icon">
                    <p class="sidebar-menu__list-name">تیکت و پشتیبانی</p>
                </a>
                <a  href="profile-v2.html" class="sidebar-menu__list" data-aos="fade-right" data-aos-delay="500">
                    <img src="/client/assets/media/images/icons/settings-menu-icon.svg" alt="" class="sidebar-menu__list-icon">
                    <p class="sidebar-menu__list-name">تنظیمات</p>
                </a>
            </div>
        </div>
        <div class="sidebar-menu--mobile">
            <a href="{{route('client.profile.dashboard')}}" class="sidebar-menu__list {{ request()->routeIs('client.profile.dashboard') ? 'active' : '' }}" data-aos="fade-right" data-aos-delay="100">
                <img src="/client/assets/media/images/icons/dashboard-menu-icon.svg" alt="" class="sidebar-menu__list-icon">
                <p class="sidebar-menu__list-name">داشبورد</p>
            </a>

            <a href="{{route('client.profile.market')}}" class="sidebar-menu__list {{ request()->routeIs('client.profile.market') ? 'active' : '' }}" data-aos="fade-right" data-aos-delay="400">
                <img src="/client/assets/media/images/icons/market-menu-icon.svg" alt="" class="sidebar-menu__list-icon">
                <p class="sidebar-menu__list-name">بازار</p>
            </a>
            <a href="{{route('client.profile.wallet')}}" class="sidebar-menu__list {{ request()->routeIs('client.profile.wallet') ? 'active' : '' }}" data-aos="fade-right" data-aos-delay="300">
                <img src="/client/assets/media/images/icons/wallet-menu-icon.svg" alt="" class="sidebar-menu__list-icon">
                <p class="sidebar-menu__list-name">کیف پول</p>
            </a>
            <a href="{{route('client.profile.ticket')}}" class="sidebar-menu__list {{ request()->routeIs('client.profile.ticket') ? 'active' : '' }}" data-aos="fade-right" data-aos-delay="300">
                <img src="/client/assets/media/images/icons/support-svgrepo-com.svg" alt="" class="sidebar-menu__list-icon">
                <p class="sidebar-menu__list-name">تیکت و پشتیبانی</p>
            </a>
            <a href="profile-v2.html" class="sidebar-menu__list" data-aos="fade-right" data-aos-delay="500">
                <img src="/client/assets/media/images/icons/settings-menu-icon.svg" alt="" class="sidebar-menu__list-icon">
                <p class="sidebar-menu__list-name">تنظیمات</p>
            </a>
        </div>
    </nav>
</div>
