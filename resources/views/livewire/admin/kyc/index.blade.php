<div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">لیست احراز هویت</h4>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="search-box ms-2">
                                            <input wire:model.live.debounce.500ms="search" type="text" class="form-control search" placeholder="جستجو...">
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
                                        <th class="sort" data-sort="customer_name">نام ونام خانوادگی</th>
                                        <th class="sort" data-sort="phone">تلفن</th>
                                        <th class="sort" data-sort="action">فایل ها</th>
                                        <th class="sort" data-sort="status">وضعبت احراز</th>
                                        <th class="sort" data-sort="status">تاریخ تغییر احراز</th>
                                        <th class="sort" data-sort="date">تاریخ درخواست </th>

                                    </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                   @forelse($users as $user)
                                       <tr>
                                           <th scope="row">
                                               {{$loop->iteration + $users->firstItem() - 1}}
                                           </th>
                                           <td class="customer_name">{{$user->name}}</td>
                                           <td class="phone">{{$user->mobile}}</td>
                                           <td>
                                               <div class="d-flex gap-2">
                                                   <div class="edit">
                                                       <button wire:click="showImage('{{ $user->kyc->selfie_path }}', {{ $user->id }})" class="btn btn-sm btn-info">
                                                           مشاهده عکس احراز
                                                       </button>
                                                   </div>
                                                   <div class="remove">
                                                       <button wire:click="showNationalCard('{{ $user->kyc->national_card_path }}',{{ $user->id }})" class="btn btn-sm btn-primary">
                                                           مشاهده کارت ملی
                                                       </button>
                                                   </div>
                                               </div>
                                           </td>
                                           <td class="status">
                                               <select
                                                   wire:confirm="ایا از تغییر وضعبت احراز اطمینان دارید؟"
                                                   wire:change="changeStatus({{ $user->id }}, $event.target.value)"
                                                   class="form-select rounded-pill mb-3  text-{{$user->statusColor}} ">
                                                   <option value="pending" {{ optional($user->kyc)->status == 'pending' ? 'selected' : '' }}>
                                                       در انتظار تایید
                                                   </option>
                                                   <option value="completed" {{ optional($user->kyc)->status == 'completed' ? 'selected' : '' }}>
                                                       تایید شده
                                                   </option>
                                                   <option value="rejected" {{ optional($user->kyc)->status == 'rejected' ? 'selected' : '' }}>
                                                       رد شده
                                                   </option>
                                               </select>
                                           </td>
                                           <td class="time">{{jalali($user->kyc->updated_at)->format('%d %B %Y | H:i')}}</td>
                                           <td class="time">{{jalali($user->kyc->created_at)->format('%d %B %Y | H:i')}}</td>
                                       </tr>
                                       @empty
                                           <tr class="noresult" style="display: none">
                                               <div class="text-center">
                                                   <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                   <h5 class="mt-2">متاسفم! هیچ نتیجه ای یافت نشد</h5>
                                                   <p class="text-muted mb-0">ما احراز ها را جستجو کرده ایم، هیچ احرازی برای جستجوی شما پیدا نکردیم.</p>
                                               </div>
                                           </tr>
                                       @endforelse
                                    </tbody>
                                </table>

                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    {{$users->links('layouts.admin.pagination')}}
                                </div>
                            </div>
                        </div>
                        <!-- Modal: مشاهده عکس احراز هویت (سلفی) -->
                        <div wire:ignore.self class="modal fade" id="selfieModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light p-3">
                                        <h5 class="modal-title">مشاهده عکس احراز</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="بستن"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="{{ $selectedImage }}" alt="Selfie Image" class="img-fluid rounded shadow" style="max-height: 500px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal: مشاهده کارت ملی -->
                        <div wire:ignore.self class="modal fade" id="nationalCardModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-light p-3">
                                        <h5 class="modal-title">مشاهده کارت ملی</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="بستن"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="{{ $nationalCardImage }}" alt="National Card Image" class="img-fluid rounded shadow" style="max-height: 500px;">
                                        @if ($ocrError)
                                            <div class="alert alert-danger mt-4">
                                                {{ $ocrError }}
                                            </div>
                                        @elseif ($ocrData)
                                            <div class="mt-4 text-start">
                                                <h6 class="mb-3">نتایج استخراج‌شده از کارت ملی:</h6>
                                                <ul class="list-group">
                                                    <li class="list-group-item"><span class="text-success">نام: {{ $ocrData['firstName'] ?? '---' }}</span></li>
                                                    <li class="list-group-item"><span class="text-success">نام خانوادگی: {{ $ocrData['lastName'] ?? '---' }}</span> </li>
                                                    <li class="list-group-item"><span class="text-success">کد ملی: {{ $ocrData['nationalCode'] ?? '---' }}</span> </li>
                                                    <li class="list-group-item"><span class="text-success">تاریخ تولد: {{ $ocrData['birthDate'] ?? '---' }}</span> </li>
                                                    <li class="list-group-item"><span class="text-success">شهر: {{ $ocrData['city'] ?? '---' }}</span></li>
                                                    <li class="list-group-item"><span class="text-success">استان: {{ $ocrData['province'] ?? '---' }}</span></li>
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                        <button type="button"  wire:click="ocrNationalCard({{$selectedUserId}})" class="btn w-sm btn-success">
                                           <span wire:loading.remove>استعلام کارت ملی</span>
                                            <span wire:loading>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="30" height="30"
                                                 style="shape-rendering: auto; display: block; background: transparent;" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle
                                                        stroke-linecap="round" fill="none" stroke-dasharray="50.26548245743669 50.26548245743669" stroke="#ffffff"
                                                        stroke-width="8" r="32" cy="50" cx="50">
                                              <animateTransform values="0 50 50;360 50 50" keyTimes="0;1" dur="0.6097560975609756s" repeatCount="indefinite"
                                                                type="rotate" attributeName="transform"></animateTransform>
                                            </circle><g></g></g><!-- [ldio] generated by https://loading.io -->
                                            </svg>
                                        </span>
                                        </button>
                                    </div>
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

