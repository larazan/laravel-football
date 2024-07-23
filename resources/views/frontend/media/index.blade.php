@extends('frontend.layout')

@section('content')

<div class="bg-[#00091a] w-full h-full">
    <!-- Slider -->
<div class="mx-60 swiper mySwiper">
    <div class="swiper-wrapper">

        <div class="swiper-slide flex justify-center md:items-center items-start w-screen relative">
            <img class="object-cover2 w-full h-full" src="{{ url('assets/img/media/slide2.png') }}" alt="image" />
        </div>
        <div class="swiper-slide flex justify-center md:items-center items-start w-screen relative">
            <img class="object-cover2 w-full h-full" src="{{ url('assets/img/media/slide3.png') }}" alt="image" />
        </div>
        <div class="swiper-slide flex justify-center md:items-center items-start w-screen relative">
            <img class="object-cover2 w-full h-full" src="{{ url('assets/img/media/slide4.jpg') }}" alt="image" />
        </div>
        <div class="swiper-slide flex justify-center md:items-center items-start w-screen relative">
            <img class="object-cover2 w-full h-full" src="{{ url('assets/img/media/slide1.png') }}" alt="image" />
        </div>
        

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>

    <div class="h-max mx-auto w-full lg:w-1/2 flex flex-col space-y-4 md:px-4 py-5 md:py-4 lg:px-0 justify-center2 items-center2 bg-transparent">
        <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
            <div class="flex space-x-1 items-center">
                <span class="text-lg md:text-2xl font-bold text-white">
                    Latest Video
                </span>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 mx-auto w-full md:w-12/12 ">
            @foreach($medias as $m)
            <div class="px-3 py-3 w-full">
                <div class="relative bg-white group flex flex-col overflow-hidden rounded border border-gray-700 hover:scale-105 shadow ">
                    <a href="{{ url('/media/' . $m->slug) }}" class="relative">
                        <div class="absolute z-10 bottom-0 h-40 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                        <img src="{{ url('/assets/img/media/media4.png') }}" alt="" class="w-full" />
                        <div class="absolute bottom-0  group-hover:opacity-75 z-20 ">
                            <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                                <div class="w-10 h-10 font-semibold text-xs md:text-xs uppercase text-red-500">
                                    <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
                                        <title>icon</title>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.5H18C19.933 4.5 21.5 6.067 21.5 8V16C21.5 17.933 19.933 19.5 18 19.5H6C4.067 19.5 2.5 17.933 2.5 16V8C2.5 6.067 4.067 4.5 6 4.5ZM1 8C1 5.23858 3.23858 3 6 3H18C20.7614 3 23 5.23858 23 8V16C23 18.7614 20.7614 21 18 21H6C3.23858 21 1 18.7614 1 16V8ZM15 12L10 9V15L15 12Z"></path>
                                    </svg>
                                </div>

                                <a href="{{ url('media/' . $m->slug) }}">
                                    <span class="font-bold text-base md:text-md text-white leading-tight">
                                        {{ $m->title }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- highlight -->
    <div class="h-max mx-auto w-full lg:w-1/2 flex flex-col space-y-3 px-3 md:px-6 lg:px-0 py-0 md:py-4 justify-center2 items-center2 bg-transparent">
        <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
            <div class="flex space-x-1 items-center">
                <span class="text-lg md:text-2xl font-bold text-white">
                    Highlight
                </span>
            </div>
        </div>

        <div class="relative py-3 flex flex-row mx-auto w-full md:w-12/12 justify-between items-center">

            <div class="top-[40%] left-0">
                <button class="none absolute top-[35%] -left-0 md:-left-5 z-20 cursor-pointer rounded-full px-2 py-2 bg-[#002f6c] border-2 border-gray-800 shadow text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
            </div>

            <div class="top-[40%] right-0">
                <button class="none absolute top-[35%] -right-0 md:-right-5 z-20 cursor-pointer rounded-full px-2 py-2 bg-[#002f6c] border-2 border-gray-800 shadow text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>


            <div class="mb-[1em] flex flex-row overflow-x-hidden2 overflow-x-auto scroll-smooth custom-scrollbar">
                @foreach($medias as $m)
                <div class="transition-all duration-150 flex mr-[.9em] ">
                    <div class="relative flex w-[280px] md:w-[350px] justify-center bg-white border border-gray-700 rounded shadow hover:shadow-lg">
                        <div class=" bg-white flex ">
                            <a href="/news/one" class="relative">
                                <div class="absolute z-10 bottom-0 h-40 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                                <img src="{{ url('/assets/img/media/highlight1.png') }}" alt="" class="w-full" />
                                <div class="absolute bottom-0  group-hover:opacity-75 z-10 ">
                                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                                        <div class="w-10 h-10 font-semibold text-xs md:text-xs uppercase text-red-500">
                                            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
                                                <title>icon</title>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.5H18C19.933 4.5 21.5 6.067 21.5 8V16C21.5 17.933 19.933 19.5 18 19.5H6C4.067 19.5 2.5 17.933 2.5 16V8C2.5 6.067 4.067 4.5 6 4.5ZM1 8C1 5.23858 3.23858 3 6 3H18C20.7614 3 23 5.23858 23 8V16C23 18.7614 20.7614 21 18 21H6C3.23858 21 1 18.7614 1 16V8ZM15 12L10 9V15L15 12Z"></path>
                                            </svg>
                                        </div>

                                        <a href="/news/one">
                                            <span class="font-bold text-base md:text-md text-white leading-tight">
                                                Bayern vs Mainz
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


    </div>

</div>

@endsection

@push('style')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush

@push('js')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
    });
</script>
@endpush