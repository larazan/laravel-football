<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Customer ID #{{ $customerId }} ✨</h1>
            <span class="text-sm text-gray-500">Joined at: 29 february 2024 12:44 pm</span>
        </div>

    </div>

    <!-- Cards -->
    <div class="sn ag fn">

        <!-- total order -->
        <div class="flex ak tz _c tns bg-white hf bd rounded-md border2 border-slate-200">
            <div class="vc flex flex-col py-8 justify-center items-center mb2 space-y-2">
                <div class="flex rounded-full p-2 w-12 h-12 bg-white py-3">

                </div>
                <div class="go gh gq gv rt">Total order</div>
                <div class="flex aj">
                    <div class="text-xl font-bold text-slate-800">$24,780</div>
                </div>
            </div>
        </div>

        <!-- total amount -->
        <div class="flex ak tz _c tns bg-white hl bd rounded-md border2 border-slate-200">
        <div class="vc flex flex-col py-8 justify-center items-center mb2 space-y-2">
                <div class="flex rounded-full p-2 w-12 h-12 bg-white py-3">

                </div>
                <div class="go gh gq gv rt">Total amount</div>
                <div class="flex aj">
                    <div class="text-xl font-bold text-slate-800">$24,780</div>
                </div>
            </div>
        </div>

        <!-- total point -->
        <div class="flex ak tz _c tns bg-white hc bd rounded-md border2 border-slate-200">
            <div class="vc flex flex-col py-8 justify-center items-center mb2 space-y-2">
                <div class="flex rounded-full p-2 w-12 h-12 bg-white py-3">

                </div>
                <div class="go gh gq gv rt">Total point</div>
                <div class="flex aj">
                    <div class="text-xl font-bold text-slate-800">780</div>
                </div>
            </div>
        </div>

    </div>

    
    <!-- More actions -->
    <div class="je jd jc ii mt-8">

        <!-- Left side -->
        <div class="ri _y">
            <!-- Search form -->
            <form class="y">
                <label for="action-search" class="d">Search</label>
                <input wire:model="search" id="action-search" class="s me xq" type="search" placeholder="Search by order id">
                <button class="g w j kk" type="submit" aria-label="Search">
                    <svg class="oo sl ub du gq kj ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                    </svg>
                </button>
            </form>
        </div>

        <!-- Right side -->
        <div class="sn am jo az jp ft">

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
    <div class="bg-white  bd rounded-sm border border-slate-200 rc">
        <header class="vc vu">
            <h2 class="gh text-slate-800">Order List <span class="gq gp"></span></h2>
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
                                <div class="gh gt">SL</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Order ID</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Status</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Total Amount</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Order Date</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Actions</div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm le lr">
                        <!-- Row -->

                        @if ($orders->count() > 0)
                        @php
                        $i = 0;
                        @endphp
                        @foreach ($orders as $order)
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
                                <div class="gp text-slate-800">{{ $i++ }} </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp text-slate-800">{{ $order->id }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                @if ($order->status === 'inactive')
                                <div class="inline-flex gp hf yl rounded-full gn vp vd">{{ $order->status }}</div>
                                @endif

                                @if ($order->status === 'active')
                                <div class="inline-flex gp hc ys rounded-full gn vp vd">{{ $order->status }}</div>
                                @endif
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp text-slate-800">{{ $order->order_amount }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div>{{ $order->created_at->format('d-m-Y') }}</div>
                            </td>

                            <td class="vi wy w_ vo lm of">
                                <div class="fm">

                                    <button class="gq xv rounded-full">
                                        <span class=" d">Edit</span>
                                        <svg class="os sf du" viewBox="0 0 32 32">
                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                        </svg>
                                    </button>

                                    <button class="yl xy rounded-full">
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

    {{ $orders->links() }}


    <div class="w-80 bg-white mt-8 dark:bg-slate-800 mb-8 bd rounded-md border border-slate-200 dark:border-slate-700 cugyv cv1va c4osb cetne">
        <div class="flex flex-col chmlm crszu">
        @foreach ($customer as $cus)
            <!-- Card top -->
            <div class="border-b p-3 border-slate-200 dark:border-slate-700">
                <div class="flex justify-between">
                    <span class="text-base font-semibold capitalize">{{ $cus->first_name }} {{ $cus->last_name }}</span>

                </div>
            </div>
            <div class="p-3 ckut6 ctk06">

                <div class="flex justify-center">
                    <img class="rounded-full w-20" src="{{ asset('images/generic-male-avatar-300x284.jpg') }}" alt="public">
                </div>
                <div class=" flex-col space-y-2 je rw">
                    <div class="flex items-center space-x-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <span class="text-sm">{{ $cus->email }}</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </div>
                        <span class="text-sm">{{ $cus->phone }}</span>
                    </div>
                </div>

            </div>
            <!-- Card footer -->
            <div class="p-3 border-t border-slate-200 dark:border-slate-700 c87xd">
                <div class="flex items-center space-x-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>

                    </div>
                    <span class="text-sm">{{ $cus->address1 }}</span>
                </div>
            </div>
        @endforeach
        </div>
    </div>

</div>