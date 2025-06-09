<div xmlns:livewire="http://www.w3.org/1999/html">
    @if(session()->has('messageSuccess'))
        <div class="alert alert-icon-left alert-light-success alert-dismissible fade show mb-4">
            {{ session()->get('success') }}
        </div>
    @endif
    <!-- Start::Navbar V1 -->
    <livewire:client.home.header/>
    <!-- End::Navbar V1 -->

    <!-- Start::Hero Section -->
    <livewire:client.home.hero-section/>
    <!-- End::Hero Section -->

    <!-- Start::Assets Table Section -->
    <livewire:client.home.crypto/>
    <!-- End::Assets Table Section -->

    <!-- Start::Features Section -->
    <livewire:client.home.features-section/>

    <!-- End::Features Section -->

    <!-- Start::Exchange / Buy Sell Forms Section -->
    <livewire:client.home.exchange/>

    <!-- End::Exchange / Buy Sell Forms Section -->

    <!-- Start::Why Choose Us Section -->
    <livewire:client.home.us/>
    <!-- End::Why Choose Us Section -->

    <!-- Start::Media News Carousel / Testimonial Section -->
    <livewire:client.home.media/>
    <!-- End::Media News Carousel / Testimonial Section -->


    <!-- Start::CTA -->
    <livewire:client.home.cta/>
    <!-- End::CTA -->
</div>
