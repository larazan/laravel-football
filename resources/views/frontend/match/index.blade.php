@extends('frontend.layout')

@section('content')

<div class="relative  block min-h-80 lg:col-span-2 lg:h-full bg-white">
        <div class="py-0 flex flex-col space-y-2">
          <div class="h-max flex flex-col mx-auto w-full lg:w-1/2">
            <div class="flex flex-col w-full md:flex-row md:justify-between space-y-5 py-4 px-2 md:px-6 border-b items-start">
              <div class="w-full md:w-1/2 flex flex-wrap">
                <button class="flex rounded mr-2 mt-2 px-2 py-1 items-center bg-[#dc052d] ">
                  <span class=" font-semibold text-white text-sm">
                    Matchplan
                  </span>
                </button>
                <button class="flex rounded mr-2 mt-2 px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                  <span class=" font-semibold text-[#002f6c] text-sm">
                    Matchdays
                  </span>
                </button>
                <a href={'/standing'}>
                <button class="flex rounded mr-2 mt-2 px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                  <span class=" font-semibold text-[#002f6c] text-sm">
                    Standings
                  </span>
                </button>
                </a>
                <button class="flex rounded mr-2 mt-2 px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                  <span class=" font-semibold text-[#002f6c] text-sm">
                    Stats
                  </span>
                </button>
              </div>
              <div class="flex w-full md:w-1/2 flex-col space-y-2 md:justify-end ">
                <div class="flex flex-wrap md:flex-nowrap justify-end space-x-2">
                 
                  <!-- SortSeason -->

                </div>
                <div class="flex space-x-2 justify-end">
                  <div class="flex flex-wrap md:flex-nowrap items-center space-x-2">
                   
                    <!-- SortCompetition -->

                    <button class="hidden md:flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200 border border-indigo-300">
                      <span class=" font-semibold text-[#002f6c] text-sm">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          strokeWidth={1.5}
                          stroke="currentColor"
                          class="w-5 h-5"
                        >
                          <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            d="M12.75 19.5v-.75a7.5 7.5 0 00-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"
                          />
                        </svg>
                      </span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full bottom-0 pb-[1px] px-3 py-1.5 md:px-3 overflow-x-auto overflow-hidden">
              <ul class="flex items-center justify-center space-x-2 md:space-x-4  md:tracking-widest font-semibold text-xs  ">
                <li class=" border-b-2 border-[#0066b2] md:-mt-px  ">
                  <a
                    class=" inline-block py-2 font-bold text-[14px] text-[#0066b2]"
                    href="/movie"
                  >
                    <span class="hidden2 md:inline tracking-tight md:tracking-normal">Jul</span>
                  </a>
                </li>
                <li class=" border-b-2 border-white hover:border-[#0066b2] md:-mt-px  ">
                  <a
                    class=" inline-block py-2 font-bold text-[14px] text-[#0066b2]"
                    href="/movie"
                  >
                    <span class="hidden2 md:inline tracking-tight md:tracking-normal">Aug</span>
                  </a>
                </li>
                <li class=" border-b-2 border-white hover:border-[#0066b2] md:-mt-px  ">
                  <a
                    class=" inline-block py-2 font-bold text-[14px] text-[#0066b2]"
                    href="/movie"
                  >
                    <span class="hidden2 md:inline tracking-tight md:tracking-normal">Sep</span>
                  </a>
                </li>
                <li class=" border-b-2 border-white hover:border-[#0066b2] md:-mt-px  ">
                  <a
                    class=" inline-block py-2 font-bold text-[14px] text-[#0066b2]"
                    href="/movie"
                  >
                    <span class="hidden2 md:inline tracking-tight md:tracking-normal">Oct</span>
                  </a>
                </li>
                <li class=" border-b-2 border-white hover:border-[#0066b2] md:-mt-px  ">
                  <a
                    class=" inline-block py-2 font-bold text-[14px] text-[#0066b2]"
                    href="/movie"
                  >
                    <span class="hidden2 md:inline tracking-tight md:tracking-normal">Nov</span>
                  </a>
                </li>
                <li class=" border-b-2 border-white hover:border-[#0066b2] md:-mt-px  ">
                  <a
                    class=" inline-block py-2 font-bold text-[14px] text-[#0066b2]"
                    href="/movie"
                  >
                    <span class="hidden2 md:inline tracking-tight md:tracking-normal">Dec</span>
                  </a>
                </li>
                <li class=" border-b-2 border-white hover:border-[#0066b2] md:-mt-px  ">
                  <a
                    class=" inline-block py-2 font-bold text-[14px] text-[#0066b2]"
                    href="/movie"
                  >
                    <span class="hidden2 md:inline tracking-tight md:tracking-normal">Jan</span>
                  </a>
                </li>
                <li class=" border-b-2 border-white hover:border-[#0066b2] md:-mt-px  ">
                  <a
                    class=" inline-block py-2 font-bold text-[14px] text-[#0066b2]"
                    href="/movie"
                  >
                    <span class="hidden2 md:inline tracking-tight md:tracking-normal">Feb</span>
                  </a>
                </li>
                <li class=" border-b-2 border-white hover:border-[#0066b2] md:-mt-px  ">
                  <a
                    class=" inline-block py-2 font-bold text-[14px] text-[#0066b2]"
                    href="/movie"
                  >
                    <span class="hidden2 md:inline tracking-tight md:tracking-normal">Mar</span>
                  </a>
                </li>
                <li class=" border-b-2 border-white hover:border-[#0066b2] md:-mt-px  ">
                  <a
                    class=" inline-block py-2 font-bold text-[14px] text-[#0066b2]"
                    href="/movie"
                  >
                    <span class="hidden2 md:inline tracking-tight md:tracking-normal">Apr</span>
                  </a>
                </li>
                <li class=" border-b-2 border-white hover:border-[#0066b2] md:-mt-px  ">
                  <a
                    class=" inline-block py-2 font-bold text-[14px] text-[#0066b2]"
                    href="/movie"
                  >
                    <span class="hidden2 md:inline tracking-tight md:tracking-normal">May</span>
                  </a>
                </li>
                <li class=" border-b-2 border-white hover:border-[#0066b2] md:-mt-px  ">
                  <a
                    class=" inline-block py-2 font-bold text-[14px] text-[#0066b2]"
                    href="/movie"
                  >
                    <span class="hidden2 md:inline tracking-tight md:tracking-normal">Jun</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="flex px-3 py-4 md:px-6 md:py-6  w-full md:w-12/12 ">
              <span class="text-lg md:text-2xl font-bold text-[#002f6c] uppercase">
                Matchplan season 2023/2024
              </span>
            </div>
            <div class="flex flex-col space-y-6 py-4">

              <div class="flex flex-col">
                <div class="flex px-3 md:px-6  w-full md:w-12/12 ">
                  <span class="text-lg font-bold text-[#002f6c] uppercase">
                    September
                  </span>
                </div>
               
                    <a href="">
                      <div class="flex flex-col w-full px-3 md:px-6 hover:bg-gray-100" key={index}>
                        <div class="flex flex-col w-full h-24 py-1.5 border-y">
                          <div class="flex justify-between">
                            <div class="flex flex-col ">
                              <div>
                                <span class="text-xs text-gray-400">
                                  {data.time}
                                </span>
                              </div>
                            </div>

                            <div class="flex flex-col items-end">
                              <div>
                                <span class="text-xs text-gray-400">
                                  {data.competition}
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="flex w-full justify-between items-center">
                            <div class="flex w-5/12 md:w-1/3 ">
                              <div>
                                <span class="text-sm font-bold text-[#002f6c]">
                                  {data.home_team}
                                </span>
                              </div>
                            </div>
                            <div class="flex flex-col mx-auto2 w-2/12 md:w-1/3 items-center">
                              <div class="flex items-center md:space-x-5">
                                <div class="w-8">
                                  <img src="{{ url('assets/img/clubs/bayern.png') }}" alt="" />
                                </div>
                                <div class="w-6 md:w-16 flex items-center justify-center">
                                  <span class="text-2xl font-bold">-</span>
                                </div>
                                <div class="w-8">
                                  <img src="{{ url('assets/img/clubs/leverkusen.png') }}" alt="" />
                                </div>
                              </div>
                            </div>
                            <div class="flex w-5/12 md:w-1/3 justify-end items-end2">
                              <div>
                                <span class="text-sm font-bold text-[#002f6c]">
                                  {data.away_team}
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="flex flex-col mx-auto w-full md:w-1/3 justify-end items-center">
                            <div>
                              <span class="text-xs text-gray-400">
                                {data.stadium}
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                   
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection