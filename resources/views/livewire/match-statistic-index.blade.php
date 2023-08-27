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
                <span class="hidden trm nq">Create Contact</span>
            </button>
        </div>

    </div>


    <!-- Table -->
    <div class="bg-white bd rounded-sm border border-slate-200 rc">
        <header class="vc vu">
            <h2 class="gh text-slate-800">Statistic <span class="gq gp"></span></h2>
        </header>
        <div x-data="handleSelect">

            <div class="flex justify-center w-full border-y border-gray-300 ">
                <div class="flex flex-col w-full ">
                    <div class="flex items-center border-b border-gray-300 py-3 px-3">
                        <div class="w-5/12 text-sm font-semibold">Contract Ends</div>
                        <div class="w-7/12 text-sm font-mabry">30/06/2024</div>
                    </div>
                    <div class="flex items-center border-b border-gray-300 py-3 px-3">
                        <div class="w-5/12 text-sm font-semibold">Height</div>
                        <div class="w-7/12 text-sm font-mabry">1.86 m</div>
                    </div>
                    <div class="flex items-center border-b border-gray-300 py-3 px-3">
                        <div class="w-5/12 text-sm font-semibold">Weight</div>
                        <div class="w-7/12 text-sm font-mabry">81 kg</div>
                    </div>
                    <div class="flex items-center border-b border-gray-300 py-3 px-3">
                        <div class="w-5/12 text-sm font-semibold">Date of birth</div>
                        <div class="w-7/12 text-sm font-mabry">28/03/1996</div>
                    </div>
                    <div class="flex items-center border-b border-gray-300 py-3 px-3">
                        <div class="w-5/12 text-sm font-semibold">Place of birth</div>
                        <div class="w-7/12 text-sm font-mabry">Maubeuge, France</div>
                    </div>
                    <div class="flex items-center border-b border-gray-300 py-3 px-3">
                        <div class="w-5/12 text-sm font-semibold">Nationality</div>
                        <div class="w-7/12 text-sm font-mabry">French</div>
                    </div>
                    <div class="flex items-center border-b border-gray-300 py-3 px-3">
                        <div class="w-5/12 text-sm font-semibold">Sign From</div>
                        <div class="w-7/12 text-sm font-mabry">01/07/2019</div>
                    </div>
                    <div class="flex items-center border-b border-gray-300 py-3 px-3">
                        <div class="w-5/12 text-sm font-semibold">Former club</div>
                        <div class="w-7/12 text-sm font-mabry">
                            <ul>
                                <li>Vfb Stuttgart (2016 - 2019)</li>
                                <li>OSC Lille (2014 - 2016)</li>
                                <li>US Jeumont</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center border-b border-gray-300 py-3 px-3">
                        <div class="w-5/12 text-sm font-semibold">Prefered foot</div>
                        <div class="w-7/12 text-sm font-mabry">Right</div>
                    </div>
                </div>
            </div>
        </div>
    </div>





</div>