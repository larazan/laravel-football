<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />


    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Schedule ✨</h1>
        </div>

        <!-- Right: Actions -->
        <div class="sn am jo az jp ft">

            <!-- Search form -->
            <form class="y">
                <label for="action-search" class="d">Search</label>
                <input wire:model="search" id="action-search" class="s me xq" type="search" placeholder="Search by name">
                <button class="g w j kk" type="submit" aria-label="Search">
                    <svg class="oo sl ub du gq kj ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                    </svg>
                </button>
            </form>

            <!-- Create schedule button -->
            <button class="btn ho xi ye" wire:click="showCreateModal">
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden trm nq">Create Schedule</span>
            </button>
        </div>

    </div>

    <!-- More actions -->
    <div class="je jd jc ii">

        <!-- Left side -->
        <div class="ri _y">
            <button class="btn bg-white border-slate-200 hover--border-slate-300 yl xy" wire:click="export">Download Excel</button>
        </div>

        <!-- Right side -->
        <div class="sn am jo az jp ft">
            <!-- Dropdown -->
            <div class="relative absolute2 " x-data="{ open: false, selected: {{ $selectedClub }} }">
                <button class="btn fe uo bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600" aria-label="Select date range" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                    <div class="flex items-center">

                        <div class="mr-2">
                            @if ($selectedClub > 0)
                            <img src="{{ asset('storage/'.$teams[$selectedClub-1]['logo']) }}" class="w-6 rounded" alt="foto" />
                            @endif
                        </div>
                        <span x-text="selected === 0 ? $refs.options.children[selected].children[1].innerHTML : $refs.options.children[selected].children[2].innerHTML">Last Month</span>
                    </div>
                    <svg class="ub nz du gq" width="11" height="7" viewBox="0 0 11 7">
                        <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                    </svg>
                </button>
                <div class="tx g z q z-80 ou visible bg-white border border-slate-200 va w-40 rounded bd la re absolute" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa ws au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa ws" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" style="display: none;">
                    <div class="gp text-sm g_" x-ref="options">
                        <div tabindex="0" class="flex items-center  ou xr vf vn al" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>

                            <span>Select Club</span>

                        </div>
                        @foreach ($clubs as $club)
                        @if ($club->id != $currentClubId)
                        <div tabindex="0" class="flex items-center  ou xr vf vn al" :class="selected === {{ $club->id }} &amp;&amp; 'text-indigo-500'" @click="selected = {{ $club->id }};open = false; $wire.selectedClub= {{ $club->id }}" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== {{ $club->id }} &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            @if ($club->logo)
                            <div class="mr-2">
                                <img src="{{ asset('storage/'.$club->logo) }}" class="w-6 rounded" alt="foto" />
                            </div>
                            @endif
                            <span>{{ $club->name }}</span>
                        </div>
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- Delete button -->
            <div class="table-items-action hidden">
                <div class="flex items-center">
                    <div class="hidden tnh text-sm gm mr-2 lm"><span class="table-items-count"></span> items selected</div>
                    <button class="btn bg-white border-slate-200 hover--border-slate-300 yl xy">Delete</button>
                </div>
            </div>

            <!-- Filter button -->
            <select wire:model="perSeason" class="a">
                @foreach ($seasonOption as $sea)
                <option value="{{ $sea }}">{{ $sea }}</option>
                @endforeach
            </select>

        </div>

    </div>

    <!-- Table -->
    <div class="bg-white bd rounded-sm border border-slate-200 rc">
        <header class="vc vu">
            <h2 class="gh text-slate-800">Schedules <span class="gq gp"></span></h2>
        </header>
        <div x-data="handleSelect">

            <!-- Table -->
            <div class="lf">
                <table class="ux ou">
                    <!-- Table header -->
                    <thead class="go gh gv text-slate-500 hp co cs border-slate-200">
                        <tr>
                            <th class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select all</span>
                                        <input id="parent-checkbox" class="i" type="checkbox" @click="toggleAll">
                                    </label>
                                </div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Date</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Time</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Opposition</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Venue</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Competition</div>
                            </th>

                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Status</div>
                            </th>

                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Actions</div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm le lr">
                        <!-- Row -->
                        @if ($dates->count() > 0)
                        @foreach ($dates as $date => $schedules)
                        <tr>
                            <td class="vi wy w_ vo lm" colspan="8">{{ $date }}</td>
                        </tr>
                        @if ($schedules->count() > 0)
                        @foreach ($schedules as $schedule)
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div>{{ $schedule->fixture_match }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div>{{ $schedule->hour }} : {{ $schedule->minute }}</div>
                            </td>

                            <td class="vi wy w_ vo lm">
                                @if ($schedule->home_team != $currentClubId)
                                <div class="flex flex-row items-center space-x-2">
                                    @if ($schedule->home->logo)
                                    <div class="">
                                        <img src="{{ asset('storage/'.$schedule->home->logo) }}" class="w-6 rounded" alt="foto" />
                                    </div>
                                    @endif
                                    <span class="text-xs">{{ $schedule->home->name }}</span>
                                </div>

                                @else
                                <div class="flex flex-row items-center space-x-2">
                                    @if ($schedule->away->logo)
                                    <div class="">
                                        <img src="{{ asset('storage/'.$schedule->away->logo) }}" class="w-6 rounded" alt="foto" />
                                    </div>
                                    @endif
                                    <span class="text-xs">{{ $schedule->away->name }}</span>
                                </div>
                                @endif
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp text-slate-800">
                                    @if ($schedule->home_team != $currentClubId)
                                    A
                                    @else
                                    H
                                    @endif
                                </div>
                            </td>

                            <td class="vi wy w_ vo lm">
                                <div class="gp text-slate-800">{{ $schedule->competition->name }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                @if ($schedule->status === 'inactive')
                                <div class="inline-flex gp hf yl rounded-full gn vp vd">{{ $schedule->status }}</div>
                                @endif

                                @if ($schedule->status === 'active')
                                <div class="inline-flex gp hc ys rounded-full gn vp vd">{{ $schedule->status }}</div>
                                @endif
                            </td>

                            <td class="vi wy w_ vo lm of">
                                <div class="fm">
                                    <button class="gq xv rounded-full" wire:click="showEditModal({{ $schedule->id }})">
                                        <span class=" d">Edit</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                        </svg>
                                    </button>

                                    <button class="yl xy rounded-full" wire:click="deleteId({{ $schedule->id }})">
                                        <span class=" d">Delete</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                            <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td class="vi wy w_ vo lm" colspan="8">No records found</td>
                        </tr>
                        @endif
                        @endforeach
                        @else
                        <tr>
                            <td class="vi wy w_ vo lm" colspan="8">No records found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    {{--
     {{ $schedules->links() }}
    --}}

    <x-dialog-modal wire:model="showScheduleModal" class="visible">

        @if ($scheduleId)
        <x-slot name="title" class="border-b">Update Schedule</x-slot>
        @else
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Create Schedule</span>
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
                                                <label for="competitionId" class="block text-sm font-medium text-gray-700">Competition</label>
                                                <select wire:model="competitionId" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                    <option value="">Select Option</option>
                                                    @foreach($competitions as $comp)
                                                    <option value="{{ $comp->id }}">{{ $comp->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-span-1 sm:col-span-3">
                                                <label for="season" class="block text-sm font-medium text-gray-700">Season</label>
                                                <select wire:model="season" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                    <option value="">Select Option</option>
                                                    @foreach($seasonOption as $season)
                                                    <option value="{{ $season }}">{{ $season }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Fixture Date {{ $fixtureDate }}
                                                </label>
                                                <x-flatpicker wire:model="fixtureDate"></x-flatpicker>
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Hour
                                                </label>
                                                <div class="">
                                                    <div class="flex items-center space-x-1">
                                                        <select wire:model="hour" class="bg-transparent text-xl appearance-none outline-none">
                                                            @foreach($hourOption as $h)
                                                            <option value="{{ $h }}">{{ $h }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="text-xl">:</span>
                                                        <select wire:model="minute" class="bg-transparent text-xl appearance-none outline-none">
                                                            @foreach($minuteOption as $m)
                                                            <option value="{{ $m }}">{{ $m }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex justify-between">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="stadionId" class="block text-sm font-medium text-gray-700">Stadion</label>
                                                <select wire:model="stadionId" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                    <option value="">Select Option</option>
                                                    @foreach($stadions as $stad)
                                                    <option value="{{ $stad->id }}">{{ $stad->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-span-1 sm:col-span-3">
                                                <label for="position" class="block text-sm font-medium text-gray-700">Venue</label>
                                                <select wire:model="position" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                    <option value="">Select Option</option>
                                                    @foreach($positionOption as $pos)
                                                    <option value="{{ $pos }}">{{ $pos }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="flex justify-between">

                                            <div class="col-span-1 sm:col-span-3">
                                                <label for="opponent" class="block text-sm font-medium text-gray-700">Opponent {{ $selectedClub }}</label>

                                                <!-- Dropdown -->
                                                <div class="relative absolute2 " x-data="{ open: false, selected: {{ $selectedClub }} }">
                                                    <button class="btn fe uo bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600" aria-label="Select date range" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                                                        <div class="flex items-center">

                                                            <div class="mr-2">
                                                                @if ($selectedClub > 0)
                                                                <img src="{{ asset('storage/'.$teams[$selectedClub-1]['logo']) }}" class="w-6 rounded" alt="foto" />
                                                                @endif
                                                            </div>
                                                            <span x-text="selected === 0 ? $refs.options.children[selected].children[1].innerHTML : $refs.options.children[selected].children[2].innerHTML">Last Month</span>
                                                        </div>
                                                        <svg class="ub nz du gq" width="11" height="7" viewBox="0 0 11 7">
                                                            <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                    <div class="tx g z q z-80 ou visible bg-white border border-slate-200 va w-40 rounded bd la re absolute" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa ws au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa ws" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" style="display: none;">
                                                        <div class="gp text-sm g_" x-ref="options">
                                                            <div tabindex="0" class="flex items-center  ou xr vf vn al" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                                                                <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                                                </svg>

                                                                <span>Select Club</span>

                                                            </div>
                                                            @foreach ($clubs as $club)
                                                            @if ($club->id != $currentClubId)
                                                            <div tabindex="0" class="flex items-center  ou xr vf vn al" :class="selected === {{ $club->id }} &amp;&amp; 'text-indigo-500'" @click="selected = {{ $club->id }};open = false; $wire.selectedClub= {{ $club->id }}" @focus="open = true" @focusout="open = false">
                                                                <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== {{ $club->id }} &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                                                </svg>
                                                                @if ($club->logo)
                                                                <div class="mr-2">
                                                                    <img src="{{ asset('storage/'.$club->logo) }}" class="w-6 rounded" alt="foto" />
                                                                </div>
                                                                @endif
                                                                <span>{{ $club->name }}</span>
                                                            </div>
                                                            @endif
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-1 sm:col-span-3">
                                                <label for="first-name" class="block text-sm font-medium text-gray-700">Status</label>
                                                <select wire:model="scheduleStatus" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                    <option value="">Select Option</option>
                                                    @foreach($statuses as $status)
                                                    <option value="{{ $status }}">{{ $status }}</option>
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
                    <x-button wire:click="closeScheduleModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-button>
                    @if ($scheduleId)
                    <x-button wire:click="updateSchedule" class=" ho xi ye">Update</x-button>
                    @else
                    <x-button wire:click="createSchedule" class=" ho xi ye2">Create</x-button>
                    @endif
                </div>
            </div>

        </x-slot>
    </x-dialog-modal>

    <!-- modal delete confirmation -->
    <x-dialog-modal wire:model="showConfirmModal" class="">


        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Delete Confirm</span>
        </x-slot>


        <x-slot name="content">
            <div class="border-t">
                <div class="vc vu ">
                    <div class="fw">


                        <div class="">
                            <div class="">
                                <div class="flex flex-col space-y-3">
                                    <div class="flex max-w-auto text-center justify-center items-center">
                                        <div class="text-lg font-semibold ">
                                            <p>Are you sure want to delete?</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="border-slate-200">
                <div class="flex flex-wrap justify-end fc">
                    <x-button wire:click="closeConfirmModal" class="border-slate-200 hover:text-white  g_">Cancel</x-button>
                    <x-button wire:click.prevent="delete()" class=" ho xi ye2">Delete</x-button>
                </div>
            </div>

        </x-slot>
    </x-dialog-modal>

</div>