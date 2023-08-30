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


    <!-- Table -->
    <div class="bg-white bd w-full rounded-sm border border-slate-200 rc">
        <header class="vc vu">
            <h2 class="gh text-slate-800">Team Comparison <span class="gq gp"></span></h2>
        </header>
        <div class="flex flex-col py-4 px-6 space-y-1 mx-auto w-full">
            <div class="flex justify-between items-center h-14 py-1.5 border-y ">
                <div class="flex w-1/6 items-center">
                    <div class="w-8">
                        <image src="{{ asset('images/bayern.png') }}" alt />
                    </div>
                    <div class="ml-2">
                        <span class="text-sm font-bold text-[#002f6c]">
                            FC Bayern Munich
                        </span>
                    </div>
                </div>
                <div class=" w-4/6">

                </div>
                <div class="flex w-1/6 justify-end items-center">
                    <div class="mr-2">
                        <span class="text-sm font-bold text-[#002f6c]">
                            Manchester City
                        </span>
                    </div>
                    <div class="w-8">
                        <Image src="{{ asset('images/manchester-city.png') }}" alt />
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-between items-center h-10 py-1.5">
                <div class="flex w-1/6">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">18</span>
                    </div>
                </div>
                <div class="w-4/6">
                    <div class="flex w-full mx-auto justify-center">
                        <span class="text-sm font-bold text-[#002f6c]">Shots</span>
                    </div>
                </div>
                <div class="flex w-1/6 justify-end">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">19</span>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-between items-center h-10 py-1.5">
                <div class="flex w-1/6">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">9</span>
                    </div>
                </div>
                <div class="w-4/6">
                    <div class="flex w-full mx-auto justify-center">
                        <span class="text-sm font-bold text-[#002f6c]">Shots on target</span>
                    </div>
                </div>
                <div class="flex w-1/6 justify-end">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">4</span>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-between items-center h-10 py-1.5">
                <div class="flex w-1/6">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">67%</span>
                    </div>
                </div>
                <div class="w-4/6">
                    <div class="flex w-full mx-auto justify-center">
                        <span class="text-sm font-bold text-[#002f6c]">Possession</span>
                    </div>
                </div>
                <div class="flex w-1/6 justify-end">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">33%</span>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-between items-center h-10 py-1.5">
                <div class="flex w-1/6">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">637</span>
                    </div>
                </div>
                <div class="w-4/6">
                    <div class="flex w-full mx-auto justify-center">
                        <span class="text-sm font-bold text-[#002f6c]">Passes</span>
                    </div>
                </div>
                <div class="flex w-1/6 justify-end">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">316</span>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-between items-center h-10 py-1.5">
                <div class="flex w-1/6">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">86%</span>
                    </div>
                </div>
                <div class="w-4/6">
                    <div class="flex w-full mx-auto justify-center">
                        <span class="text-sm font-bold text-[#002f6c]">Pass accuracy</span>
                    </div>
                </div>
                <div class="flex w-1/6 justify-end">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">72%</span>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-between items-center h-10 py-1.5">
                <div class="flex w-1/6">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">13</span>
                    </div>
                </div>
                <div class="w-4/6">
                    <div class="flex w-full mx-auto justify-center">
                        <span class="text-sm font-bold text-[#002f6c]">Fouls</span>
                    </div>
                </div>
                <div class="flex w-1/6 justify-end">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">11</span>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-between items-center h-10 py-1.5">
                <div class="flex w-1/6">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">4</span>
                    </div>
                </div>
                <div class="w-4/6">
                    <div class="flex w-full mx-auto justify-center">
                        <span class="text-sm font-bold text-[#002f6c]">Yellow cards</span>
                    </div>
                </div>
                <div class="flex w-1/6 justify-end">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">4</span>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-between items-center h-10 py-1.5">
                <div class="flex w-1/6">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">0</span>
                    </div>
                </div>
                <div class="w-4/6">
                    <div class="flex w-full mx-auto justify-center">
                        <span class="text-sm font-bold text-[#002f6c]">Red cards</span>
                    </div>
                </div>
                <div class="flex w-1/6 justify-end">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">1</span>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-between items-center h-10 py-1.5">
                <div class="flex w-1/6">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">3</span>
                    </div>
                </div>
                <div class="w-4/6">
                    <div class="flex w-full mx-auto justify-center">
                        <span class="text-sm font-bold text-[#002f6c]">Offsides</span>
                    </div>
                </div>
                <div class="flex w-1/6 justify-end">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">2</span>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-between items-center h-10 py-1.5">
                <div class="flex w-1/6">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">11</span>
                    </div>
                </div>
                <div class="w-4/6">
                    <div class="flex w-full mx-auto justify-center">
                        <span class="text-sm font-bold text-[#002f6c]">Corners</span>
                    </div>
                </div>
                <div class="flex w-1/6 justify-end">
                    <div>
                        <span class="text-sm font-bold text-[#002f6c]">3</span>
                    </div>
                </div>
            </div>
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
                            <div class="">
                                <div class="">
                                    <div class="flex flex-col space-y-3">
                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Player Name
                                                </label>
                                                <input wire:model="name" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Player Name
                                                </label>
                                                <input wire:model="name" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>
                                        
                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Birth Date
                                                </label>
                                                <input wire:model="birthDate" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Birth Location
                                                </label>
                                                <input wire:model="birthLocation" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>
                                        
                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="height" class="block text-sm font-medium text-gray-700">
                                                    Height
                                                </label>
                                                <input wire:model="height" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="weight" class="block text-sm font-medium text-gray-700">
                                                    Weight
                                                </label>
                                                <input wire:model="weight" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>
                                       
                                        
                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="contractFrom" class="block text-sm font-medium text-gray-700">
                                                    Contract From
                                                </label>
                                                <x-flatpicker wire:model="contractFrom"></x-flatpicker>
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="contractUntil" class="block text-sm font-medium text-gray-700">
                                                    Contract Until
                                                </label>
                                                <x-flatpicker wire:model="contractUntil"></x-flatpicker>
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