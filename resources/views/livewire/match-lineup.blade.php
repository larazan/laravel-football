<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Lineup ✨</h1>
        </div>

        <!-- Right: Actions -->
        <div class="sn am jo az jp ft">
            <!-- Create contact button -->
            <button class="btn ho xi ye" wire:click="showCreateModal">
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden trm nq">Fill Lineup</span>
            </button>
        </div>

    </div>


    <!-- Table -->
    <div class="bg-white bd w-full rounded-sm border border-slate-200 rc">
        <header class="vc vu">
            <h2 class="gh text-slate-800">Lineup <span class="gq gp"></span></h2>
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

        </div>
        <div class="lex flex-col py-2 px-6 space-y-1 mx-auto w-full">

            <div class="w-full  flex flex-col space-y-5 ">
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
                <!--  -->
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
                <!--  -->
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
                <!--  -->
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
                <!--  -->
            </div>
        </div>
    </div>


    <x-dialog-modal wire:model="showLineupModal" class="">

        @if ($lineupId)
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
                    <x-button wire:click="closeLineupModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-button>
                    @if ($lineupId)
                    <x-button wire:click="updateLineup" class=" ho xi ye">Update</x-button>
                    @else
                    <x-button wire:click="createLineup" class=" ho xi ye2">Create</x-button>
                    @endif
                </div>
            </div>

        </x-slot>
    </x-dialog-modal>


</div>