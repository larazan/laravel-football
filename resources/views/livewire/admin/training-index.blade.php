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
            <h2 class="gh text-slate-800">Trainings <span class="gq gp"></span></h2>
        </header>
        <div x-data="handleSelect">

            <!-- Table -->
            <div class="lf">
                <table class="ux ou">
                    <!-- Table header -->
                    <thead class="go gh capitalize text-slate-500 hp co cs border-slate-200">
                        <tr>
                            <th class="vi wy w_ vo lm border">
                                <div class="gh gn flex items-center">
                                    <label class="inline-flex">
                                        NO
                                    </label>
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
                            <td class="border">
                                <div class="flex items-center justify-center">S1</div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hl gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt ho gh">
                                    <span>Physical</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hi gh">
                                    <span>Rest</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hu gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt ha gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hl gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hf gh">
                                    <span>Libur</span>
                                </div>
                            </td class="border">
                        </tr>
                        <tr>
                            <td class="border">
                                <div class="flex items-center justify-center">S2</div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hf gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hc gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hh gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hp gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hd gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hv gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                        </tr>
                        <tr>
                            <td class="border">
                                <div class="flex items-center justify-center">S3</div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hj gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hg gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hy gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hb gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hw gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                            <td class="border">
                                <div class="flex items-center justify-center jt hx gh">
                                    <span>Attacking</span>
                                </div>
                            </td class="border">
                        </tr>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
   

</div>