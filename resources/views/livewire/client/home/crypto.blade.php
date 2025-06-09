<div>
    <section class="assets assets--v3">
        <div class="container">
            <div class="assets__container">
                <!-- Start::Table Section -->
                <div class="table-wrapper table--type-2" data-aos="fade-up">
                    <div class="table__title">
                        <h6 class="table__title-text">جدول بازار</h6>
                        <nav class="navbar">
                            <div class="table__title-tabs" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <p class="fb-regular fb-regular--bold table__title-tab فعال" id="pills-market-table-all-tab" data-bs-toggle="pill" data-bs-target="#pills -market-table-all" role="tab" aria-controls="pills-market-table-all" aria-selected="true">رمز ارزها</p>
                                </li>
                                <li class="nav-item">
                                    <p class="fb-regular fb-regular--bold table__title-tab" id="pills-market-table-gainers-tab" data-bs-toggle="pill" data-bs-target="#pills- market-table-gainers" role="tab" aria-controls="pills-market-table-gainers" aria-selected="false">برنده</p>
                                </li>
                                <li class="nav-item">
                                    <p class="fb-regular fb-regular--bold table__title-tab" id="pills-market-table-losers-tab" data-bs-toggle="pill" data-bs-target="#pills- market-table-losers" role="tab" aria-controls="pills-market-table-losers" aria-selected="false">بازنده ها</p>
                                </li>
                                <li class="nav-item">
                                    <p class="fb-regular fb-regular--bold table__title-tab" id="pills-market-table-tradeble-tab" data-bs-toggle="pill" data-bs-target="#pills- market-table-tradeble" role="tab" aria-controls="pills-market-table-tradeble" aria-selected="false">قابل معامله</p>
                                </li>
                            </div>
                        </nav>
                        <div class="dropdown table__dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                تمام دارایی ها
                                <img  src="/client/assets/media/images/icons/arrow-down.svg" alt="">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="pills-tab" role="tablist">
                                <li><a class="dropdown-item active" href="landing-page-v3.html#" id="pills-market-table-all-tab" data-bs-toggle="pill" data-bs -target="#pills-market-table-all" role="tab" aria-controls="pills-market-table-all" aria-selected="true">همه دارایی ها</a></li>
                                <li><a class="dropdown-item" href="landing-page-v3.html#" id="pills-market-table-gainers-tab" data-bs-toggle="pill" data-bs- target="#pills-market-table-gainers" role="tab" aria-controls="pills-market-table-gainers" aria-selected="false">برنده</a></li>
                                <li><a class="dropdown-item" href="landing-page-v3.html#" id="pills-market-table-losers-tab" data-bs-toggle="pill" data-bs- target="#pills-market-table-losers" role="tab" aria-controls="pills-market-table-losers" aria-selected="false">بازنده ها</a></li>
                                <li><a class="dropdown-item" href="landing-page-v3.html#" id="pills-market-table-tradeble-tab" data-bs-toggle="pill" data-bs- target="#pills-market-table-tradeble" role="tab" aria-controls="pills-market-table-tradeble" aria-selected="false">قابل تجارت</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-market-table-all" role="tabpanel" aria-labelledby="pills-market-table-all-tab">
                            <div class="table-container">
                                <table class="table table-content">
                                    <thead>
                                    <tr>
                                        <th class="fb-regular table__head" >رمز ارز</th>
                                        <th class="fb-regular table__head">آخرین قیمت</th>
                                        <th class="fb-regular table__head">کلید بازار</th>
                                        <th class="fb-regular table__head">تغییر(24ساعت)</th>
                                        <th class="fb-regular table__head">حجم معاملات</th>
                                        <th class="fb-regular table__head">اقدام</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cryptos as $crypto)
                                        @php
                                            $info = $prices[$crypto->coingecko_id] ?? null;
                                        @endphp
                                        @if($info)
                                        <tr>
                                            <td class="table__assets">
                                                <div class="table__assets-crypto">
                                                    <img  src="{{ $crypto->image_url }}" alt="" class="table__assets-crypto-icon">
                                                    <p class="fb-regular fb-regular--bold table__assets-crypto-abbr">{{ $crypto->name_fa }} ({{ $crypto->symbol }})</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="fb-regular">${{ number_format($info['current_price'], 2) }}</p>
                                            </td>
                                            <td>
                                                <p class="fb-regular table__market {{ $info['price_change_percentage_24h'] < 0 ? 'text-red' : 'text-green' }}">  {{ number_format($info['price_change_percentage_24h'], 2) }}%</p>
                                            </td>
                                            <td>

                                            </td>
                                            <td class="table__chart">
                                                ${{ number_format($info['total_volume']) }}
                                            </td>
                                            <td>
                                                @if(\Illuminate\Support\Facades\Auth::check())
                                                    <a  href="{{ route('client.profile.trade',$crypto->coingecko_id) }}" class="btn btn-primary btn-sm btn-pill table__btn">خرید

                                                    @else
                                                    <a  href="{{ route('client.login')}}" class="btn btn-primary btn-sm btn-pill table__btn">خرید

                                                @endif
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="table__vignette"></div>
                </div>
                <!-- End::Table Section -->

            </div>
        </div>
    </section>

</div>
