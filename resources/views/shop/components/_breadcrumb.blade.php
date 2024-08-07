
<section class="py-2 bg-[#f5f7f9] md:py-4 md:text-sm w-full">
    <div class="grid-container2 px-0 lg:px-0 mx-auto w-11/12">
        <nav aria-label="breadcrumbs">
            <div class="relative w-full">

                <ul class="scrollbar-fix flex flex-row flex-nowrap justify-start overflow-x-scroll no-scrollbar">
                    
                    @if ($breadcrumbs_data['current_page_title'] != '')
                        @foreach ($breadcrumbs_data['breadcrumbs_array'] as $key => $value)
                            <li class="@if($value == 'Home'){{ '' }}@else{{ 'before:inline before:px-1 before:text-sm before:content-[">"] text-black text-[11px] font-medium uppercase leading-3 opacity-70' }}@endif ">
                                <a href="{{ $key }}" class="whitespace-nowrap text-sm font-semibold hover:underline text-black text-[11px] uppercase leading-3 opacity-70" >
                                    {{ $value }}
                                </a>
                            </li>
                        @endforeach
                        <li class='before:inline before:px-1 before:text-sm before:content-[">"] text-black text-[11px] font-medium uppercase leading-3 opacity-70'>
                            <span class="whitespace-nowrap text-sm font-semibold  text-black text-[11px] uppercase leading-3 opacity-70">
                                {{ $breadcrumbs_data['current_page_title'] }}
                            </span>
                        </li>
                    @else
                        @foreach ($breadcrumbs_data['breadcrumbs_array'] as $key => $value)
                            <li class="@if($value == 'Home'){{ '' }}@else{{ 'before:inline before:px-1 before:text-sm before:content-[">"] text-black text-[11px] font-medium uppercase leading-3 opacity-70' }}@endif ">
                                <a href="{{ $key }}" class="whitespace-nowrap text-sm font-semibold hover:underline text-black text-[11px] uppercase leading-3 opacity-70" >
                                    {{ $value }}
                                </a>
                            </li>
                        @endforeach
                    @endif

                </ul>
            </div>
        </nav>
    </div>
</section>