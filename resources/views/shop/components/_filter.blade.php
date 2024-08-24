<div class="hidden2 flex flex-col w-full bg-white fixed top-0 h-full shadow-2xl md:w-[35vw] transition-all duration-300 z-50 px-4 lg:px-[35px]" id="menubar" :class="filterOpen ? 'left-0' : '-left-full'" x-cloak>
  <div class="flex w-full items-center justify-between py-4 border-b">
    <div class="w-1/2">
      <span class="uppercase font-semibold text-gray-900">Filters</span>
    </div>

    <div class="flex justify-end w-1/2">
      <div @click.stop="filterOpen = !filterOpen" class="cursor-pointer w-8 h-8 flex justify-center items-center rounded-full shadow bg-white hover:bg-slate-50">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width=2 stroke="currentColor" class="w-6 h-6 text-gray-900">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </div>
    </div>
  </div>

  <div class="divide-y">
    <!-- Size -->
    <div class="bg-white py-0 flex flex-col w-full" x-data="{ open:true }">
      <button @click="open = !open" class="flex items-center justify-between py-3 group font-semibold md:font-bold">
        <span class="text-sm font-bold uppercase text-gray-900">Size</span>

        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width=2 stroke="currentColor" class="w-4 h-4 text-gray-900">
          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>

        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width=2 stroke="currentColor" class="w-4 h-4 text-gray-900">
          <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>

      </button>
      <div :class="open ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'" class="grid overflow-hidden transition-all duration-300 ease-in-out text-slate-600 text-sm">
        <!-- content filter -->
        <div class="overflow-hidden pb-0">
          <div class="duration-300 px-0 pb-3">
            <div class="space-y-1">
              <ul class="flex flex-row flex-wrap justify-start gap-2">
                <li>
                  <span class="flex md:h-10 md:w-10 cursor-pointer select-none items-center justify-center rounded-full bg-[#f3f4f3] text-[#7e8784] h-8 w-8 lg:h-9 lg:w-9">
                    <button class="h-full w-full outline-none focus:outline-none">
                      S
                    </button>
                  </span>
                </li>
                <li>
                  <span class="flex md:h-10 md:w-10 cursor-pointer select-none items-center justify-center rounded-full bg-[#7e8784] text-[#f3f4f3] h-8 w-8 lg:h-9 lg:w-9">
                    <button class="h-full w-full outline-none focus:outline-none">
                      M
                    </button>
                  </span>
                </li>
                <li>
                  <span class="flex md:h-10 md:w-10 cursor-pointer select-none items-center justify-center rounded-full bg-[#f3f4f3] text-[#7e8784] h-8 w-8 lg:h-9 lg:w-9">
                    <button class="h-full w-full outline-none focus:outline-none">
                      L
                    </button>
                  </span>
                </li>
                <li>
                  <span class="flex md:h-10 md:w-10 cursor-pointer select-none items-center justify-center rounded-full bg-[#f3f4f3] text-[#7e8784] h-8 w-8 lg:h-9 lg:w-9">
                    <button class="h-full w-full outline-none focus:outline-none">
                      XL
                    </button>
                  </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end content filter -->
      </div>
    </div>
    <!-- end Size -->

    <!-- category -->
    <div class="bg-white py-0 flex flex-col w-full" x-data="{ open:false }">
      <button @click="open = !open" class="flex items-center justify-between py-3 group font-semibold md:font-bold">
        <span class="text-sm font-bold uppercase text-gray-900">Category</span>

        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width=2 stroke="currentColor" class="w-4 h-4 text-gray-900">
          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>

        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width=2 stroke="currentColor" class="w-4 h-4 text-gray-900">
          <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>

      </button>
      <div :class="open ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'" class="grid overflow-hidden transition-all duration-300 ease-in-out text-slate-600 text-sm">
        <!-- content filter -->
        <div class="overflow-hidden pb-0">
          <div class="duration-300 px-0 pb-3">
            <ul>
              <li class="pl-2">
                <div class="inline-flex items-center">
                  <input type="checkbox" name="" id="" class="bg-white" />
                  <label for="" class="text-sm  ml-2 text-gray-500">Category A</label>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- end content filter -->
      </div>
    </div>
    <!-- end categories -->

    <!-- brand -->
    <div class="bg-white py-0 flex flex-col w-full" x-data="{ open:false }">
      <button @click="open = !open" class="flex items-center justify-between py-3 group font-semibold md:font-bold">
        <span class="text-sm font-bold uppercase text-gray-900">Brand</span>

        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width=2 stroke="currentColor" class="w-4 h-4 text-gray-900">
          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>

        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width=2 stroke="currentColor" class="w-4 h-4 text-gray-900">
          <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>

      </button>
      <div :class="open ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'" class="grid overflow-hidden transition-all duration-300 ease-in-out text-slate-600 text-sm">
        <!-- content filter -->
        <div class="overflow-hidden pb-0">
          <div class="duration-300 px-0 pb-3">
            <ul>
              <li class="pl-2">
                <div class="inline-flex items-center">
                  <input type="checkbox" name="" id="" class="bg-white" />
                  <label for="" class="text-sm  ml-2 text-gray-500">Brand A</label>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- end content filter -->
      </div>
    </div>
    <!-- end brand -->
    <!-- price range -->
    <div class="w-full" title="Price">
      <div class="w-full overflow-hidden pb-0">
        <div class="pt-2">
          <span class="text-sm font-bold uppercase text-gray-900">Price</span>
        </div>

        <div class="pt-3">
          <div x-data="range()" x-init="mintrigger(); maxtrigger()" class="relative px-4 max-w-xl w-full">
            <div>
              <input type="range" step="100" x-bind:min="min" x-bind:max="max" x-on:input="mintrigger" x-model="minprice" class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">
              <input type="range" step="100" x-bind:min="min" x-bind:max="max" x-on:input="maxtrigger" x-model="maxprice" class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">
              <div class="relative z-10 h-2">
                <div class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-gray-200"></div>
                <div class="absolute z-20 top-0 bottom-0 rounded-md bg-green-300" x-bind:style="'right:'+maxthumb+'%; left:'+minthumb+'%'"></div>
                <div class="absolute z-30 w-6 h-6 top-0 left-0 bg-green-300 rounded-full -mt-2" x-bind:style="'left: '+minthumb+'%'"></div>
                <div class="absolute z-30 w-6 h-6 top-0 right-0 bg-green-300 rounded-full -mt-2" x-bind:style="'right: '+maxthumb+'%'"></div>
              </div>
            </div>

            <div class="flex items-center justify-between pt-5 space-x-4 text-sm text-gray-700">
              <div>
                <input type="text" maxlength="5" x-on:input.debounce="mintrigger" x-model="minprice"
                  wire:model.debounce.300="minPrice"
                  class="w-20 px-2 py-1 text-center border border-gray-200 focus:border-yellow-400 focus:outline-none">
              </div>
              <div>
                <input type="text" maxlength="5" x-on:input.debounce.300="maxtrigger" x-model="maxprice"
                  wire:model.debounce="maxPrice"
                  class="w-20 px-2 py-1 text-center border border-gray-200 focus:border-yellow-400 focus:outline-none">
              </div>
            </div>
          </div>
        </div>

        <div class="w-full duration-300 px-4 pb-3">
          <div class="w-full mx-auto lg:max-w-3xl space-y-2">
            <div class="text-center text-sm text-slate-700 font-medium" x-text="`${prices[value].contacts} contacts/month`"></div>
            <div class="relative flex items-center" :style="`--progress:${progress};--segments-width:${segmentsWidth}`">
              <div class="
                absolute left-2.5 right-2.5 h-1.5 bg-slate-200 rounded-full overflow-hidden
                before:absolute
                before:inset-0
                before:bg-gradient-to-r
                before:from-slate-200
                before:to-slate-200
                before:[mask-image:_linear-gradient(to_right,theme(colors.white),theme(colors.white)_var(--progress),transparent_var(--progress))]
                after:absolute
                after:inset-0
                after:bg-[repeating-linear-gradient(to_right,transparent,transparent_calc(var(--segments-width)-1px),theme(colors.white/.7)_calc(var(--segments-width)-1px),theme(colors.white/.7)_calc(var(--segments-width)+1px))]
                [&[x-cloak]]:hidden
            " aria-hidden="true" x-cloak></div>
              <input class="
                relative appearance-none cursor-pointer w-full bg-transparent focus:outline-none bg-slate-200
                [&::-webkit-slider-thumb]:appearance-none
                [&::-webkit-slider-thumb]:h-4
                [&::-webkit-slider-thumb]:w-4
                [&::-webkit-slider-thumb]:border-gray-400
                [&::-webkit-slider-thumb]:rounded-full
                [&::-webkit-slider-thumb]:bg-blue-500
                [&::-webkit-slider-thumb]:shadow
                [&::-webkit-slider-thumb]:focus-visible:ring
                [&::-webkit-slider-thumb]:focus-visible:ring-indigo-300
                [&::-moz-range-thumb]:h-4
                [&::-moz-range-thumb]:w-4                            
                [&::-moz-range-thumb]:rounded-full
                [&::-moz-range-thumb]:bg-blue-500
                [&::-moz-range-thumb]:border
                [&::-moz-range-thumb]:shadow
                [&::-moz-range-thumb]:focus-visible:ring
                [&::-moz-range-thumb]:focus-visible:ring-indigo-300                            
            " type="range" min="0" :max="prices.length - 1" :aria-valuetext="`${prices[value].contacts} contacts/month`" aria-label="Pricing Slider" x-model="value">
            </div>
          </div>

        </div>
      </div>
    </div>



    <div class="pt-4">
      <div class="bg-[#73dfb7] hover:bg-white uppercase  rounded-full text-slate-800 border-2 border-[#73dfb7] flex p-3 justify-center items-center w-full font-semibold cursor-pointer">
        Filter
      </div>
    </div>
  </div>
