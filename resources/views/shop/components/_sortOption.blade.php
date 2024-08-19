<div class="flex z-30" x-data="{ openSort: false, sortType:'recommended' }">
        <div
          class="relative flex items-center justify-between px-4 rounded w-full h-8 cursor-pointer text-slate-800"
          
          @click.away="openSort = false"
          @click="openSort = !openSort"
        >
          <button  class="text-md  font-semibold uppercase">
            <span x-text="sortType"></span>
          </button>
          <span class="">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width=3
              stroke="currentColor"
              class="w-4 h-4"
              :class="{'rotate-180 text-slate-800': openSort, 'rotate-0 text-slate-800': !openSort}"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m19.5 8.25-7.5 7.5-7.5-7.5"
              />
            </svg>
          </span>
          
            <div x-show="openSort" class="w-full absolute top-6 md:top-7 py-2 right-0 z-30 mt-4 origin-top-right rounded bg-white shadow-sm border border-slate-300">
              
                <div class="px-0" >
                  <button
                    @click="sortType='recommended', openSort=false" x-show="sortType != 'recommended'"
                    class="flex py-1.5 px-3 w-full font-semibold text-md text-slate-800 no-underline hover:bg-blue-400 hover:text-white"
                  >
                    <span class="uppercase">recommended</span>
                  </button>
                </div>

                <div class="px-0" >
                  <button
                    @click="sortType='populer',openSort=false" x-show="sortType != 'populer'"
                    class="flex py-1.5 px-3 w-full font-semibold text-md text-slate-800 no-underline hover:bg-blue-400 hover:text-white"
                  >
                    <span class="uppercase">populer</span>
                  </button>
                </div>

                <div class="px-0" >
                  <button
                    @click="sortType='name: a to z',openSort=false" x-show="sortType != 'name: a to z'"
                    class="flex py-1.5 px-3 w-full font-semibold text-md text-slate-800 no-underline hover:bg-blue-400 hover:text-white"
                  >
                    <span class="uppercase">name: a to z</span>
                  </button>
                </div>

                <div class="px-0" >
                  <button
                    @click="sortType='name: z to a',openSort=false" x-show="sortType != 'name: z to a'"
                    class="flex py-1.5 px-3 w-full font-semibold text-md text-slate-800 no-underline hover:bg-blue-400 hover:text-white"
                  >
                    <span class="uppercase">name: z to a</span>
                  </button>
                </div>

                <div class="px-0">
                  <button
                    @click="sortType='price: low to high',openSort=false" x-show="sortType != 'price: low to high'"
                    class="flex py-1.5 px-3 w-full font-semibold text-md text-slate-800 no-underline hover:bg-blue-400 hover:text-white"
                  >
                    <span class="uppercase">price: low to high</span>
                  </button>
                </div>

                <div class="px-0" >
                  <button
                    @click="sortType='price: high to low',openSort=false" x-show="sortType != 'price: high to low'"
                    class="flex py-1.5 px-3 w-full font-semibold text-md text-slate-800 no-underline hover:bg-blue-400 hover:text-white"
                  >
                    <span class="uppercase">price: high to low</span>
                  </button>
                </div>
              
            </div>
          
        </div>
      </div>

@php

$options = [
  "recommended",
  "populer",
  "name: a to z",
  "name: z to a",
  "price: low to high",
  "price: high to low",
];

@endphp