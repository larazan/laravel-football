<x-layouts.app>

<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Statistic ✨</h1>
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
        <div class="flex flex-col py-4 px-6 space-y-1 mx-auto w-full">
            @if ($statistics->count() > 0 )
            @foreach ($statistics as $statistic)
            <div class="flex ou justify-between items-center h-10 py-1.5">
                <div class="flex" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->home_total_shots }}</span>
                    </div>
                </div>
                <div class="ou ">
                    <div class="flex flex-row ou space-x-2 mx-auto justify-center items-center">
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden transform rotate-180 h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                        <div class="" style="width: 14%">
                            <div class="flex justify-center">
                                <span class="text-sm font-bold text-[#002f6c]">Shots</span>
                            </div>
                        </div>
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->away_total_shots }}</span>
                    </div>
                </div>
            </div>
            <div class="flex ou justify-between items-center h-10 py-1.5">
                <div class="flex" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->home_shots_on_target }}</span>
                    </div>
                </div>
                <div class="ou ">
                    <div class="flex flex-row ou space-x-2 mx-auto justify-center items-center">
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden transform rotate-180 h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                        <div class="" style="width: 14%">
                            <div class="flex justify-center text-center">
                                <span class="text-sm font-bold text-[#002f6c]">Shots on target</span>
                            </div>
                        </div>
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->away_shots_on_target }}</span>
                    </div>
                </div>
            </div>
            <div class="flex ou justify-between items-center h-10 py-1.5">
                <div class="flex" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->home_possession }}%</span>
                    </div>
                </div>
                <div class="ou ">
                    <div class="flex flex-row ou space-x-2 mx-auto justify-center items-center">
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden transform rotate-180 h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                        <div class="" style="width: 14%">
                            <div class="flex justify-center">
                                <span class="text-sm font-bold text-[#002f6c]">Possession</span>
                            </div>
                        </div>
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->away_possession }}%</span>
                    </div>
                </div>
            </div>
            <div class="flex ou justify-between items-center h-10 py-1.5">
                <div class="flex" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->home_passes }}</span>
                    </div>
                </div>
                <div class="ou ">
                    <div class="flex flex-row ou space-x-2 mx-auto justify-center items-center">
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden transform rotate-180 h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                        <div class="" style="width: 14%">
                            <div class="flex justify-center">
                                <span class="text-sm font-bold text-[#002f6c]">Passes</span>
                            </div>
                        </div>
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->away_passes }}</span>
                    </div>
                </div>
            </div>
            <div class="flex ou justify-between items-center h-10 py-1.5">
                <div class="flex" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->home_pass_accuracy }}%</span>
                    </div>
                </div>
                <div class="ou ">
                    <div class="flex flex-row ou space-x-2 mx-auto justify-center items-center">
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden transform rotate-180 h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                        <div class="" style="width: 14%">
                            <div class="flex justify-center text-center">
                                <span class="text-sm font-bold text-[#002f6c]">Pass accuracy</span>
                            </div>
                        </div>
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->away_pass_accuracy }}%</span>
                    </div>
                </div>
            </div>
            <div class="flex ou justify-between items-center h-10 py-1.5">
                <div class="flex" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->home_fouls }}</span>
                    </div>
                </div>
                <div class="ou ">
                    <div class="flex flex-row ou space-x-2 mx-auto justify-center items-center">
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden transform rotate-180 h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                        <div class="" style="width: 14%">
                            <div class="flex justify-center">
                                <span class="text-sm font-bold text-[#002f6c]">Fouls</span>
                            </div>
                        </div>
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->away_fouls }}</span>
                    </div>
                </div>
            </div>
            <div class="flex ou justify-between items-center h-10 py-1.5">
                <div class="flex" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->home_yellow_cards }}</span>
                    </div>
                </div>
                <div class="ou ">
                    <div class="flex flex-row ou space-x-2 mx-auto justify-center items-center">
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden transform rotate-180 h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                        <div class="" style="width: 14%">
                            <div class="flex justify-center">
                                <span class="text-sm font-bold text-[#002f6c]">Yellow cards</span>
                            </div>
                        </div>
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->away_yellow_cards }}</span>
                    </div>
                </div>
            </div>
            <div class="flex ou justify-between items-center h-10 py-1.5">
                <div class="flex" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->home_red_cards }}</span>
                    </div>
                </div>
                <div class="ou ">
                    <div class="flex flex-row ou space-x-2 mx-auto justify-center items-center">
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden transform rotate-180 h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                        <div class="" style="width: 14%">
                            <div class="flex justify-center">
                                <span class="text-sm font-bold text-[#002f6c]">Red cards</span>
                            </div>
                        </div>
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->away_red_cards }}</span>
                    </div>
                </div>
            </div>
            <div class="flex ou justify-between items-center h-10 py-1.5">
                <div class="flex" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->home_offsides }}</span>
                    </div>
                </div>
                <div class="ou ">
                    <div class="flex flex-row ou space-x-2 mx-auto justify-center items-center">
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden transform rotate-180 h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                        <div class="" style="width: 14%">
                            <div class="flex justify-center">
                                <span class="text-sm font-bold text-[#002f6c]">Offsides</span>
                            </div>
                        </div>
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->away_offsides }}</span>
                    </div>
                </div>
            </div>
            <div class="flex ou justify-between items-center h-10 py-1.5">
                <div class="flex" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->home_corners }}</span>
                    </div>
                </div>
                <div class="ou ">
                    <div class="flex flex-row ou space-x-2 mx-auto justify-center items-center">
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden transform rotate-180 h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                        <div class="" style="width: 14%">
                            <div class="flex justify-center">
                                <span class="text-sm font-bold text-[#002f6c]">Corners</span>
                            </div>
                        </div>
                        <div class="" style="width: 43%">
                            <div class="overflow-hidden h-3 text-xs flex rounded bg-gray-300">
                                <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end" style="width: 5%">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">{{ $statistic->away_corners }}</span>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="w-full flex justify-center">
                <span class="text-sm font-semibold italic">Couldn't get data, Please fill the statistics first!</span>
            </div>
            @endif
        </div>
    </div>


    <x-dialog-modal wire:model="showMatchStatisticModal" class="">

        @if ($matchStatisticId)
        <x-slot name="title" class="border-b">Update Statistic</x-slot>
        @else
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Create Statistic</span>
        </x-slot>
        @endif

        <x-slot name="content">
            <div class="border-t">
                <div class="vc vu ">
                    <div class="fw">

                        <form>
                            <div class="my-3 md:mt-0 md:col-span-2" x-data="{tab: 0}">
                                <div class="mb-5 flex border border-black overflow-hidden">
                                    <button class="px-4 py-2 w-full font-bold" :class="{ 'active bg-gray-800 text-white': tab === 0 }" x-on:click.prevent="tab = 0">Home Team</button>
                                    <button class="px-4 py-2 w-full font-bold" :class="{ 'active bg-gray-800 text-white': tab === 1 }" x-on:click.prevent="tab = 1">Away Team</button>
                                </div>
                                <div>
                                    <div class="mt-6 flex flex-col space-y-3" x-show="tab === 0">
                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Total Shots
                                                </label>
                                                <input wire:model="homeTotalShots" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Shots on Target
                                                </label>
                                                <input wire:model="homeShotsOnTarget" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>

                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Possesion %
                                                </label>
                                                
                                                <input type="range"  max="100" step="1" value="50" wire:model="homePossession" oninput="rangevalue.value=value"  />
                                                <output id="rangevalue">50</output>
                                                
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Passess
                                                </label>
                                                <input wire:model="homePasses" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>

                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="height" class="block text-sm font-medium text-gray-700">
                                                    Pass Accuracy %
                                                </label>
                                                <input wire:model="homePassAccuracy" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="weight" class="block text-sm font-medium text-gray-700">
                                                    Fouls
                                                </label>
                                                <input wire:model="homeFouls" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>

                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="height" class="block text-sm font-medium text-gray-700">
                                                    Yellow Cards
                                                </label>
                                                <input wire:model="homeYellowCards" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="weight" class="block text-sm font-medium text-gray-700">
                                                    Red Cards
                                                </label>
                                                <input wire:model="homeRedCards" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>

                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="height" class="block text-sm font-medium text-gray-700">
                                                    Offsides
                                                </label>
                                                <input wire:model="homeOffsides" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="weight" class="block text-sm font-medium text-gray-700">
                                                    Corners
                                                </label>
                                                <input wire:model="homeCorners" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mt-6 flex flex-col space-y-3" x-show="tab === 1">
                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Total Shots
                                                </label>
                                                <input wire:model="awayTotalShots" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Shots on Target
                                                </label>
                                                <input wire:model="awayShotsOnTarget" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>

                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Possesion %
                                                </label>
                                                <input type="range"  max="100" step="1" value="50" wire:model="awayPossession" oninput="rangevalue.value=value"  />
                                                <output id="rangevalue">50</output>
                                                
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Passess
                                                </label>
                                                <input wire:model="awayPasses" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>

                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="height" class="block text-sm font-medium text-gray-700">
                                                    Pass Accuracy %
                                                </label>
                                                <input wire:model="awayPassAccuracy" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="weight" class="block text-sm font-medium text-gray-700">
                                                    Fouls
                                                </label>
                                                <input wire:model="awayFouls" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>

                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="height" class="block text-sm font-medium text-gray-700">
                                                    Yellow Cards
                                                </label>
                                                <input wire:model="awayYellowCards" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="weight" class="block text-sm font-medium text-gray-700">
                                                    Red Cards
                                                </label>
                                                <input wire:model="awayRedCards" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>

                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="height" class="block text-sm font-medium text-gray-700">
                                                    Offsides
                                                </label>
                                                <input wire:model="awayOffsides" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="weight" class="block text-sm font-medium text-gray-700">
                                                    Corners
                                                </label>
                                                <input wire:model="awayCorners" onkeypress="return onlyNumberKey(event)" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="border-slate-200">
                <div class="flex flex-wrap justify-end fc">

                    <x-button wire:click="closeMatchStatisticModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-button>

                    @if ($matchStatisticId)
                    <x-button wire:click="updateMatchStatistic" class=" ho xi ye">Update</x-button>
                    @else
                    <x-button wire:click="createMatchStatistic" class=" ho xi ye2">Create</x-button>
                    @endif
                </div>
            </div>

        </x-slot>
    </x-dialog-modal>


