<div>
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="/admin/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="/admin/assets/images/logo-dark.png" alt="" height="17">
                    </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="/admin/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="/admin/assets/images/logo-light.png" alt="" height="17">
                    </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title">
                        <span data-key="t-menu">منو</span></li>
                    <li class="nav-item ">
                        <a class="nav-link menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{route('admin.dashboard')}}" role="button"
                           aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">پیشخوان</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link {{ request()->routeIs('admin.crypto') ? 'active' : '' }}" href="{{route('admin.crypto')}}" role="button"
                           aria-expanded="false" aria-controls="sidebarCryptos">
                            <i class="ri-bit-coin-line"></i> <span data-key="t-cryptos">رمز ارزها</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link {{ request()->routeIs('admin.user') ? 'active' : '' }}" href="{{route('admin.user')}}" role="button"
                           aria-expanded="false" aria-controls="sidebarUsers">
                            <i class=" ri-user-6-line"></i> <span data-key="t-users">کاربران</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link {{ request()->routeIs('admin.department') ? 'active' : '' }}" href="{{route('admin.department')}}" role="button"
                           aria-expanded="false" aria-controls="sidebarDepartments">
                            <i class="  ri-hotel-line"></i> <span data-key="t-departments">دپارتمان ها</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link {{ request()->routeIs('admin.ticket.index') ? 'active' : '' }}" href="{{route('admin.ticket.index')}}" role="button"
                           aria-expanded="false" aria-controls="sidebarTickets">
                            <i class="ri-ticket-2-line"></i> <span data-key="t-ticket">تیکت و پشتیبانی</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link menu-link {{ request()->routeIs('admin.kyc') ? 'active' : '' }}" href="#sidebarUI" data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="sidebarUI">
                            <i class="ri-account-circle-line"></i>
                            <span data-key="t-base-ui">احراز هویت</span>
                        </a>
                        <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="nav nav-sm flex-column">

                                        <li class="nav-item">
                                            <a href="{{ route('admin.kyc') }}" class="nav-link"
                                               data-key="t-basic">همه</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.kyc', ['status' => 'pending']) }}" class="nav-link"
                                               data-key="t-basic">در انتظار تایید احراز</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.kyc', ['status' => 'rejected']) }}"
                                               class="nav-link" data-key="t-cover">رد شده</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.kyc', ['status' => 'completed']) }}"
                                               class="nav-link" data-key="t-cover">تایید شده</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
</div>
