<div class="vs jj ttm vl ou uf na">

<!-- Loading -->
<x-loading-indicator />

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Person ✨</h1>
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

            <!-- Create person button -->
            <button class="btn ho xi ye" wire:click="showCreateModal">
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden trm nq">Create Person</span>
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
                <option value="5">5 Per Page</option>
                <option value="10">10 Per Page</option>
                <option value="15">15 Per Page</option>
            </select>
        </div>

    </div>

    <!-- Table -->
    <div class="bg-white bd rounded-sm border border-slate-200 rc">
        <header class="vc vu">
            <h2 class="gh text-slate-800">Persons <span class="gq gp"></span></h2>
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
                                <div class="gh gt">Birth</div>
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
                                <div class="gp cursor-pointer text-indigo-400 hover:text-indigo-500" wire:click="showDetailModal(1)">Kim Jisoo</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="od sy ub mr-2 _b">
                                    <img class="rounded-full" src="{{ asset('images/user-40-11.jpg') }}" width="40" height="40" alt="User 01">
                                </div>
                                <!-- <div class="gp ">-</div> -->
                            </td>
                           
                            <td class="vi wy w_ vo lm">
                                <div class="gt ">13 June 1983</div>
                            </td>

                            <td class="vi wy w_ vo lm">
                                <div class="gt ">korea</div>
                            </td>

                            <td class="vi wy w_ vo lm">
                                <div class="inline-flex gp hf yl rounded-full gn vp vd">Overdue</div>
                            </td>

                            <td class="vi wy w_ vo lm">
                                <div>22/07/2021</div>
                            </td>

                            <td class="vi wy w_ vo lm of">
                                <div class="fm">
                                    <button class="gq xv rounded-full">
                                        <span class="d">Edit</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                        </svg>
                                    </button>

                                    <button class="yl xy rounded-full">
                                        <span class="d">Delete</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                            <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @if ($persons->count() > 0)
                        @foreach ($persons as $person)
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
                                <div class="gp text-slate-800 capitalize">{{ $person->name }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="od sy ub mr-2 _b">
                                    @if ($person->personImages->first())
                                    <img src="{{ asset('storage/'.$person->personImages->first()->small) }}" class="rounded-full" width="40" height="40" alt="{{ $person->name }}">
                                    @else
                                    <img src="{{ asset('images/avatar-03.jpg') }}" class="rounded-full" width="40" height="40" alt="{{ $person->name }}">
                                    @endif
                                </div>
                            </td>

                            <td class="vi wy w_ vo lm">
                                <div class="gt">{{ \Carbon\Carbon::parse($person->birth_date)->format('j F Y') }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">{{ $person->nationality }}</div>
                            </td>

                            <td class="vi wy w_ vo lm">
                                @if ($person->status === 'inactive')
                                <div class="inline-flex gp hf yl rounded-full gn vp vd">{{ $person->status }}</div>
                                @endif

                                @if ($person->status === 'active')
                                <div class="inline-flex gp hc ys rounded-full gn vp vd">{{ $person->status }}</div>
                                @endif
                            </td>

                            <td class="vi wy w_ vo lm">
                                <div>{{ $person->created_at->format('d-m-Y') }}</div>
                            </td>

                            <td class="vi wy w_ vo lm of">
                                <div class="fm">
                                    <button class="gq xv rounded-full" wire:click="showEditModal({{ $person->id }})">
                                        <span class=" d">Edit</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                        </svg>
                                    </button>

                                    <button class="yl xy rounded-full" wire:click="deleteId({{ $person->id }})">
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

    {{ $persons->links() }}

    <x-dialog-modal wire:model="showPersonModal" class="">

        @if ($personId)
        <x-slot name="title" class="border-b">Update Person</x-slot>
        @else
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Create Person</span>
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
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                Person Name
                                            </label>
                                            <input wire:model="name" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                       
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
                                            <textarea wire:model="bio" id="bio" cols="50" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $bio }}</textarea>
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
                                                        <option value="{{ $country }}">{{ $country }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                                                <input wire:model="role" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
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
                                            <label for="photo" class="block text-sm font-medium text-gray-700">
                                                Person photo</label>
                                            <input wire:model="files" type="file" multiple autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            @if ($oldImage)
                                            
                                                <img src="{{ asset('storage/'.$oldImage) }}">
                                               
                                            @endif
                                            @if ($file)
                                            Photo Preview:
                                            <img src="{{ $file->temporaryUrl() }}">
                                            @endif
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="personStatus" class="block text-sm font-medium text-gray-700">Status</label>
                                            <select wire:model="personStatus" class="h-full rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                <option value="">Select Option</option>
                                                @foreach($statuses as $status)
                                                <option value="{{ $status }}">{{ $status }}</option>
                                                @endforeach
                                            </select>
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
                    <x-button wire:click="closePersonModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-button>
                    @if ($personId)
                    <x-button wire:click="updatePerson" class=" ho xi ye">Update</x-button>
                    @else
                    <x-button wire:click="createPerson" class=" ho xi ye2">Create</x-button>
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

<!-- modal detail -->
<x-dialog-modal wire:model="showPersonDetailModal" class="">
    <x-slot name="title" class="border-b bg-slate-200">
        <span class="font-semibold">Detail Person</span>
    </x-slot>
    <x-slot name="content">
        <div class="border-t">
            <div class="vc vu ">
                <div class="fw">

                    <div class="je items-center2 vh">
                        <div class="flex flex-col space-x-2">
                            <a class="block ri _y rp zn tnv ub" href="#0">
                                <img class="rounded-sm" src="{{ asset('images/Jisoo.jpg') }}" width="200" height="142" alt="Product 01">
                            </a>
                        </div>
                        <div class="uw">
                            <a href="#0">
                                <h3 class="text-2xl gh text-slate-800 rt font-bold">Kim Jisoo</h3>
                            </a>
                            <div class="flex flex-wrap">
                                <!-- Unique Visitors -->
                                <div class="flex items-center vr">
                                    <div class="rp">
                                        <div class="flex items-center">
                                            <div class="text-xl font-bold text-slate-800 mr-2">Female</div>
                                        </div>
                                        <div class="text-sm text-slate-500">Gender</div>
                                    </div>
                                    <div class="hidden qx of sf hu rp" aria-hidden="true"></div>
                                </div>
                                <!-- Total Pageviews -->
                                <div class="flex items-center vr">
                                    <div class="rp">
                                        <div class="flex items-center">
                                            <div class="text-xl font-bold text-slate-800 mr-2">South Korea</div>
                                        </div>
                                        <div class="text-sm text-slate-500">Nationality</div>
                                    </div>
                                    <div class="hidden qx of sf hu rp" aria-hidden="true"></div>
                                </div>

                                <!-- Visit Duration-->
                                <div class="flex items-center">
                                    <div>
                                        <div class="flex items-center">
                                            <div class="text-xl font-bold text-slate-800 mr-2">21</div>
                                        </div>
                                        <div class="text-sm text-slate-500">Year</div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between py-4">
                                <div>
                                    <div class="flex text-sm text-slate-700 space-x-1">
                                        <div class="capitalize">birth date :</div>
                                        <div class="">1994-10-10</div>
                                    </div>
                                    <div class="flex text-sm text-slate-700 space-x-1">
                                        <div class="capitalize">b. location :</div>
                                        <div class="">Gwangju, South Korea</div>
                                    </div>
                                    <div class="flex text-sm text-slate-700 space-x-1">
                                        <div class="capitalize">website :</div>
                                        <div class=""></div>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-between ">
                                    <div class="flex text-sm text-slate-700 space-x-1">
                                        <div class="">Facebook :</div>
                                        <div class="">@jisoo</div>
                                    </div>
                                    <div class="flex text-sm text-slate-700 space-x-1">
                                        <div class="">Instagram :</div>
                                        <div class="">@jisoo</div>
                                    </div>
                                    <div class="flex text-sm text-slate-700 space-x-1">
                                        <div class="">Twitter :</div>
                                        <div class="">@jisoo</div>
                                    </div>
                                </div>
                                
                            </div>
                                
                                <div class="text-sm ru">
                                    Kim Ji Soo is a South Korean actress, model, singer, and member of the girl group BLACKPINK.
                                    <br />
                                    <br />
                                    Prior to her debut, she appeared in numerous commercial films, in particular, Samsonite RED with actor Lee Min Ho and Smart Uniform and LG Stylus 2 with YG Entertainment's boy group iKON. She was also featured in her label-mates' music videos, such as Epik High's "Spoiler + Happen Ending" and Hi Suhyun's "I'm Different".
                                    <br />
                                    <br />
                                    In 2015, she had her first drama appearance on KBS's The Producers as a guest. She debuted under YG Entertainment in the four-member girl group BLACKPINK on August 8th, 2016, with the mini album "Square One", which includes the hit songs "WHISTLE" and "BOOMBAYAH".
                                    <br />
                                    <br />
                                    On August 18, 2020, it was announced that she would be playing her first lead role in the 2021 JTBC series, "Snowdrop". In March 2021, it was announced that she became a global ambassador for Dior fashion and beauty. Diors' creative director stated that Dior's Autumn/Winter 2021 collection was inspired by Kim. One of the 10 shades of Dior Addict Lip Glow lip balm, #025 Seoul Scarlet, is also inspired by her.
                                </div>
                                <!-- Product meta -->
                                <div class="flex flex-wrap fe items-center">
                                    <!-- Rating and price -->
                                    <div class="flex flex-wrap items-center fc mr-2">
                                        <!-- Rating -->
                                        <div class="flex items-center fc">
                                            <!-- Stars -->
                                            <div class="flex fm">
                                                <button>
                                                    <span class="d">1 star</span>
                                                    <svg class="oo sl du yn" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                </button>
                                                <button>
                                                    <span class="d">2 stars</span>
                                                    <svg class="oo sl du yn" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                </button>
                                                <button>
                                                    <span class="d">3 stars</span>
                                                    <svg class="oo sl du yn" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                </button>
                                                <button>
                                                    <span class="d">4 stars</span>
                                                    <svg class="oo sl du yn" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                </button>
                                                <button>
                                                    <span class="d">5 stars</span>
                                                    <svg class="oo sl du yf" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <!-- Rate -->
                                            <div class="inline-flex text-sm gp ya">4.2</div>
                                        </div>
                                        <div class="gq">·</div>
                                        <!-- Price -->

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
                <x-button wire:click="closeDetailModal" class="border-slate-200 hover:text-white  g_">Cancel</x-button>
            </div>
        </div>

    </x-slot>
</x-dialog-modal>



@push('js')
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#bio'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('bio', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
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