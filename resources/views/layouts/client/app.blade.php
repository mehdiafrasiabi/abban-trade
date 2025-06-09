<!DOCTYPE html>
<html lang="fa">
<!--
  Template Name: Cryptolly - Cryptocurrency Coded Website HTML Template
  Author: Farham Aghdasi
  Website: www.farhamaghdasi.ir
  Contact: info@farhamaghdasi.ir
  License: Free
  -->
<head>
    {!! SEO::generate() !!}
   @include('layouts.client.link')
</head>

<body class="">
{{$slot}}
<!-- Start::Footer -->
<livewire:client.footer.index/>
<!-- End::Footer -->

<!-- Start::Global Bundle Scripts (used by all pages) -->
@include('layouts.client.script')
<!-- End::Page Scripts -->
</body>

</html>
