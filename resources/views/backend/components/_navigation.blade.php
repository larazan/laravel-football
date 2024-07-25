<div class="py-3 md:py-5 px-3 md:px-8">
    <span class="text-2xl tracking-tighter font-semibold uppercase">
        HI, alda
    </span>
</div>
<div class="shadow-lg md:px-8">
    <ul class="flex overflow-x-auto overflow-hidden items-center md:justify-center2 space-x-1 md:space-x-3  tracking-tight font-semibold text-sm text-[#b6cce2] shadow2">
        <li class=" border-b-4 @if(in_array(Request::segment(2), [''])){{ 'border-[#001838]' }}@else{{ 'border-white' }}@endif md:-mt-px">
            <a class="inline-block p-3" href="{{ url('account') }}">
                <span class="md:inline text-gray-800 font-bold">Dashboard</span>
            </a>
        </li>
        <li class=" border-b-4 @if(in_array(Request::segment(2), ['profile'])){{ 'border-[#001838]' }}@else{{ 'border-white' }}@endif md:-mt-px">
            <a class="inline-block p-3" href="{{ url('account/profile') }}">
                <span class="md:inline text-gray-800 font-bold">Profile</span>
            </a>
        </li>
        <li class=" border-b-4  @if(in_array(Request::segment(2), ['notification'])){{ 'border-[#001838]' }}@else{{ 'border-white' }}@endif md:-mt-px">
            <a class="inline-block p-3" href="{{ url('account/notification') }}">
                <span class="md:inline text-gray-800 font-bold">Notification</span>
            </a>
        </li>
        <li class=" border-b-4 @if(in_array(Request::segment(2), ['orders'])){{ 'border-[#001838]' }}@else{{ 'border-white' }}@endif md:-mt-px">
            <a class="inline-block p-3" href="{{ url('account/orders') }}">
                <span class="md:inline text-gray-800 font-bold">Orders</span>
            </a>
        </li>
        <li class=" border-b-4 @if(in_array(Request::segment(2), ['change-password'])){{ 'border-[#001838]' }}@else{{ 'border-white' }}@endif md:-mt-px">
            <a class="inline-block p-3" href="{{ url('account/change-password') }}">
                <span class="md:inline text-gray-800 font-bold">Password</span>
            </a>
        </li>
        <li class=" border-b-4 border-white md:-mt-px">
            <a class="inline-block p-3" href="/">
                <span class="md:inline text-red-600 font-bold">Logout</span>
            </a>
        </li>
    </ul>
</div>