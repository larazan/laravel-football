<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Squad ✨</h1>
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
                <option value="20">20 Per Page</option>
                <option value="30">30 Per Page</option>
                <option value="40">40 Per Page</option>
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
                                <div class="gh gt">Image</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Name</div>
                            </th>
                            
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Role</div>
                            </th>
                            
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Nation</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Age</div>
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
                                <div class="od sy ub mr-2 _b">
                                    @if ($player->small)
                                    <img src="{{ asset('storage/'.$player->small) }}" class="rounded-full" width="40" height="40" alt="{{ $player->name }}">
                                    @else
                                    <img src="{{ asset('images/generic-male-avatar-300x284.jpg') }}" class="rounded-full" width="40" height="40" alt="{{ $player->name }}">
                                    @endif
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp text-slate-800 capitalize cursor-pointer hover:underline" wire:click="showDetailModal({{$player->id}})">{{ $player->name }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">

                                <div class="gt">{{ $player->position->name }}</div>

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
                                @if ($player->birth_date > 0)
                                <div class="gt">{{ \Carbon\Carbon::parse($player->birth_date)->age }} years</div>
                                @else
                                    -
                                @endif
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
                                    <!-- Total Pageviews -->
                                    <div class="flex items-center vr">
                                        <div class="rp">
                                            <div class="flex items-center">
                                                <div class="text-xl font-bold text-slate-800 mr-2">{{ $age }}</div>
                                            </div>
                                            <div class="text-sm text-slate-500">Age</div>
                                        </div>
                                        <div class="hidden qx of sf hu rp" aria-hidden="true"></div>
                                    </div>

                                    <!-- Visit Duration-->
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