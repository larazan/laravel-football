@extends('frontend.layout')

@section('content')

<!-- Schedule -->
<div class="h-max mx-auto w-full lg:w-1/2 flex flex-col space-y-3 md:px-6 lg:px-0 py-0 md:py-4 justify-center2 items-center2 bg-white">


    <div class="relative flex flex-row mx-auto w-full md:w-12/12 justify-between items-center">

        <div class="top-[40%] left-0">
            <button class="none absolute top-[35%] -left-0 md:-left-5 z-10 cursor-pointer rounded-full px-2 py-2 bg-[#002f6c] border-2 border-gray-800 shadow text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
        </div>

        <div class="top-[40%] right-0">
            <button class="none absolute top-[35%] -right-0 md:-right-5 z-10 cursor-pointer rounded-full px-2 py-2 bg-[#002f6c] border-2 border-gray-800 shadow text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>

        <div class="mb-[1em] flex flex-row overflow-x-auto scroll-smooth custom-scrollbar" ref={scrl}>
            @foreach($schedules as $s)

            <div class="transition-all duration-150 flex mr-[.5em] ">
                <div class="flex w-[150px] h-[150px] md:w-[180px] md:h-[150px] justify-center bg-white">
                    <div class=" bg-white  flex ">
                        <a href="/" class="flex flex-col space-y-3 justify-center items-center">
                            <div class="flex space-x-3">
                                @if ($s->home->logo)
                                <img src="{{ asset('storage/'.$s->home->logo) }}" alt="" class="w-11 h-11 md:w-13 md:h-13" />
                                @endif
                                @if ($s->away->logo)
                                <img src="{{ asset('storage/'.$s->away->logo) }}" alt="" class="w-11 h-11 md:w-13 md:h-13" />
                                @endif
                            </div>
                            <div class="flex flex-col justify-center items-center">
                                @if($s->full_time_home_goal == null)
                                <div class="">
                                    <span class="font-bold text-base md:text-2xl text-[#002f6c]">
                                        {{ Carbon\Carbon::parse($s->fixture_match)->format('D, m/y') }}
                                    </span>
                                </div>
                                @else
                                <div class="flex space-x-1 text-[#002f6c]">
                                    <div class="font-bold text-lg md:text-2xl">
                                        {{ $s->full_time_home_goal }}
                                    </div>
                                    <div class="font-bold text-lg md:text-2xl">:</div>
                                    <div class="font-bold text-lg md:text-2xl">
                                        {{ $s->full_time_away_goal }}
                                    </div>
                                </div>
                                @endif


                                <div>
                                    <span class="text-xs md:text-sm text-gray-500">
                                        {{ $s->hour }} : {{ $s->minute }} GMT+7
                                    </span>
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

<!-- Banner -->
<div class="h-max mx-auto w-full lg:w-1/2 flex flex-col space-y-4 px-4 md:px-6 lg:px-0 py-0 md:py-6 justify-center2 items-center2 bg-[#f5f7f9]">
    <img src="{{ url('assets/img/230606_ATP_Banner4.png') }}" alt="" />
    <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-4 w-full">
        <div class="w-full md:w-1/3">
            <img src="{{ url('assets/img/prediction.png') }}" alt="" class="w-full" />
        </div>
        <div class="w-full md:w-1/3">
            <img src="{{ url('assets/img/olshop.jpg') }}" alt="" class="w-full" />
        </div>
        <div class="w-full md:w-1/3">
            <img src="{{ url('assets/img/newsletter.jpg') }}" alt="" class="w-full" />
        </div>
    </div>
</div>

