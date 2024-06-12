@extends('frontend.layout')

@section('content')

<div class="relative  block min-h-80 lg:col-span-2 lg:h-full">
        <div class="py-0 flex flex-col space-y-2">
          <div class="h-max flex flex-col mx-auto w-full lg:w-1/2">
            <div class="flex flex-col md:flex-row w-full md:justify-between space-y-3 md:space-y-0 py-4 px-6 border-b items-start">
              <div class="flex w-full space-x-2">
                <button class="flex rounded px-2 py-1 items-center bg-[#dc052d] hover:bg-blue-200">
                  <span class=" font-semibold text-white text-sm">
                    Matchplan
                  </span>
                </button>
                <button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                  <span class=" font-semibold text-[#002f6c] text-sm">
                    Matchdays
                  </span>
                </button>
                <button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                  <span class=" font-semibold text-[#002f6c] text-sm">
                    Standings
                  </span>
                </button>
                <button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                  <span class=" font-semibold text-[#002f6c] text-sm">
                    Stats
                  </span>
                </button>
              </div>
              <div class="flex w-full flex-col space-y-2 justify-end items-end ">
                <div class="flex flex-wrap md:flex-nowrap justify-end space-x-2">
                 
                  <!-- Sort -->
                
                </div>
                <div class="flex space-x-2">
                  <div class="flex flex-wrap md:flex-nowrap items-center justify-center space-x-2">
                    
                    <!-- Sort -->
                    @include('frontend.components._sort_season')

                    <button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200 border border-indigo-300">
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
            <div class="flex px-3 py-2 md:px-6 md:py-3  w-full md:w-12/12 ">
              <span class="text-lg md:text-2xl font-bold text-[#002f6c] uppercase">
                Standing
              </span>
            </div>
            <div class="flex px-6 py-5 w-full overflow-x-auto">
                <table class="w-full overflow-x-auto selectedTable">
                    <thead class="py-6">
                        <tr class="border-y w-full h-10 ">
                            <td class="w-1/12 text-center"><span class="text-xs uppercase font-bold text-[#002f6c]">Rank</span></td>
                            <td class="w-5/12"><span class="text-xs uppercase font-bold justify-start text-[#002f6c]">Team</span></td>
                            <td class="w-1/12 text-center"><span class="text-xs uppercase font-bold text-[#002f6c]">GP</span></td>
                            <td class="w-1/12 text-center"><span class="text-xs uppercase font-bold text-[#002f6c]">W</span></td>
                            <td class="w-1/12 text-center"><span class="text-xs uppercase font-bold text-[#002f6c]">D</span></td>
                            <td class="w-1/12 text-center"><span class="text-xs uppercase font-bold text-[#002f6c]">L</span></td>
                            <td class="w-1/12 text-center"><span class="text-xs uppercase font-bold text-[#002f6c]">Score</span></td>
                            <td class="w-1/12 text-center"><span class="text-xs uppercase font-bold text-[#002f6c]">SD</span></td>
                        </tr>
                    </thead>
                    <tbody>
                    @if ($teams->count() > 0)
                        @php
                        $i = 1
                        @endphp
                        @foreach ($teams as $team)
                        <tr class="py-4 h-11 border-b" >
                            <td class="w-1/12 text-center py-1 border-l-2 border-white">
                              <span class="text-xs uppercase font-bold text-[#002f6c]">{{ $i++ }}</span>
                            </td>
                            <td class="w-5/12">
                                <div class="flex space-x-2 items-center">
                                    <img src="{{ asset('storage/'.$team->club->logo) }}" alt="" class="w-7" />
                                    <span class="text-xs uppercase font-semibold md:font-bold justify-start text-[#002f6c]">{{ $team->club->name }}</span>
                                </div>
                            </td>
                            <td class="w-1/12 text-center"><span class="text-xs uppercase font-bold text-[#002f6c]">{{ $team->total_wins + $team->total_draws + $team->total_losses }}</span></td>
                            <td class="w-1/12 text-center"><span class="text-xs uppercase font-bold text-[#002f6c]">{{ $team->total_wins }}</span></td>
                            <td class="w-1/12 text-center"><span class="text-xs uppercase font-bold text-[#002f6c]">{{ $team->total_draws }}</span></td>
                            <td class="w-1/12 text-center"><span class="text-xs uppercase font-bold text-[#002f6c]">{{ $team->total_losses }}</span></td>
                            <td class="w-1/12 text-center"><span class="text-xs uppercase font-bold text-[#002f6c]">{{ $team->total_goals }} : {{ $team->total_goalsreceived }}</span></td>
                            <td class="w-1/12 text-center"><span class="text-xs uppercase font-bold text-[#002f6c]">{{ $team->total_points }}</span></td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td class="vi wy w_ vo lm" colspan="8">No records found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 pb-10 grid gap-4 grid-cols-2">
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 rounded-full bg-green-500">
                    </div>
                    <span class="text-xs text-slate-700 font-semibold">Champion League</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 rounded-full bg-indigo-600">
                    </div>
                    <span class="text-xs text-slate-700 font-semibold">European League</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 rounded-full bg-blue-500">
                    </div>
                    <span class="text-xs text-slate-700 font-semibold">Conferense League</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 rounded-full bg-red-500">
                    </div>
                    <span class="text-xs text-slate-700 font-semibold">Degradasi</span>
                </div>
            </div>
          </div>
        </div>
      </div>

@endsection