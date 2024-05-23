

<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Player</h1>
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


            <!-- Create player button -->
            <button class="btn ho xi ye" wire:click="showCreateModal">
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden trm nq">Create Player</span>
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

            <!-- Delete button -->
            <div class="table-items-action hidden">
                <div class="flex items-center">
                    <div class="hidden tnh text-sm gm mr-2 lm"><span class="table-items-count"></span> items selected</div>
                    <button class="btn bg-white border-slate-200 hover--border-slate-300 yl xy">Delete</button>
                </div>
            </div>

            <!-- Dropdown -->
            <div class="y" x-data="{ open: false, selected: 2 }">
                <!-- <button class="btn fe un bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600" aria-label="Select date range" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                    <span class="flex items-center">
                        <svg class="oo sl du text-slate-500 ub mr-2" viewBox="0 0 16 16">
                            <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                        </svg>
                        <span x-text="$refs.options.children[selected].children[1].innerHTML">Last Month</span>
                    </span>
                    <svg class="ub nz du gq" width="11" height="7" viewBox="0 0 11 7">
                        <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                    </svg>
                </button> -->
                <div class="tk g z q ou bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa ws au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa ws" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" style="display: none;">
                    <div class="gp text-sm g_" x-ref="options">
                        <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            <span>Today</span>
                        </button>

                        <button tabindex="0" class="flex items-center ou xr vf vn al text-indigo-500" :class="selected === 2 &amp;&amp; 'text-indigo-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            <span>Last Month</span>
                        </button>

                    </div>
                </div>
            </div>



            <!-- Filter button -->
            <select wire:model="sort" id="sort" class="a">
                <option value="asc">Asc</option>
                <option value="desc">Desc</option>
            </select>

            <select wire:model="perPage" id="filter" class="a">
                <option value="40">40 Per Page</option>
                <option value="50">50 Per Page</option>
                <option value="60">60 Per Page</option>
            </select>
        </div>

    </div>

    <!-- Table -->
    <div class="bg-white bd rounded-sm border border-slate-200 rc">
        <header class="vc vu">
            <h2 class="gh text-slate-800">Players <span class="gq gp"></span></h2>
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
                                <div class="gh gt">Name</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Image</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Role</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Club</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Nation</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Status</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Date</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Actions</div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm le lr">
                        <!-- Row -->

                        @if ($players->count() > 0)
                        @foreach ($players as $player)
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
                                <div class="gh text-indigo-400 capitalize cursor-pointer hover:underline" wire:click="showDetailModal({{$player->id}})">{{ $player->name }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="od sy ub mr-2 _b">
                                    @if ($player->small)
                                    <img src="{{ asset('storage/'.$player->small) }}" class="rounded-full" width="40" height="40" alt="{{ $player->name }}">
                                    @else
                                    <img src="{{ asset('images/generic-male-avatar-300x284.jpg') }}" class="rounded-full" width="40" height="40" alt="{{ $player->name }}">
                                    @endif
                                </div>
                            </td>

                            <td class="vi wy w_ vo lm">

                                <div class="gt">{{ $player->position->name }}</div>

                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex flex-row items-center space-x-2">
                                    @if ($player->club->logo)
                                    <div class="">
                                        <img src="{{ asset('storage/'.$player->club->logo) }}" class="w-6 rounded" alt="foto" />
                                    </div>
                                    @endif
                                    <span class="text-xs">{{ $player->club->name }}</span>
                                </div>

                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex flex-row items-center space-x-2">
                                    @if ($player->country_id)
                                    <img src="{{ asset('vendor/blade-flags/country-'.$player->country->code.'.svg') }}" class="w-6 rounded" alt="foto" />
                                    <div class="gt">{{ $player->country->code }}</div>
                                    @endif
                                </div>
                            </td>

                            <td class="vi wy w_ vo lm">
                                @if ($player->status === 'inactive')
                                <div class="inline-flex gp hf yl rounded-full gn vp vd">{{ $player->status }}</div>
                                @endif

                                @if ($player->status === 'active')
                                <div class="inline-flex gp hc ys rounded-full gn vp vd">{{ $player->status }}</div>
                                @endif
                            </td>

                            <td class="vi wy w_ vo lm">
                                <div>{{ $player->created_at->format('d-m-Y') }}</div>
                            </td>

                            <td class="vi wy w_ vo lm of">
                                <div class="fm">
                                    <button class="gq xv rounded-full" wire:click="showEditModal({{ $player->id }})">
                                        <span class=" d">Edit</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                        </svg>
                                    </button>

                                    <button class="yl xy rounded-full" wire:click="deleteId({{ $player->id }})">
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
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    {{ $players->links() }}

    <x-dialog-modal wire:model="showPlayerModal" class="">

        @if ($playerId)
        <x-slot name="title" class="border-b">Update Player</x-slot>
        @else
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Create Player</span>
        </x-slot>
        @endif

        <x-slot name="content">
            <div class="border-t">
                <div class="vc vu ">
                    <div class="fw">

                        <form>
                            <div class="my-3 md:mt-0 md:col-span-2" x-data="{tab: 0}">
                                <div class="mb-5 flex border border-black overflow-hidden">
                                    <button class="px-4 py-2 w-full font-bold" :class="{ 'active bg-gray-800 text-white': tab === 0 }" x-on:click.prevent="tab = 0">Detail</button>
                                    <button class="px-4 py-2 w-full font-bold" :class="{ 'active bg-gray-800 text-white': tab === 1 }" x-on:click.prevent="tab = 1">Bio</button>
                                    <button class="px-4 py-2 w-full font-bold" :class="{ 'active bg-gray-800 text-white': tab === 2 }" x-on:click.prevent="tab = 2">Image</button>
                                </div>
                                <div>
                                    <div class="mt-6 flex flex-col space-y-3" x-show="tab === 0">
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                Player Name
                                            </label>
                                            <input wire:model="name" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="club" class="block text-sm font-medium text-gray-700">Club</label>

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
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end dropdown -->
                                        </div>
                                        <div class="flex flex-row justify-between">

                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                                                <select wire:model="position" class=" rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                    <option value="">Select Option</option>
                                                    @foreach($positionOption as $pos)
                                                    <option value="{{ $pos->id }}">{{ $pos->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="shirtNumber" class="block text-sm font-medium text-gray-700">
                                                    Shirt Number
                                                </label>
                                                <input wire:model="shirtNumber" type="text" id="numbers-only" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>

                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Nationality
                                                </label>
                                                <div x-init="select2Alpine">
                                                    <select wire:model="nationality" x-ref="select" class="form-control" id="select2-dropdown">
                                                        <option value="">Select Option</option>
                                                        @foreach($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
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


                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="playerStatus" class="block text-sm font-medium text-gray-700">Status</label>
                                            <select wire:model="playerStatus" class=" rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                <option value="">Select Option</option>
                                                @foreach($statuses as $status)
                                                <option value="{{ $status }}">{{ $status }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-6 flex flex-col space-y-3" x-show="tab === 1">
                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Birth Date
                                                </label>

                                                <x-flatpicker wire:model="birthDate"></x-flatpicker>
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Birth Location
                                                </label>
                                                <input wire:model="birthLocation" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>
                                        <div wire:ignore class="col-start-1 sm:col-span-3">
                                            <label for="bio" class="block text-sm font-medium text-gray-700">
                                                Bio
                                            </label>
                                            <!-- <textarea wire:model="bio" id="bio" cols="50" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $bio }}</textarea> -->
                                            <div class="body-content" wire:ignore>
                                                <trix-editor class="trix-content" x-ref="trix" wire:model.debounce.500ms="content" wire:key="trix-content-unique-key"></trix-editor>
                                            </div>
                                        </div>
                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="height" class="block text-sm font-medium text-gray-700">
                                                    Height
                                                </label>
                                                <input wire:model="height" type="text" onkeypress="return onlyNumberKey(event)" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="weight" class="block text-sm font-medium text-gray-700">
                                                    Weight
                                                </label>
                                                <input wire:model="weight" type="text" onkeypress="return onlyNumberKey(event)" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>
                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Facebook
                                                </label>
                                                <input wire:model="facebook" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Instagram
                                                </label>
                                                <input wire:model="instagram" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Twitter
                                                </label>
                                                <input wire:model="twitter" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-6 flex flex-col space-y-3" x-show="tab === 2">
                                        <div class="col-span-6 sm:col-span-3" x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <label for="photo" class="block text-sm font-medium text-gray-700">
                                                Player photo ({{ $sizeTol }})</label>
                                            <input wire:model="file" type="file" autocomplete="given-name" class="
                                                    mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                    file:bg-gradient-to-b file:from-blue-500 file:to-blue-600 
                                                    file:px-6 file:py-3 file:m-5
                                                    file:border-none
                                                    file:rounded
                                                    file:text-white
                                                    file:cursor-pointer
                                                    file:shadow-lg file:shadow-blue-600/50" />
                                            <div x-show.transition="isUploading" class="mt-3 w-full bg-slate-100 mb-6">
                                                <div class="ho ye2 rounded text-xs font-medium py-[1px] text-center" x-bind:style="`width: ${progress}%`">%</div>
                                            </div>
                                            @if ($oldImage)
                                            Photo Preview:
                                            <img src="{{ asset('storage/'.$oldImage) }}">
                                            @endif
                                            @if ($file)
                                            Photo Preview:
                                            <img src="{{ $file->temporaryUrl() }}">
                                            @endif
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
                    <x-button wire:click="closePlayerModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-button>
                    @if ($playerId)
                    <x-button wire:click="updatePlayer" class=" ho xi ye">Update</x-button>
                    @else
                    <x-button wire:click="createPlayer" class=" ho xi ye2">Create</x-button>
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

    <!-- modal detail -->
    <x-dialog-modal wire:model="showPlayerDetailModal" class="">
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Detail Player</span>
        </x-slot>
        <x-slot name="content">
            <div class="border-t">
                <div class="vc vu ">
                    <div class="fw">
                        <div class="je items-center2 vh">
                            <div class="flex flex-col space-x-2">
                                <div class="block ri _y rp zn tnv ub" href="#0">
                                    @if ($oldImage)
                                    <img src="{{ asset('storage/'.$oldImage) }}">
                                    @else
                                    <img class="rounded-sm" src="{{ asset('images/generic-male-avatar-300x284.jpg') }}" width="200" height="142" alt="Player 01">
                                    @endif
                                </div>
                            </div>
                            <div class="uw">
                                <a href="#0">
                                    <h3 class="text-2xl gh text-slate-800 rt font-bold">{{ $name }}</h3>
                                </a>
                                <div class="flex flex-wrap">
                                    <!-- Unique Visitors -->
                                    <div class="flex items-center vr">
                                        <div class="rp">
                                            <div class="flex items-center">
                                                <div class="text-xl font-bold text-slate-800 mr-2">{{ $position }}</div>
                                            </div>
                                            <div class="text-sm text-slate-500">Role</div>
                                        </div>
                                        <div class="hidden qx of sf hu rp" aria-hidden="true"></div>
                                    </div>
                                    <!-- age -->
                                    <div class="flex items-center vr">
                                        <div class="rp">
                                            <div class="flex items-center">
                                                <div class="text-xl font-bold text-slate-800 mr-2">{{ $age }}</div>
                                            </div>
                                            <div class="text-sm text-slate-500">Age</div>
                                        </div>
                                        <div class="hidden qx of sf hu rp" aria-hidden="true"></div>
                                    </div>

                                    <!-- number-->
                                    <div class="flex items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="text-xl font-bold text-slate-800 mr-2">{{ $shirtNumber }}</div>
                                            </div>
                                            <div class="text-sm text-slate-500">Number</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex w-full justify-between py-4">
                                    <div class="w-1/2">
                                        <div class="w-full flex text-sm text-slate-700 ">
                                            <div class="w-1/2 capitalize">birth date :</div>
                                            <div class="w-1/2">{{ $birthDate }}</div>
                                        </div>
                                        <div class="flex text-sm text-slate-700">
                                            <div class="w-1/2 capitalize">place birth :</div>
                                            <div class="w-1/2">{{ $birthLocation }}</div>
                                        </div>
                                        <div class="flex text-sm text-slate-700">
                                            <div class="w-1/2 capitalize">nationality :</div>
                                            <div class="w-1/2">
                                                <div class="flex flex-row items-center space-x-2">
                                                    @if ($nationality)
                                                    <img src="{{ asset('vendor/blade-flags/country-'.$code.'.svg') }}" class="w-6 rounded" alt="foto" />
                                                    <div class="gt">{{ $code }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 flex flex-col ">
                                        <div class="flex text-sm text-slate-700">
                                            <div class="w-1/2 ">Facebook :</div>
                                            <div class="w-1/2 ">{{ $facebook }}</div>
                                        </div>
                                        <div class="flex text-sm text-slate-700">
                                            <div class="w-1/2 ">Instagram :</div>
                                            <div class="w-1/2 ">{{ $instagram }}</div>
                                        </div>
                                        <div class="flex text-sm text-slate-700">
                                            <div class="w-1/2 ">Twitter :</div>
                                            <div class="w-1/2 ">{{ $twitter }}</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="text-sm ru">
                                    {{ $bio }}
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
                    <x-button wire:click="closeDetailModal" class="border-slate-200 hover:text-white  g_">Close</x-button>
                </div>
            </div>
        </x-slot>
    </x-dialog-modal>

</div>





@push('js')
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script>
    // ClassicEditor
    //     .create(document.querySelector('#bio'))
    //     .then(editor => {
    //         editor.model.document.on('change:data', () => {
    //             @this.set('bio', editor.getData());
    //         })
    //     })
    //     .catch(error => {
    //         console.error(error);
    //     });
</script>
<script>
    function select2Alpine() {
        this.select2 = $(this.$refs.select).select2();
        this.select2.on("select2:select", (event) => {
            this.selectedCity = event.target.value;
        });
        this.$watch("selectedCity", (value) => {
            this.select2.val(value).trigger("change");
        });
    }
</script>
@endpush