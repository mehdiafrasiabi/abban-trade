<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">لیست برداشت و واریزی</h4>
                </div>
                <!-- end card header -->

                <div class="card-body">
                    <div class="listjs-table" id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input wire:model.live.debounce.500ms="search" type="text"
                                               class="form-control search" placeholder="جستجو...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table-card mt-3 mb-1">
                            <table class="table align-middle table-nowrap" id="customerTable">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        #
                                    </th>
                                    <th class="sort" data-sort="customer_name">کاربر</th>
                                    <th class="sort" data-sort="phone">شماره موبایل</th>
                                    <th class="sort" data-sort="status">مبلغ(تومان)</th>
                                    <th class="sort" data-sort="date">تاریخ درخواست</th>

                                    <th class="sort" data-sort="status">وضعیت</th>
                                    <th class="sort" data-sort="desc">توضیحات(اختیاری)</th>
                                    <th class="sort" data-sort="tUpdate">تاریخ ثبت تغییرات</th>

                                </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                @forelse($wallets as $wallet)
                                    <tr>
                                        <th scope="row">
                                            {{$loop->iteration + $wallets->firstItem() - 1}}
                                        </th>
                                        <td class="customer_name">{{$wallet->wallet->user->name}}</td>
                                        <td class="phone">{{$wallet->wallet->user->mobile}}</td>
                                        <td class="phone">{{number_format($wallet->amount)}}</td>
                                        <td class="time">{{jalali($wallet->created_at)->format('%d %B %Y | H:i')}}</td>
                                        <td>
                                            <select
                                                wire:confirm="ایا از انتخاب خود اطمنیان دارید؟"
                                                wire:change="changeStatus({{ $wallet->id }}, $event.target.value)"
                                                class="form-select rounded-pill mb-3
                                                       @if($wallet->status == 'approved') text-success
                                                       @elseif($wallet->status == 'pending') text-primary
                                                       @elseif($wallet->status == 'rejected') text-danger
                                                       @endif">
                                                <option
                                                    value="pending" {{ $wallet->status == 'pending' ? 'selected' : '' }}>
                                                    در انتظار تایید
                                                </option>
                                                <option
                                                    value="approved" {{ $wallet->status == 'approved' ? 'selected' : '' }}>
                                                    تایید شده
                                                </option>
                                                <option
                                                    value="rejected" {{ $wallet->status == 'rejected' ? 'selected' : '' }}>
                                                    رد شده
                                                </option>
                                            </select>
                                        </td>


                                        <td class="time">{{$wallet->description ?? '----'}}</td>
                                        <td class="time">{{jalali($wallet->updated_at)->format('%d %B %Y | H:i')}}</td>

                                    </tr>
                                @empty
                                    <tr class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                       colors="primary:#121331,secondary:#08a88a"
                                                       style="width:75px;height:75px"></lord-icon>
                                            <h5 class="mt-2">متاسفم! هیچ نتیجه ای یافت نشد</h5>
                                            <p class="text-muted mb-0">ما احراز ها را جستجو کرده ایم، هیچ احرازی برای
                                                جستجوی شما پیدا نکردیم.</p>
                                        </div>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>

                        </div>

                        <div class="d-flex justify-content-end">
                            <div class="pagination-wrap hstack gap-2">
                                {{$wallets->links('layouts.admin.pagination')}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->

    </div>
    @push('script')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/admin/assets/libs/prismjs/prism.js"></script>
        <script src="/admin/assets/libs/list.js/list.min.js"></script>
        <script src="/admin/assets/libs/list.pagination.js/list.pagination.min.js"></script>
        <script src="/admin/assets/js/pages/listjs.init.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Livewire.on('open-selfie-modal', () => {
                    new bootstrap.Modal(document.getElementById('selfieModal')).show();
                });

                Livewire.on('open-national-modal', () => {
                    new bootstrap.Modal(document.getElementById('nationalCardModal')).show();
                });
            });
        </script>

    @endpush
</div>

