<!DOCTYPE html>
<html lang="fa">
<head>
    {!! SEO::generate() !!}
    @include('layouts.client.profile-link')
</head>

<body class="">

<!-- Start::Dashboard Sidebar -->
<livewire:client.profile.layout.sidebar/>
<!-- End::Dashboard Sidebar -->
{{$slot}}

@include('layouts.client.profile-script')
</body>

</html>
