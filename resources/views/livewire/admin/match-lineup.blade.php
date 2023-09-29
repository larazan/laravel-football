<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Lineup ✨</h1>
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
            <h2 class="gh text-slate-800">Lineup <span class="gq gp"></span></h2>
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
        <div class="flex flex-col py-2 px-6 space-y-1 mx-auto w-full">

            <div class="w-full  flex flex-col space-y-5 ">
                {{--
                <div class="w-full flex py-1 border-b border-gray-300">
                    <div class="w-1/2">
                        <div class="flex flex-col w-full  ">
                            <div class="flex justify-between items-center py-2 px-3">
                                <div class="flex space-x-2 items-center">
                                    <div class="flex">
                                        <div class="flex w-8 h-8 bg-black text-gray-300 justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
                                                <path fillRule="evenodd" clipRule="evenodd" d="M9.00398 0H5.74805C5.48283 0 5.22848 0.105357 5.04094 0.292893L1.04094 4.29289C0.650416 4.68342 0.650415 5.31658 1.04094 5.70711L2.96006 7.62623C3.35058 8.01675 3.98375 8.01675 4.37427 7.62623L5.33383 6.66667V19C5.33383 19.5523 5.78155 20 6.33383 20H17.6672C18.2195 20 18.6672 19.5523 18.6672 19V6.66667L19.6267 7.62623C20.0173 8.01675 20.6504 8.01675 21.0409 7.62623L22.9601 5.70711C23.3506 5.31658 23.3506 4.68342 22.9601 4.29289L18.9601 0.292893C18.7725 0.105357 18.5182 0 18.253 0H15.3303C14.7686 1.18247 13.5634 1.99999 12.1672 1.99999C10.771 1.99999 9.56572 1.18247 9.00398 0Z" fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        <div class="flex w-8 h-8 bg-gray-300 justify-center items-center">
                                            <span class="text-sm text-[#002f6c] font-bold">
                                                8
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="text-sm text-[#002f6c] font-bold capitalize">
                                            Benjamin Pavard
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 flex justify-end">
                        <div class="flex flex-col   ">
                            <div class="flex justify-between items-center py-2 px-3">
                                <div class="flex space-x-2 items-center">
                                    <div>
                                        <span class="text-sm text-[#002f6c] font-bold capitalize">
                                            Ederson
                                        </span>
                                    </div>
                                    <div class="flex">
                                        <div class="flex w-8 h-8 bg-gray-300 justify-center items-center">
                                            <span class="text-sm text-[#002f6c] font-bold">
                                                1
                                            </span>
                                        </div>
                                        <div class="flex w-8 h-8 bg-black text-gray-300 justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
                                                <path fillRule="evenodd" clipRule="evenodd" d="M9.00398 0H5.74805C5.48283 0 5.22848 0.105357 5.04094 0.292893L1.04094 4.29289C0.650416 4.68342 0.650415 5.31658 1.04094 5.70711L2.96006 7.62623C3.35058 8.01675 3.98375 8.01675 4.37427 7.62623L5.33383 6.66667V19C5.33383 19.5523 5.78155 20 6.33383 20H17.6672C18.2195 20 18.6672 19.5523 18.6672 19V6.66667L19.6267 7.62623C20.0173 8.01675 20.6504 8.01675 21.0409 7.62623L22.9601 5.70711C23.3506 5.31658 23.3506 4.68342 22.9601 4.29289L18.9601 0.292893C18.7725 0.105357 18.5182 0 18.253 0H15.3303C14.7686 1.18247 13.5634 1.99999 12.1672 1.99999C10.771 1.99999 9.56572 1.18247 9.00398 0Z" fill="currentColor"></path>
                                            </svg>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                --}}
                <!--  -->
                <div class="w-full flex py-1 space-x-1">
                    <div class="w-1/2">
                        @foreach ($allHomePlayers as $index => $homePlayer)
                        <div class="flex justify-center border-y border-gray-300 ">
                            <div class="flex flex-col w-full ">
                                <div class="flex items-center justify-between border-b space-x-2 border-gray-300 py-3 px-3">
                                    <div class="flex text-sm items-center space-x-1">
                                        <div class="flex">
                                            <div class="flex w-8 h-8 bg-black text-gray-300 justify-center items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
                                                    <path fillRule="evenodd" clipRule="evenodd" d="M9.00398 0H5.74805C5.48283 0 5.22848 0.105357 5.04094 0.292893L1.04094 4.29289C0.650416 4.68342 0.650415 5.31658 1.04094 5.70711L2.96006 7.62623C3.35058 8.01675 3.98375 8.01675 4.37427 7.62623L5.33383 6.66667V19C5.33383 19.5523 5.78155 20 6.33383 20H17.6672C18.2195 20 18.6672 19.5523 18.6672 19V6.66667L19.6267 7.62623C20.0173 8.01675 20.6504 8.01675 21.0409 7.62623L22.9601 5.70711C23.3506 5.31658 23.3506 4.68342 22.9601 4.29289L18.9601 0.292893C18.7725 0.105357 18.5182 0 18.253 0H15.3303C14.7686 1.18247 13.5634 1.99999 12.1672 1.99999C10.771 1.99999 9.56572 1.18247 9.00398 0Z" fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <select 
                                            name="allHomePlayers[{{ $index }}][player_id]" 
                                            wire:model="allHomePlayers.{{ $index }}.player_id" 
                                            class=" rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"
                                        >
                                            <option value="">-- choose player --</option>
                                            @foreach($home_players as $player)
                                            <option value="{{ $player->id }}">{{ $player->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class=" text-sm text-red-600">
                                        <span class="cursor-pointer text-red-300 hover:underline" wire:click.prevent="removeHomePlayer({{ $index }})">Delete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="py-3">
                            <button class="btn ho xi ye" wire:click.prevent="addHomePlayer">
                                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="hidden trm nq">Add Player</span>
                            </button>
                        </div>

                       
                    </div>
                    <div class="w-1/2">
                        @foreach ($allAwayPlayers as $index => $awayPlayer)
                        <div class="flex justify-center border-y border-gray-300 ">
                            <div class="flex flex-col w-full ">
                                <div class="flex items-center justify-between border-b space-x-2 border-gray-300 py-3 px-3">
                                    <div class=" text-sm text-red-600">
                                        <span class="cursor-pointer text-red-300 hover:underline" wire:click.prevent="removeAwayPlayer({{ $index }})">Delete</span>
                                    </div>
                                    <div class="flex text-sm  items-center space-x-1">
                                        <select 
                                            wire:model="allAwayPlayers.{{ $index }}.player_id" 
                                            class=" rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"
                                        >
                                            <option value="">--  choose player --</option>
                                            @foreach($away_players as $player)
                                            <option value="{{ $player->id }}">{{ $player->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="flex">
                                            <div class="flex w-8 h-8 bg-black text-gray-300 justify-center items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
                                                    <path fillRule="evenodd" clipRule="evenodd" d="M9.00398 0H5.74805C5.48283 0 5.22848 0.105357 5.04094 0.292893L1.04094 4.29289C0.650416 4.68342 0.650415 5.31658 1.04094 5.70711L2.96006 7.62623C3.35058 8.01675 3.98375 8.01675 4.37427 7.62623L5.33383 6.66667V19C5.33383 19.5523 5.78155 20 6.33383 20H17.6672C18.2195 20 18.6672 19.5523 18.6672 19V6.66667L19.6267 7.62623C20.0173 8.01675 20.6504 8.01675 21.0409 7.62623L22.9601 5.70711C23.3506 5.31658 23.3506 4.68342 22.9601 4.29289L18.9601 0.292893C18.7725 0.105357 18.5182 0 18.253 0H15.3303C14.7686 1.18247 13.5634 1.99999 12.1672 1.99999C10.771 1.99999 9.56572 1.18247 9.00398 0Z" fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="py-3 flex justify-end">
                            <button class="btn ho xi ye" wire:click.prevent="addAwayPlayer">
                                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="hidden trm nq">Add Player</span>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="py-3 px-2 w-full border-y">
                    <button class="w-full btn bg-green-600 hover:bg-green-700 ye" wire:click.prevent="createHomeLineup">
                        <span class="hidden trm nq">Store Lineup</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


</div>