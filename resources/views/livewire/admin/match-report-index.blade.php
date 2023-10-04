<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Report ✨</h1>
        </div>

        <!-- Right: Actions -->
        <div class="sn am jo az jp ft">
            <!-- Create contact button -->
            <button class="btn ho xi ye" wire:click="showCreateModal">
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden trm nq">Fill Statistic</span>
            </button>
        </div>

    </div>

    <!-- More actions -->
    <div class="je jd jc ii">

        <!-- Left side -->
        <div class="ri _y">
            <button class="btn bg-white border-slate-200 hover--border-slate-300 yl xy" wire:click="backTo">Back</button>
        </div>

    </div>


    <!-- Table -->
    <div class="bg-white bd w-full rounded-sm border border-slate-200 rc">
        <header class="vc vu">
            <h2 class="gh text-slate-800">Team Comparison <span class="gq gp">{{ $matchId }}</span></h2>
        </header>
        <div class="flex flex-col py-4 px-6 space-y-1 mx-auto w-full">
            @foreach ($matchs as $match)
            <div class="flex justify-between items-center h-14 py-1.5 border-y ">
                <div class="flex w-1/6 items-center">
                    <div class="w-8">
                        @if ($match->home->logo)
                        <div class="">
                            <img src="{{ asset('storage/'.$match->home->logo) }}" class="w-8 rounded" alt="foto" />
                        </div>
                        @endif

                    </div>
                    <div class="ml-2">
                        <span class="text-sm font-bold text-[#002f6c]">
                            {{ $match->home->name }}
                        </span>
                    </div>
                </div>
                <div class=" w-4/6">
                    <div class="w-full flex flex-col justify-center text-center">
                        <div class="flex space-x-2 items-center justify-center">
                            <span class="text-xs font-semibold text-gray-600">
                                {{ $match->competition->name }}
                            </span>
                            <div>
                                <span class="text-xs font-semibold text-gray-600">
                                    {{ $match->season }}
                                </span>
                            </div>
                        </div>
                        <div class="justify-center">
                            <span class="text-xs font-semibold text-gray-600">
                                Stadium: Allianz Arena, Munich
                            </span>
                        </div>
                        <div class="justify-center">
                            <span class="text-xs font-semibold text-gray-600">
                                {{ $match->fixture_match }}, {{ $match->hour }}:{{ $match->minute }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex w-1/6 justify-end items-center">
                    <div class="mr-2">
                        <span class="text-sm font-bold text-[#002f6c]">
                            {{ $match->away->name }}
                        </span>
                    </div>
                    <div class="w-8">
                        @if ($match->away->logo)
                        <div class="">
                            <img src="{{ asset('storage/'.$match->away->logo) }}" class="w-8 rounded" alt="foto" />
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
    </div>