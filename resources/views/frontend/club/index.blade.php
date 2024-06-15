@extends('frontend.layout')

@section('content')

<div class="h-max  flex flex-row space-x-6 px-2 md:px-6 py-4 md:py-4 justify-center2 items-center2 bg-[#f5f7f9]">
    <div class="flex flex-col space-y-4 mx-auto w-full lg:w-1/2 pb-10">
        <div class="relative w-full flex flex-col justify-center md:h-[480px] mx-auto h-[193px] xs:items-center xs:justify-center md:items-start md:justify-center text-white">
            <div class="absolute w-full h-full">
                <div class="w-full h-full">
                    <div class="hidden2 md:block md:w-full md:h-full relative animate-[fadeIn_0.3s_ease-out]">
                        <img src="{{ url('assets/img/history/history.png') }}" alt="" class="object-cover h-full w-full" />
                    </div>
                </div>
            </div>
            <div class="z-10 h-full flex flex-col justify-center bg-[#0066b2]/70 items-center text-center  xs:my-[12px] md:my-[48px] px-[12px] md:px-[30px] md:w-[380px] relative xs:items-center xs:text-center xs:justify-center md:items-start md:text-left md:justify-center">
                <h3 class="font-bold mb-[12px] text-2xl md:text-h5 md:mb-[20px]">
                    HIS­TORY
                </h3>
                <div class=" leading-tight text-md md:text-lg mb-[8px] md:mb-[24px]">
                    <div>
                        <div>
                            <p class="leading-tight">
                                Bayer 04 stand for attractive top quality football – in Germany and beyond. The club was promoted to the Bundesliga in 1979 and seven years later saw the Werkself qualify for Europe for the first time. The Werkself have now been on the European stage for decades and in the top-flight for more than 40 years. Around 300 people currently work for Bayer 04 Leverkusen Fußball Gmbh.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex gap-3"></div>
            </div>
        </div>

        <!-- Season -->
        <div class="h-max mx-auto pt-24 md:pt-6 w-full lg:w-1/2 flex flex-col space-y-3 px-3 md:px-6 lg:px-0 py-0 md:py-4 justify-center2 items-center2 bg-transparent">
            <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
                <div class="flex space-x-1 items-center">
                    <span class="text-lg md:text-2xl font-bold text-[#002f6c] uppercase">
                        Season Review
                    </span>
                </div>
            </div>

            <div class="relative py-0 flex flex-row mx-auto w-full md:w-12/12 justify-between items-center">

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

                <div class="mb-[1em] flex flex-row overflow-x-hidden">

                    <div class="transition-all duration-150 flex mr-[.9em] ">
                        <div class="flex w-[280px] md:w-[350px] justify-center bg-white border border-gray-700 shadow hover:shadow-lg">
                            <div class=" bg-white flex flex-col">
                                <a href="/news/one" class="relative">
                                    <div class="absolute z-10 bottom-0 h-40 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                                    <img src="{{ url('assets/img/history/season1.jpg') }}" alt="" class="w-full object-cover" />
                                </a>
                                <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                                    <a href="/news/one">
                                        <span class="font-bold text-base md:text-md text-slate-800 leading-tight">
                                            Anine Bing on Her Work Uniform and the Book Every Creative Needs to Read
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="transition-all duration-150 flex mr-[.9em] ">
                        <div class="flex w-[280px] md:w-[350px] justify-center bg-white border border-gray-700 shadow hover:shadow-lg">
                            <div class=" bg-white flex flex-col">
                                <a href="/news/one" class="relative">
                                    <div class="absolute z-10 bottom-0 h-40 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                                    <img src="{{ url('assets/img/history/season2.jpg') }}" alt="" class="w-full object-cover" />
                                </a>
                                <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                                    <a href="/news/one">
                                        <span class="font-bold text-base md:text-md text-slate-800 leading-tight">
                                            17 Effective Dark Spot Correctors, According to Dermatologists
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="transition-all duration-150 flex mr-[.9em] ">
                        <div class="flex w-[280px] md:w-[350px] justify-center bg-white border border-gray-700 shadow hover:shadow-lg">
                            <div class=" bg-white flex flex-col">
                                <a href="/news/one" class="relative">
                                    <div class="absolute z-10 bottom-0 h-40 w-full bg-gradient-to-b from-transparent to-[#0a1016]"></div>
                                    <img src="{{ url('assets/img/history/season3.jpg') }}" alt="" class="w-full object-cover" />
                                </a>
                                <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                                    <a href="/news/one">
                                        <span class="font-bold text-base md:text-md text-slate-800 leading-tight">
                                            Not Getting 8 Hours of Sleep? This Wellness Hack Could Make Up for It
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="flex mx-auto  w-12/12 md:w-12/12 py-2 justify-center2 items-center pb-5">
            <div class="grid grid-cols-2 mx-auto gap-x-7 gap-y-8 sm:grid-cols-1 md:grid-cols-2">
                @foreach($articles as $a)
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow ">
                    <a class="relative" href="{{ url('/club/' . $a->slug) }}">
                        <img alt="" class="w-full object-cover" src="{{ url('assets/img/news/news2.png') }}">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                        <div class="font-semibold text-xs md:text-sm uppercase text-red-500">
                            {{ $a->category($a->category_id) }}
                        </div>
                        <h3 class="font-semibold text-base md:text-lg leading-tight text-[#002f6c]">
                            <a href="{{ url('/club/' . $a->slug) }}">{{ $a->title }}</a>
                        </h3>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        {{ $articles->links() }}

    </div>
</div>


@endsection