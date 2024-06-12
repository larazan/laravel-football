@extends('frontend.layout')

@section('content')

<div class="h-max  flex flex-row space-x-6 px-2 md:px-6 py-4 md:py-4 justify-center2 items-center2 bg-[#f5f7f9]">
    <div class="flex flex-col space-y-4 mx-auto w-full lg:w-1/2">
        <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
            <span class="text-lg md:text-2xl font-bold text-[#002f6c] uppercase">News</span>
        </div>
        <div class="flex flex-col md:flex-row w-full space-y-3 md:space-y-0 md:space-x-4">
            <div class="w-full md:w-2/3 flex flex-wrap space-x-2">
                <button class="flex rounded px-2 py-1 items-center bg-[#dc052d] ">
                    <span class=" font-semibold text-white text-sm">All</span>
                </button>
                <button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                    <span class=" font-semibold text-[#002f6c] text-sm">Club</span>
                </button>
                <button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                    <span class=" font-semibold text-[#002f6c] text-sm">Bundesliga</span>
                </button>
                <button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                    <span class=" font-semibold text-[#002f6c] text-sm">Champions League</span>
                </button>
            </div>
            <div class="w-full md:w-1/3 flex md:justify-end">
                <form class="w-full md:w-2/3">
                    <div class="relative">
                        <label class="sr-only">Search</label>
                        <input class="w-full h-9 border-0 focus:ring-transparent placeholder-[#002f6c] placeholder-semibold appearance-none py-2 pl-7 pr-4 rounded outline-none bg-blue-100 text-sm text-[#002f6c]" type="search" placeholder="Search Anything…">
                        <button class="absolute inset-0 right-auto group" type="submit" aria-label="Search">
                            <svg class="w-3 h-3 shrink-0 fill-current text-[#002f6c] group-hover:text-slate-500 ml-2 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-full">
            <div class="relative w-full">
                <img alt="" class="w-full object-contain"  src="{{ url('assets/img/news/news1.png') }}">
            </div>
        </div>
        <div class="flex mx-auto  w-12/12 md:w-12/12 py-2 justify-center2 items-center">
            <div class="grid grid-cols-2 mx-auto gap-x-7 gap-y-8 sm:grid-cols-1 md:grid-cols-2">
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow ">
                    <a class="relative" href="/news/1">
                        <img alt=""  class="w-full object-cover" src="{{ url('assets/img/news/news2.png') }}">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                        <div class="font-semibold text-xs md:text-sm uppercase text-red-500">Membership</div>
                        <h3 class="font-semibold text-base md:text-lg leading-tight text-[#002f6c]">
                            <a href="/news/1">Become part of the FC Bayern family!</a>
                        </h3>
                    </div>
                </div>
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow ">
                    <a class="relative" href="/news/1">
                        <img alt=""  class="w-full" src="{{ url('assets/img/news/news3.png') }}">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                        <div class="font-semibold text-xs md:text-sm uppercase text-red-500">Membership</div>
                        <h3 class="font-semibold text-base md:text-lg leading-tight text-[#002f6c]"><a href="/news/1">Become part of the FC Bayern family!</a></h3>
                    </div>
                </div>
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow ">
                    <a class="relative" href="/news/1">
                        <img alt=""  class="w-full" src="{{ url('assets/img/news/news4.png') }}">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                        <div class="font-semibold text-xs md:text-sm uppercase text-red-500">Membership</div>
                        <h3 class="font-semibold text-base md:text-lg leading-tight text-[#002f6c]"><a href="/news/1">Become part of the FC Bayern family!</a></h3>
                    </div>
                </div>
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow ">
                    <a class="relative" href="/news/1">
                    <img alt=""  class="w-full" src="{{ url('assets/img/news/news5.png') }}">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                        <div class="font-semibold text-xs md:text-sm uppercase text-red-500">Membership</div>
                        <h3 class="font-semibold text-base md:text-lg leading-tight text-[#002f6c]">
                            <a href="/news/1">Become part of the FC Bayern family!</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection