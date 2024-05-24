<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Trainings</h1>
        </div>

        <!-- Right: Actions -->
        <div class="sn am jo az jp ft">

            <!-- Create training button -->
            <button class="btn ho xi ye" wire:click="showCreateModal">
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden trm nq">Create Training</span>
            </button>
        </div>

    </div>

    <!-- More actions -->
    <div class="je jd jc ii">

        <!-- Left side -->
        <div class="ri _y">

        </div>

        <!-- Right side -->
        <div class="sn am jo az jp ft">

            <!-- Delete button -->
            <div class="table-items-action hidden">
                <div class="flex items-center">
                    <div class="hidden tnh text-sm gm mr-2 lm"><span class="table-items-count"></span> items selected</div>
                    <button class="btn bg-white border-slate-200 hover--border-slate-300 yl xy">Delete</button>
                </div>
            </div>

            <!-- Filter button -->
            <select wire:model="sort" id="sort" class="a">
                <option value="asc">Asc</option>
                <option value="desc">Desc</option>
            </select>

            <select wire:model="perPage" id="filter" class="a">
                <option value="5">5 Per Page</option>
                <option value="10">10 Per Page</option>
                <option value="15">15 Per Page</option>
            </select>
        </div>

    </div>

     <!-- Table -->
     <div class="bg-white bd rounded-sm border border-slate-200 rc">
        <header class="vc vu">
            <h2 class="gh text-slate-800">Trainings <span class="gq gp"></span></h2>
        </header>
        <div x-data="handleSelect">

            <!-- Table -->
            <div class="lf">
                <table class="ux ou">
                    <!-- Table header -->
                    <thead class="go gh capitalize text-slate-500 hp co cs border-slate-200">
                        <tr>
                            <th class="vi wy w_ vo lm border ">
                                <div class="gh flex items-center">
                                    <div class="px-2">
                                        
                                    </div>
                                </div>
                            </th>
                            <th class="vi wy w_ vo lm border us">
                                <div class="gh flex justify-between">
                                    <div>Mon</div>
                                    <div class="text-xs">4th Jul</div>
                                </div>
                            </th>
                            <th class="vi wy w_ vo lm border us">
                                <div class="gh flex justify-between">
                                    <div>Tue</div>
                                    <div class="text-xs">5th Jul</div>
                                </div>
                            </th>
                            <th class="vi wy w_ vo lm border us">
                                <div class="gh flex justify-between">
                                    <div>Wed</div>
                                    <div class="text-xs">6th Jul</div>
                                </div>
                            </th>
                            <th class="vi wy w_ vo lm border us">
                                <div class="gh flex justify-between">
                                    <div>Thu</div>
                                    <div class="text-xs">7th Jul</div>
                                </div>
                            </th>
                            <th class="vi wy w_ vo lm border us">
                                <div class="gh flex justify-between">
                                    <div>Fri</div>
                                    <div class="text-xs">8th Jul</div>
                                </div>
                            </th>
                            <th class="vi wy w_ vo lm border us">
                                <div class="gh flex justify-between">
                                    <div>Sat</div>
                                    <div class="text-xs">9th Jul</div>
                                </div>
                            </th>
                            <th class="vi wy w_ vo lm border us">
                                <div class="gh flex justify-between">
                                    <div>Sun</div>
                                    <div class="text-xs">10th Jul</div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <tr class="border">
                            <td class="border go gh capitalize text-slate-500 hp co cs border-slate-200">
                                <div class="flex items-center justify-center">S1</div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hl gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt ho gh s xq border-2 cursor-pointer">
                                    <span>Physical</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hi gh s xq border-2 cursor-pointer">
                                    <span>Rest</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hu gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt ha gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hl gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hf gh s xq border-2 cursor-pointer">
                                    <span>Libur</span>
                                </div>
                            </td class="border">
                        </tr>
                        <tr class="border">
                            <td class="border go gh capitalize text-slate-500 hp co cs border-slate-200">
                                <div class="flex items-center justify-center">S2</div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hf gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hc gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hh gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hp gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hd gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hv gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                        </tr>
                        <tr class="border">
                            <td class="border go gh capitalize text-slate-500 hp co cs border-slate-200">
                                <div class="flex items-center justify-center">S3</div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hj gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hg gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hy gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hb gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hw gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hx gh s xq border-2 cursor-pointer">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                        </tr>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <x-dialog-modal wire:model="showTrainingModal" class="">

        @if ($trainingId)
        <x-slot name="title" class="border-b">Update Training</x-slot>
        @else
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Create Training</span>
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
                                        <div class="flex justify-between">
                                            <div class="col-span-1 sm:col-span-3">
                                                <label for="type" class="block text-sm font-medium text-gray-700">Training Type</label>
                                                <select wire:model="type" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                    <option value="">Select Option</option>
                                                    @foreach($types as $t)
                                                    <option value="{{ $t->id }}">{{ $t->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-span-1 sm:col-span-3">
                                                <label for="sessionId" class="block text-sm font-medium text-gray-700">Training Session</label>
                                                <select wire:model="sessionId" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                    <option value="">Select Option</option>
                                                    @foreach($sessions as $s)
                                                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="date" class="block text-sm font-medium text-gray-700">
                                                    Training Date
                                                </label>
                                                <x-flatpicker wire:model="date"></x-flatpicker>
                                            </div>
                                            <div class="col-span-1 sm:col-span-3">
                                                <label for="day" class="block text-sm font-medium text-gray-700">Day Option</label>
                                                <select wire:model="day" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none capitalize">
                                                    <option value="">Select Option</option>
                                                    @foreach($dayOption as $d)
                                                    <option value="{{ $d }}">{{ $d }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="flex justify-between">
                                            <div class="col-span-1 sm:col-span-3">
                                                <label for="session" class="block text-sm font-medium text-gray-700">Session</label>
                                                <select wire:model="session" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none capitalize">
                                                    <option value="">Select Option</option>
                                                    @foreach($sessionOption as $ses)
                                                    <option value="{{ $ses }}">{{ $ses }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-span-1 sm:col-span-3">
                                                <label for="intensity" class="block text-sm font-medium text-gray-700">Intensity</label>
                                                <select wire:model="intensity" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none capitalize">
                                                    <option value="">Select Option</option>
                                                    @foreach($intensityOption as $i)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="color" class="block text-sm font-medium text-gray-700">
                                                    Color
                                                </label>
                                                <select wire:model="color" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none capitalize">
                                                    <option value="">Select Option</option>
                                                    @foreach($colorOption as $c)
                                                    <option value="{{ $c }}">{{ $c }}</option>
                                                    @endforeach
                                                </select>
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
                    <x-button wire:click.prevent="closeTrainingModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-button>
                    @if ($trainingId)
                    <x-button wire:click="updateTraining" class=" ho xi ye">Update</x-button>
                    @else
                    <x-button wire:click="createTraining" class=" ho xi ye2">Create</x-button>
                    @endif
                </div>
            </div>

        </x-slot>
    </x-dialog-modal>

</div>