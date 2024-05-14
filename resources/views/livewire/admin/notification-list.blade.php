<ul>
@if ($notifications->total())
@foreach ($notifications as $notification)
    <li class="border-b border-slate-200 last:border-0">
        <a class="block py-2 px-4 hover:bg-slate-50" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
            <span class="block text-sm mb-2"> 
                @if ($notification->type === 'App\Notifications\OrderPlacedNotification') 
                    📣 
                @endif 

                @if ($notification->type === 'App\Notifications\NewUserNotification') 
                    🚀 
                @endif 

                <span class="font-medium text-slate-800">
                    @if ($notification->type === 'App\Notifications\OrderPlacedNotification') 
                        Order Baru Masuk! 
                    @endif 

                    @if ($notification->type === 'App\Notifications\NewUserNotification') 
                        User Baru Mendaftar!
                    @endif 
                </span> 
                    @if ($notification->type === 'App\Notifications\OrderPlacedNotification') 
                        Order Baru Masuk! 
                    @endif 

                    @if ($notification->type === 'App\Notifications\NewUserNotification') 
                        @foreach ($notifications as $n)
                            User {{ $n['data']['first_name'] }} {{ $n['data']['last_name'] }} ({{ $n['data']['email'] }}) has just registered.
                        @endforeach
                    @endif
            </span>
            <span class="block text-xs font-medium text-slate-400">{{ $notification->created_at->format('d-m-Y') }}</span>
        </a>
    </li>
@endforeach 
           
            <!-- <li class="border-b border-slate-200 last:border-0">
                <a class="block py-2 px-4 hover:bg-slate-50" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                    <span class="block text-sm mb-2">📣 <span class="font-medium text-slate-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                    <span class="block text-xs font-medium text-slate-400">Feb 9, 2021</span>
                </a>
            </li>
            <li class="border-b border-slate-200 last:border-0">
                <a class="block py-2 px-4 hover:bg-slate-50" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                    <span class="block text-sm mb-2">🚀<span class="font-medium text-slate-800">Say goodbye to paper receipts!</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                    <span class="block text-xs font-medium text-slate-400">Jan 24, 2020</span>
                </a>
            </li> -->
    <li class=" border-b border-slate-200 last:border-0 mx-auto w-full">
        <a 
            href="{{ url('/admin/notifications') }}"
            class="block py-2 px-4 hover:bg-slate-50 cursor-pointer text-center">
            <span class="block text-sm mb-2">See all</span>
        </a>
    </li>

@else   
    <li class=" border-b border-slate-200 last:border-0 mx-auto w-full">
        <div class="block py-2 px-4 hover:bg-slate-50 text-center">
            <span class="block text-sm mb-2">There are no new notifications</span>
        </div>
    </li>
@endif 
</ul>     