<!-- News -->
<div class="h-max mx-auto w-full lg:w-1/2 flex flex-col space-y-4 md:px-4 py-5 md:py-4 lg:px-0 justify-center2 items-center2 bg-[#f5f7f9]">
    <div class="flex flex-wrap gap-2 md:space-x-0 px-2 lg:px-0">
        <button class="flex rounded px-2 py-1 items-center bg-[#dc052d]">
            <span class=" font-semibold text-white text-sm">All</span>
        </button>
        <button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
            <span class=" font-semibold text-[#002f6c] leading-tight text-sm">
                News
            </span>
        </button>
        <button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
            <span class=" font-semibold text-[#002f6c] leading-tight text-sm">
                Club
            </span>
        </button>
        <button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
            <span class=" font-semibold text-[#002f6c] leading-tight text-sm">
                Bundesliga
            </span>
        </button>
        <button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
            <span class=" font-semibold text-[#002f6c] leading-tight text-sm">
                Champion League
            </span>
        </button>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-2 mx-auto w-full md:w-12/12 ">
        <div class="px-3 py-3 w-full">
            <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow ">
                <a href="/news/one" class="relative">
                    <img src="{{ url('assets/img/fans/fans2.png') }}" alt="" class="w-80" />
                    <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
                </a>
                <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                    <div class="font-semibold text-xs md:text-xs uppercase text-red-500">
                        Membership
                    </div>

                    <a href="/news/one">
                        <span class="font-semibold text-base md:text-md text-[#002f6c] leading-tight">Become part of the FC Bayern family!</span>
                    </a>

                </div>
            </div>
        </div>

        @foreach($articles as $article)
        <div class="px-3 py-3 w-full">
            <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow ">
                <a href="{{ url('news/'. $article->slug) }}" class="relative">
                    <img src="{{ url('assets/img/fans/fans1.png') }}" alt="" class="w-80" />
                    <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
                </a>
                <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                    <div class="font-semibold text-xs md:text-xs uppercase text-red-500">
                        {{ $article->category($article->category_id) }}
                    </div>
                    <a href="{{ url('news/'. $article->slug) }}">
                        <span class="font-semibold text-base md:text-md text-[#002f6c] leading-tight">{{ $article->title }}</span>
                    </a>
                </div>
            </div>
        </div>
        @endforeach


    </div>
    <div class="flex flex-row justify-between px-3 mx-auto w-full md:w-12/12">
        <a href="{{ route('news') }}" class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
            <span class=" font-semibold text-[#002f6c] leading-tight">
                All News
            </span>
        </a>
    </div>
</div>

@include('frontend.components._subscribe-form')

<!-- Media -->
<div class="h-max flex mx-auto w-full lg:w-1/2 px-0 md:px-6 py-0 md:py-4 justify-center2 items-center2 bg-[#000e29]">
    <div class="flex flex-col space-y-3  py-6 mx-auto w-full md:w-12/12 ">
      <div class="flex justify-between items-center">
        <span class="text-white text-base px-3 md:text-2xl uppercase font-semibold">FC Bayern TV</span>
          <a href={"/"} class="flex items-center space-x-2 text-blue-500" >
            <span class="text-sm ">Show more</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