</div>

<div :class="filterOpen ? 'block' : 'hidden'" class=" opacity-50 fixed inset-0 z-30 bg-black"></div>

@push('style')
<style>
input[type=range]::-webkit-slider-thumb {
	pointer-events: all;
	width: 24px;
	height: 24px;
	-webkit-appearance: none;
  
/* @apply w-6 h-6 appearance-none pointer-events-auto; */
}
</style>
@endpush

@push('js')
<script>
  function range() {
    return {
      minprice: 1000,
      maxprice: 7000,
      min: 100,
      max: 10000,
      minthumb: 0,
      maxthumb: 0,

      mintrigger() {
        this.validation();
        this.minprice = Math.min(this.minprice, this.maxprice - 500);
        this.minthumb = ((this.minprice - this.min) / (this.max - this.min)) * 100;
      },

      // maxtrigger() {
      //   this.maxprice = Math.max(this.maxprice, this.minprice + 500); 
      //   this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);    
      // }, 

      maxtrigger() {
        this.validation();
        this.maxprice = Math.max(this.maxprice, this.minprice + 200);
        this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);
      },

      validation() {
        if (/^\d*$/.test(this.minprice)) {
          if (this.minprice > this.max) {
            this.minprice = 9500;
          }
          if (this.minprice < this.min) {
            this.minprice = this.min;
          }
        } else {
          this.minprice = 0;
        }
        if (/^\d*$/.test(this.maxprice)) {
          if (this.maxprice > this.max) {
            this.maxprice = this.max;
          }
          if (this.maxprice < this.min) {
            this.maxprice = 200;
          }
        } else {
          this.maxprice = 10000;
        }
      }

    }
  }
</script>
@endpush