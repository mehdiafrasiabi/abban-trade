
<!DOCTYPE html>
<html lang="fa">
<head>
    @include('layouts.client.auth-link')
    {!! SEO::generate() !!}
</head>

<body >

<!-- Begin::preloader -->
<div id="preloader-wrapper">
    <div id="loading-layer">
        <div class="loading">
            <div class="rect-one"></div>
            <div class="rect-two"></div>
            <div class="rect-three"></div>
            <div class="rect-four"></div>
            <div class="rect-five"></div>
        </div>
    </div>
</div>
<!-- End::preloader -->

<!-- Begin::auth-page -->
{{$slot}}
<!-- End::auth-page -->
@include('layouts.client.auth-script')
</body>
</html>