</div>

</x-layouts.app>

@push('styles')
<style>


input,
output {
  display: inline-block;
  vertical-align: middle;
  font-size: 1em;
  font-family: Arial, sans-serif;
}

output {
  background: #ff4500;
  padding: 5px 16px;
  border-radius: 3px;
  color: #fff;
}

input[type="number"] {
  width: 40px;
  padding: 4px 5px;
  border: 1px solid #bbb;
  border-radius: 3px;
}

/* input[type="range"]:focus,
input[type="number"]:focus {
  box-shadow: 0 0 3px 1px #4b81dd;
  outline: none;
} */

input[type="range"] {
  -webkit-appearance: none;
  margin-right: 15px;
  width: 200px;
  height: 7px;
  background: #b2b7b8;
  border-radius: 5px;
  background-image: linear-gradient(#ff4500, #ff4500);
  background-size: 50% 100%;
  background-repeat: no-repeat;
}

[dir="rtl"] input[type="range"] {
  background: #ff4500;
  background-image: linear-gradient(#fff, #fff);
  background-size: 30% 100%;
  background-repeat: no-repeat;
}

/* Input Thumb */
input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  height: 20px;
  width: 20px;
  border-radius: 50%;
  background: #ff4500;
  cursor: ew-resize;
  box-shadow: 0 0 2px 0 #555;
  transition: background .3s ease-in-out;
}

input[type="range"]::-moz-range-thumb {
  -webkit-appearance: none;
  height: 20px;
  width: 20px;
  border-radius: 50%;
  background: #ff4500;
  cursor: ew-resize;
  box-shadow: 0 0 2px 0 #555;
  transition: background .3s ease-in-out;
}

input[type="range"]::-ms-thumb {
  -webkit-appearance: none;
  height: 20px;
  width: 20px;
  border-radius: 50%;
  background: #ff4500;
  cursor: ew-resize;
  box-shadow: 0 0 2px 0 #555;
  transition: background .3s ease-in-out;
}

input[type="range"]::-webkit-slider-thumb:hover {
  background: #ff0200;
}

input[type="range"]::-moz-range-thumb:hover {
  background: #ff0200;
}

input[type="range"]::-ms-thumb:hover {
  background: #ff0200;
}

/* Input Track */
input[type=range]::-webkit-slider-runnable-track  {
  -webkit-appearance: none;
  box-shadow: none;
  border: none;
  background: transparent;
}

input[type=range]::-moz-range-track {
  -webkit-appearance: none;
  box-shadow: none;
  border: none;
  background: transparent;
}

input[type="range"]::-ms-track {
  -webkit-appearance: none;
  box-shadow: none;
  border: none;
  background: transparent;
}


</style>
@endpush

@push('js')
<script>
    const rangeInputs = document.querySelectorAll('input[type="range"]')
const numberInput = document.querySelector('input[type="number"]')
let isRTL = document.documentElement.dir === 'rtl'

function handleInputChange(e) {
  let target = e.target
  if (e.target.type !== 'range') {
    target = document.getElementById('range')
  } 
  const min = target.min
  const max = target.max
  const val = target.value
  let percentage = (val - min) * 100 / (max - min)
  if (isRTL) {
    percentage = (max - val) 
  }
  
  target.style.backgroundSize = percentage + '% 100%'
}

rangeInputs.forEach(input => {
  input.addEventListener('input', handleInputChange)
})

numberInput.addEventListener('input', handleInputChange)

// Handle element change, check for dir attribute value change
function callback(mutationList, observer) {  mutationList.forEach(function(mutation) {
    if (mutation.type === 'attributes' && mutation.attributeName === 'dir') {
      isRTL = mutation.target.dir === 'rtl'
    }
  })
}

// Listen for body element change
const observer = new MutationObserver(callback)
observer.observe(document.documentElement, {attributes: true})
</script>
@endpush