</svg>

          </a>
        </div>

        <div class=" grid grid-cols-2 md:grid-cols-4 lg:grid-cols-2 mx-auto w-full md:w-12/12 ">
          <div class="px-3 py-3 w-full">
            <div class=" bg-[#121f38] group flex flex-col overflow-hidden hover:scale-105 ">
              <a
                href="https://statamic.com/blog/statamic-4-unleashed"
                class="relative"
              >
                <img src="{{ url('assets/img/230710-choupo_leistungsdiagnostik-1.png') }}" alt="" class="w-full" />
                <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
              </a>
              <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                <div class="font-semibold text-xs uppercase text-white">
                  Video
                </div>
                <h3 class="font-semibold text-[16px] text-white">
                  <a href="https://statamic.com/blog/statamic-4-unleashed">
                  Here we go again! Choupo-Moting & Co begin pre-season
                  </a>
                </h3>
              </div>
            </div>
          </div>
          <div class="px-3 py-3 w-full">
          <div class=" bg-[#121f38] group flex flex-col overflow-hidden hover:scale-105 ">
            <a
              href="https://statamic.com/blog/statamic-4-unleashed"
              class="relative"
            >
              <img src="{{ url('assets/img/230623-interview-guerreiro-16-9.png') }}" alt="" class="w-full" />
              <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
            </a>
            <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
              <div class="font-semibold text-xs uppercase text-white">
                Video
              </div>
              <h3 class="font-semibold text-[16px] text-white">
                <a href="https://statamic.com/blog/statamic-4-unleashed">
                Here we go again! Choupo-Moting & Co begin pre-season
                </a>
              </h3>
            </div>
          </div>
          </div>
          <div class="px-3 py-3 w-full">
          <div class=" bg-[#121f38] group flex flex-col overflow-hidden hover:scale-105 ">
            <a
              href="https://statamic.com/blog/statamic-4-unleashed"
              class="relative"
            >
              <img src="{{ url('assets/img/230709-hernandez-get.png') }}" alt="" class="w-full" />
              <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
            </a>
            <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
              <div class="font-semibold text-xs uppercase text-white">
                Video
              </div>
              <h3 class="font-semibold text-[16px] text-white">
                <a href="https://statamic.com/blog/statamic-4-unleashed">
                Here we go again! Choupo-Moting & Co begin pre-season
                </a>
              </h3>
            </div>
          </div>
          </div>
          <div class="px-3 py-3 w-full">
          <div class=" bg-[#121f38] group flex flex-col overflow-hidden hover:scale-105 ">
            <a
              href="https://statamic.com/blog/statamic-4-unleashed"
              class="relative"
            >
              <img src="{{ url('assets/img/230708-bayerischer-sportpreis-ehrung-musiala-StMI.png') }}" alt="" class="w-full" />
              <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
            </a>
            <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
              <div class="font-semibold text-xs uppercase text-white">
                Video
              </div>
              <h3 class="font-semibold text-[16px] text-white">
                <a href="https://statamic.com/blog/statamic-4-unleashed">
                Here we go again! Choupo-Moting & Co begin pre-season
                </a>
              </h3>
            </div>
          </div>
          </div>
        </div>
    </div>
</div>

<!-- Honour -->
<div class="h-max mx-auto w-full lg:w-1/2 flex flex-col space-y-3 px-3 md:px-6 lg:px-0 py-0 md:py-4 justify-center2 items-center2 bg-[#f5f7f9]">
    <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
        <a href="/" class="flex space-x-1 items-center hover:opacity-80">
            <span class="text-lg md:text-2xl font-bold text-[#002f6c]">
                Honours
            </span>
        </a>

    </div>

    <div class="relative flex flex-row mx-auto w-full md:w-12/12 justify-between items-center">

        <div class="top-[40%] left-0">
            <button class="none absolute top-[35%] -left-0 md:-left-5 z-10 cursor-pointer rounded-full px-2 py-2 bg-[#002f6c] border-2 border-gray-800 shadow text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
        </div>

        <div class="top-[40%] right-0">
            <button class="none absolute top-[35%] -right-0 md:-right-5 z-10 cursor-pointer rounded-full px-2 py-2 bg-[#002f6c] border-2 border-gray-800 shadow text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>


        <div class="mb-[1em] flex flex-row overflow-x-auto scroll-smooth custom-scrollbar">
            @foreach($awards as $award)
            <div class="transition-all duration-150 flex mr-[.5em] ">
                <div class="flex w-[130px] md:w-[180px] p-5 justify-center bg-white shadow hover:shadow-lg">
                    <div class=" bg-white  flex ">
                        <a href="/" class="flex flex-col space-y-3 justify-center items-center">
                            <div class="flex space-x-3">
                                @if ($award->troph->trophy)
                                <img src="{{ asset('storage/'.$award->troph->trophy) }}" alt="{{ $award->competition->name }}" class="w-26 " />
                                @endif
                            </div>
                            <div class="flex flex-col justify-center items-center">
                                <div class="flex text-center">
                                    <span class="font-bold text-[12px] md:text-sm text-[#002f6c]">
                                        {{ $award->competition->name }}
                                    </span>
                                </div>
                                <div>
                                    <span class="font-bold text-xs md:text-sm text-[#002f6c]">
                                        {{ $award->year }}
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center pb-7">
        <a href="/" class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
            <span class=" font-semibold text-xs md:text-base text-[#002f6c]">
                All achievements
            </span>
        </a>
    </div>
</div>

@endsection