<div>
    <div class="profile profile-v2">
        <div class="container container--profile-v2">
            <div class="profile__title">
                <h2 class="profile__title-text">مشاهده تیکت</h2>
            </div>
            <div class="profile__container">
                <div class="profile__content">
                    <div class="table-wrapper table--type-1 aos-init aos-animate" data-aos="fade-up">
                        <div class="table-container">
                            <div class="space-y-4">
                                <h1 class="text-xl font-bold">تیکت #{{ $ticket->id }} - {{ $ticket->title }}</h1>

                                <div class="bg-gray-100 p-4 rounded">
                                    <p><strong>دپارتمان:</strong> {{ $ticket->department->name }}</p>
                                    <p><strong>وضعیت:</strong>
                                        @if($ticket->status=='waiting')
                                            <span class="text-yellow"> درانتظار پاسخ ادمین</span>
                                        @elseif($ticket->status=='answered')
                                            <span class=" text-success"> پاسخ داده شده</span>
                                        @elseif($ticket->status=='closed')
                                            <span class=" text-danger"> بسته شده</span>
                                        @else
                                           --
                                        @endif</p>
                                    <p><strong>اولویت:</strong>
                                        @if($ticket->priority=='low')
                                            <span class="text-primary"> کم</span>
                                        @elseif($ticket->priority=='medium')
                                            <span class="text-yellow"> متوسط</span>
                                        @elseif($ticket->priority=='high')
                                           <span class="text-danger"> فوری</span>
                                        @else
                                           --
                                         @endif
                                    </p>
                                    <p><strong>تاریخ:</strong> {{ jalali($ticket->created_at)->format('Y/m/d H:i') }}</p>
                                </div>

                                {{-- پیام‌ها --}}
                                <div class="space-y-2" wire:poll.5s>
                                    @foreach($ticket->messages as $msg)
                                        <div class="p-3 border rounded @if($msg->user_id == auth()->id()) bg-blue-50 text-right @else bg-gray-50 text-left @endif">
                                            <div class="text-sm text-gray-600 mb-1">
                                                {{ $msg->user->name ?? 'سیستم' }} - {{ jalali($msg->created_at)->format('Y/m/d H:i') }}
                                            </div>

                                            <div class="text-base whitespace-pre-line">{{ $msg->message }}</div>

                                            @if($msg->attachment)
                                                @php
                                                    $ext = pathinfo($msg->attachment, PATHINFO_EXTENSION);
                                                    $path = asset("ticket/{$msg->user_id}/file/{$msg->attachment}");
                                                @endphp
                                                <div class="mt-2">
                                                    @if(in_array($ext, ['jpg','jpeg','png','webp','gif']))
                                                        <img src="{{ $path }}" alt="پیوست" class="w-50 rounded shadow" style="height: 200px">
                                                    @endif
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>

                                {{-- فرم ارسال پیام --}}
                                @if($ticket->status != 'closed' && $ticket->status != 'waiting')
                                    <form wire:submit.prevent="submit"  class="space-y-3 mt-4">
                                        <textarea wire:model="message" rows="4" class="w-100 p-2 border rounded" placeholder="پاسخ شما..."></textarea>
                                        @error('message') <span class="text-danger text-sm">{{ $message }}</span> @enderror
                                        <br>
                                        <input type="file" wire:model="attachment" class="block">
                                        @error('attachment') <span class="text-danger text-sm">{{ $message }}</span> @enderror
                                        <br>
                                        <button type="submit" class="btn btn-success text-white px-4 py-2 rounded mt-4 mr-auto">ارسال پاسخ</button>
                                    </form>
                                @else
                                    <div class="text-red-600 font-semibold mt-4 bg-danger">
                                        تیکت در وضعیت {{ ($ticket->status=='waiting' ? 'در انتظار پاسخ ادمین' : 'بسته شده' ) }} است و امکان پاسخ‌دهی وجود ندارد.
                                    </div>
                                    <br>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
