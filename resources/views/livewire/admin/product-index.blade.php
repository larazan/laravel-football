

<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Product</h1>
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

            <!-- Create product button -->
            <button class="btn ho xi ye" wire:click="showCreateModal">
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden trm nq">Create Product</span>
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
            <!-- <div class="y" x-data="{ open: false, selected: 2 }">
                <button class="btn fe un bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600" aria-label="Select date range" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                    <span class="flex items-center">
                        <svg class="oo sl du text-slate-500 ub mr-2" viewBox="0 0 16 16">
                            <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                        </svg>
                        <span x-text="$refs.options.children[selected].children[1].innerHTML">Last Month</span>
                    </span>
                    <svg class="ub nz du gq" width="11" height="7" viewBox="0 0 11 7">
                        <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                    </svg>
                </button>
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
            </div> -->

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
            <h2 class="gh text-slate-800">Products <span class="gq gp"></span></h2>
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
                                <div class="gh gt">SKU</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Type</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Name</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Image</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Price</div>
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


                        @if ($products->count() > 0)
                        @foreach ($products as $product)
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
                                <div class="gt">{{ $product->sku }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">{{ $product->type }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp cursor-pointer text-indigo-400 hover:text-indigo-500" wire:click="showDetailModal({{ $product->id }})">{{ $product->name }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="od sy ub mr-2 _b">
                                    @if ($product->productImages->first())
                                    <img src="{{ asset('storage/'.$product->productImages->first()->small) }}" class="rounded-full" width="40" height="40" alt="{{ $person->name }}">
                                    @else
                                    <img src="{{ asset('images/avatar-03.jpg') }}" class="rounded-full" width="40" height="40" alt="{{ $person->name }}">
                                    @endif
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">{{ $product->price }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                @if ($product->status === 'inactive')
                                <div class="inline-flex gp hf yl rounded-full gn vp vd">{{ $product->status }}</div>
                                @endif

                                @if ($product->status === 'active')
                                <div class="inline-flex gp hc ys rounded-full gn vp vd">{{ $product->status }}</div>
                                @endif
                            </td>

                            <td class="vi wy w_ vo lm">
                                <div>{{ $product->created_at->format('d-m-Y') }}</div>
                            </td>

                            <td class="vi wy w_ vo lm of">
                                <div class="fm">
                                    <button class="gq xv rounded-full" wire:click="showEditModal({{ $product->id }})">
                                        <span class=" d">Edit</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                        </svg>
                                    </button>

                                    <button class="yl xy rounded-full" wire:click="deleteId({{ $product->id }})">
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

    {{ $products->links() }}

    <x-dialog-modal wire:model="showProductModal" class="">

        @if ($productId)
        <x-slot name="title" class="border-b">Update Product</x-slot>
        @else
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Create Product</span>
        </x-slot>
        @endif

        <x-slot name="content">
            <div class="border-t">
                <div class="vc vu ">
                    <div class="fw">

                        <form>
                            <div class="my-3 md:mt-0 md:col-span-2" x-data="{tab: 0}">
                                <div class="mb-5 flex border border-black overflow-hidden">
                                    <button class="px-4 py-2 w-full font-bold" :class="{ 'active bg-gray-800 text-white': tab === 0 }" x-on:click.prevent="tab = 0">General</button>
                                    <button class="px-4 py-2 w-full font-bold" :class="{ 'active bg-gray-800 text-white': tab === 1 }" x-on:click.prevent="tab = 1">Meta</button>
                                    <button class="px-4 py-2 w-full font-bold" :class="{ 'active bg-gray-800 text-white': tab === 2 }" x-on:click.prevent="tab = 2">Image</button>
                                </div>
                                <div>
                                    <div class="mt-6 flex flex-col space-y-3" x-show="tab === 0">

                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="name" class="block text-sm font-medium text-gray-700">
                                                    Name
                                                </label>
                                                <input wire:model="name" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label for="sku" class="block text-sm font-medium text-gray-700">
                                                    SKU
                                                </label>
                                                <input wire:model="sku" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                            </div>
                                        </div>

                                        <div class="flex flex-row space-x-4 justify-between">
                                            <div class="col-span-6 sm:col-span-3 w-1/2">
                                                <label for="first-name" class="block text-sm font-medium text-gray-700">Category</label>
                                                <select wire:model="category" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                    <option value="">Select Option</option>
                                                    @foreach($categories as $category)
                                                    <option class="capitalize" value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3 w-1/2">
                                                <label for="first-name" class="block text-sm font-medium text-gray-700">Brand</label>
                                                <select wire:model="brand" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                    <option value="">Select Option</option>
                                                    @foreach($brands as $brand)
                                                    <option class="capitalize" value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="short_desc" class="block text-sm font-medium text-gray-700">
                                                Short Description
                                            </label>
                                            <textarea id="short_desc" wire:model="shortDesc" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" ></textarea>
                                        </div>

                                        <div wire:ignore class="col-start-1 sm:col-span-3">
                                            <label for="description" class="block text-sm font-medium text-gray-700">
                                                Description
                                            </label>
                                            @if ($productId)
                                            <div x-data="{ trix: @entangle($description).defer }">
                                                <input value="{{ $description }}" id="{{ $description }}" name="{{ $description }}" type="hidden" ">
                                                    <div 
                                                        wire:ignore
                                                        x-on:trix-change.debounce.500ms=" trix=$refs.trixInput.value">
                                                <trix-editor x-ref="trixInput" input="{{ $description }}" class="overflow-y-scroll" style="height: 10rem;">
                                                </trix-editor>
                                            </div>
                                        </div>
                                        @else
                                        <div wire:ignore>
                                            <input id="{{ $trixId }}" type="hidden" name="content" value="{{ $description }}">
                                            <trix-editor wire:ignore input="{{ $trixId }}"></trix-editor>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="flex flex-row justify-between space-x-2">
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="price" class="block text-sm font-medium text-gray-700">
                                                Price
                                            </label>
                                            <input wire:model="price" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="discount" class="block text-sm font-medium text-gray-700">
                                                Discount (%)
                                            </label>
                                            <input wire:model="discount" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="weight" class="block text-sm font-medium text-gray-700">
                                                Weight (gram)
                                            </label>
                                            <input wire:model="weight" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between space-x-2">

                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="height" class="block text-sm font-medium text-gray-700">
                                                Height (cm)
                                            </label>
                                            <input wire:model="height" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="length" class="block text-sm font-medium text-gray-700">
                                                Length (cm)
                                            </label>
                                            <input wire:model="length" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="width" class="block text-sm font-medium text-gray-700">
                                                Width (cm)
                                            </label>
                                            <input wire:model="width" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                    </div>

                                    <div class="flex flex-row space-x-4 justify-between">
                                        <div class="col-span-6 sm:col-span-3 w-1/2">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Publish</label>
                                            <select wire:model="publishStatus" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                <option value="">Select Option</option>
                                                @foreach($status as $key => $value)
                                                <option class="capitalize" value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 w-1/2">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Status</label>
                                            <select wire:model="productStatus" class="h-full2 rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                                <option value="">Select Option</option>
                                                @foreach($statuses as $status)
                                                <option class="capitalize" value="{{ $status }}">{{ $status }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6 flex flex-col space-y-3" x-show="tab === 1">

                                    <div class="col-start-1 sm:col-span-3">
                                        <label for="metaTitle" class="block text-sm font-medium text-gray-700">
                                            Meta Title
                                        </label>
                                        <input wire:model="metaTitle" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>
                                    <div class="col-start-1 sm:col-span-3">
                                        <label for="metaDesc" class="block text-sm font-medium text-gray-700">
                                            Meta Description
                                        </label>
                                        <textarea wire:model="metaDesc" cols="50" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $metaDesc }}</textarea>
                                    </div>

                                    <div class="col-start-1 sm:col-span-3">
                                        <label for="metaTitle" class="block text-sm font-medium text-gray-700">
                                            Color
                                        </label>
                                        <select style="width: 100%" class="select select-bordered w-full select2" id="colorSelect" multiple="multiple">
                                            @foreach($colors as $color)
                                            <option id="{{$color}}">{{ __('colors.' . $color) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-start-1 sm:col-span-3">
                                        <label for="metaDesc" class="block text-sm font-medium text-gray-700">
                                            Size
                                        </label>
                                        <textarea wire:model="metaDesc" cols="50" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $metaDesc }}</textarea>
                                    </div>

                                </div>
                                <div class="mt-6 flex flex-col space-y-3" x-show="tab === 2">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="files" class="block text-sm font-medium text-gray-700">
                                            Image
                                        </label>
                                        <input wire:model="files" multiple type="file" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        @if ($oldImage)
                                        Old Image:
                                        <img src="{{ asset('storage/'.$oldImage) }}">
                                        @endif
                                        @if ($file)
                                        Image Preview:
                                        <img src="{{ $file->temporaryUrl() }}">
                                        @endif
                                    </div>
                                    @if ($productId)
                                    <div class="col-span-6 sm:col-span-3">
                                        <div class="grid grid-cols-4 gap-2">
                                            @foreach (#productImages as $pimage)
                                            <div class="relative ">
                                                <img src="{{ asset('storage/'.$pimage->image) }}" alt="" class="rounded w-16 h-16">
                                                <div class="absolute flex w-6 h-6 rounded-full bg-white/30 text-red-500 hover:cursor-pointer" wire:click.prevent='deleteSingleImage({{ $pimage->id }})'>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endif
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
                    <x-button wire:click="closeProductModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-button>
                    @if ($productId)
                    <x-button wire:click="updateProduct" class=" ho xi ye">Update</x-button>
                    @else
                    <x-button wire:click="createProduct" class=" ho xi ye2">Create</x-button>
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
    <x-dialog-modal wire:model="showProductDetailModal" class="">

        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Detail Product</span>
        </x-slot>


        <x-slot name="content">
            <div class="border-t">
                <div class="vc vu ">
                    <div class="fw">

                        <div class="je items-center2 vh">
                            <a class="block ri _y rp zn tnv ub" href="#0">
                                <img class="rounded-sm" src="{{ asset('images/paramore.jpg') }}" width="200" height="142" alt="Product 01">
                            </a>
                            <div class="uw">
                                <a href="#0">
                                    <h3 class="text-2xl gh text-slate-800 rt font-bold">After Laughter (2023)</h3>
                                </a>
                                <div class="flex flex-wrap">
                                    <!-- Unique Visitors -->
                                    <div class="flex items-center vr">
                                        <div class="rp">
                                            <div class="flex items-center">
                                                <div class="text-xl font-bold text-slate-800 mr-2">Paramore</div>
                                            </div>
                                            <div class="text-sm text-slate-500">Artist</div>
                                        </div>
                                        <div class="hidden qx of sf hu rp" aria-hidden="true"></div>
                                    </div>
                                    <!-- Total Pageviews -->
                                    <div class="flex items-center vr">
                                        <div class="rp">
                                            <div class="flex items-center">
                                                <div class="text-xl font-bold text-slate-800 mr-2">USA</div>
                                            </div>
                                            <div class="text-sm text-slate-500">Country</div>
                                        </div>
                                        <div class="hidden qx of sf hu rp" aria-hidden="true"></div>
                                    </div>

                                    <!-- Visit Duration-->
                                    <div class="flex items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="text-xl font-bold text-slate-800 mr-2">2m 56s</div>
                                            </div>
                                            <div class="text-sm text-slate-500">Duration</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-sm ru">
                                    After Laughter is the fifth studio album by American rock band Paramore. It was released on May 12, 2017, through Fueled by Ramen, as a follow-up to their self-titled album Paramore (2013). The album was produced by guitarist Taylor York alongside previous collaborator Justin Meldal-Johnsen. It is the band's first album since the return of drummer Zac Farro, who left the band with his brother Josh in 2010, and the departure of former bassist Jeremy Davis, who left the band in 2015
                                </div>
                                <!-- Product meta -->
                                <div class="flex flex-wrap fe items-center">
                                    <audio id="myTune" controls controlsList="nofullscreen nodownload noremoteplayback">
                                        <source src="{{ asset('products/blackpink.mp3') }}">
                                    </audio>
                                </div>
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

                                <div class='my-3 flex flex-wrap mt-2 space-x-1'>
                                    <span class="flex flex-wrap justify-between items-center text-xs sm:text-xs bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600 rounded px-3 py-1 leading-loose cursor-pointer dark:text-gray-300">
                                        Pop rock
                                    </span>
                                    <span class="flex flex-wrap justify-between items-center text-xs sm:text-xs bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600 rounded px-3 py-1 leading-loose cursor-pointer dark:text-gray-300 ">
                                        New wave
                                    </span>
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

</div>



@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />
@endpush

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
<script>
    var trixEditor = document.getElementById("{{ $trixId }}")

    addEventListener("trix-blur", function(event) {
        @this.set('description', trixEditor.getAttribute('value'))
    })

    document.addEventListener('livewire:load', function(event) {

        @this.on('refreshColorSelect', function() {
            let associatedColors = [];

            $.each(@this.associatedColors, function(key, associatedColor) {
                associatedColors.push(associatedColor)
            });

            $('#colorSelect').val(associatedColors);

            $('#colorSelect').select2({
                tags: true,
                tokenSeparators: [',']
            });

            $('#colorSelect').trigger('change');

            $('#colorSelect').on('change', function(e) {
                @this.set('associatedColors', $(this).val());
            });
        });

    });
</script>
@endpush