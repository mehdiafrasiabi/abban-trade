<div>
    <nav  class="navbar navbar-expand-lg header-navbar header-navbar--v1" data-aos="fade-down">
        <div class="container">
            <a class="navbar-brand" href="{{route('client.home')}}">
                <img class="navbar-brand__icon" src="/client/assets/media/images/icons/logo.png" style="width: 85px" alt="AbbanTrade" />

            </a>
            <button class="navbar-toggler js-navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="/client/assets/media/images/icons/menu.svg" alt="MENU" />
            </button>

            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="navbar-buttons navbar-buttons--dekstop">
                    <a href="{{route('client.profile.dashboard')}}" class="btn btn-success btn-sm">پنل کاربری</a>
                </div>

            @else
                <div class="navbar-buttons navbar-buttons--dekstop">
                    <a href="{{route('client.register')}}" class="btn btn-primary btn-sm">ورود به سیستم</a>
                </div>
            @endif
        </div>
    </nav></div>
