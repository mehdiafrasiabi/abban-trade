<div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="customerList">
                <div class="card-header border-bottom-dashed">

                    <div class="row g-4 align-items-center">
                        <div class="col-sm">
                            <div>
                                <h5 class="card-title mb-0">لیست کاربران</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom-dashed border-bottom">
                    <form>
                        <div class="row g-3">
                            <div class="col-xl-6">
                                <div class="search-box">
                                    <input wire:model.live.debounce.500ms="search" type="text" class="form-control search"
                                           placeholder="جستجو بر اساس نام یا تلفن همراه یا ایمیل...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
                <div class="card-body">
                    <div>
                        <div class="table-responsive table-card mb-1">
                            <table class="table align-middle" id="customerTable">
                                <thead class="table-light text-muted">
                                <tr>

                                    <th>#</th>
                                    <th>نام و نام خانوادگی</th>
                                    <th >تلفن</th>
                                    <th>ایمیل</th>
                                    <th>تاریخ عضویت</th>
                                    <th>وضعیت احراز</th>
                                    <th>اقدام</th>
                                </tr>
                                </thead>
                                <tbody class="list form-check-all">
                              @forelse($users as $user)
                                  <tr>
                                      <th scope="row">
                                          <div class="form-check">
                                              {{$loop->iteration + $users->firstItem() - 1}}

                                          </div>
                                      </th>
                                      <td class="customer_name">{{$user->name ?? '--'}}</td>
                                      <td class="phone">{{$user->mobile ?? '--'}}</td>
                                      <td class="email">{{$user->email ?? '--'}}</td>
                                      <td class="date">{{jalali($user->created_at)->format('%d %B %Y | H:i')}}</td>
                                      <td class="status">
                                          @if($user->kyc->status == 'pending')
                                              <span class="badge bg-primary-subtle text-primary text-uppercase">در انتظار تایید احراز</span>
                                          @endif
                                              @if($user->kyc->status == 'rejected')
                                              <span class="badge bg-danger-subtle text-danger text-uppercase">احراز رد شده</span>
                                          @endif
                                              @if($user->kyc->status == 'completed')
                                              <span class="badge bg-success-subtle text-success text-uppercase">احراز تایید شده</span>
                                          @endif
                                      </td>
                                      <td class="date">
                                        <a href="{{ route('admin.user.information',$user->id) }}">
                                            مشاهده پروفایل
                                        </a>
                                      </td>

                                  </tr>
                              @empty
                                  <tr class="noresult" style="display: none">
                                      <div class="text-center">
                                          <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                     colors="primary:#121331,secondary:#08a88a"
                                                     style="width:75px;height:75px"></lord-icon>
                                          <h5 class="mt-2">متاسفم! هیچ نتیجه ای یافت نشد</h5>
                                          <p class="text-muted mb-0">ما بیش از 150 مشتری را جست&zwnj;وجو کرده&zwnj;ایم. هیچ
                                              مشتری برای جستجوی شما پیدا نکردیم.</p>
                                      </div>
                                  </tr>
                              @endforelse
                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                               colors="primary:#121331,secondary:#08a88a"
                                               style="width:75px;height:75px"></lord-icon>
                                    <h5 class="mt-2">متاسفم! هیچ نتیجه ای یافت نشد</h5>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="pagination-wrap hstack gap-2">
                                {{$users->links('layouts.admin.pagination')}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end col-->
    </div>
    @push('script')
        <script src="/admin/assets/js/pages/ecommerce-customer-list.init.js"></script>

    @endpush

</div>
