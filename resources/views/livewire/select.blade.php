@props([
 'options' => [],
])

@once
  @push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
  @endpush
  @push('js')
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
  @endpush
@endonce


<div
  wire:ignore

  x-data="{
    value: @entangle('selections'),
    options: {{ json_encode($options) }},
    debounce: null,
  }"

  x-init="
    this.$nextTick(() => {
      const choices = new Choices(this.$refs.select, {
        removeItems: true,
        removeItemButton: true,
        duplicateItemsAllowed: false,
     })

     const refreshChoices = () => {
       const selection = this.value
  
       choices.clearStore()

       choices.setChoices(this.options.map(({ value, label }) => ({
         value,
         label,
         selected: selection.includes(value),
       })))
     }

     this.$refs.select.addEventListener('change', () => {
       this.value = choices.getValue(true)
     })

     this.$refs.select.addEventListener('search', async (e) => {
       if (e.detail.value) {
         clearTimeout(this.debounce)
         this.debounce = setTimeout(() => {
           $wire.call('search', e.detail.value)
         }, 300)
       }
     })

     $wire.on('select-options-updated', (options) => {
       this.options = options
     })

     this.$watch('value', () => refreshChoices())
     this.$watch('options', () => refreshChoices())

     refreshChoices()
   })">

  <select x-ref="select"></select>

</div>

<!-- Dropdown -->
<div class="relative" x-data="{ open: false, selected: {{ $selectedClub }} }">
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
                <div class="tx g z q ou bg-white border border-slate-200 va w-40 rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa ws au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa ws" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" style="display: none;">
                    <div class="gp text-sm g_" x-ref="options">
                        <button tabindex="0" class="flex items-center  ou xr vf vn al" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>

                            <span>Select Club</span>

                        </button>
                        @foreach ($clubs as $club)
                        <button tabindex="0" class="flex items-center  ou xr vf vn al" :class="selected === {{ $club->id }} &amp;&amp; 'text-indigo-500'" @click="selected = {{ $club->id }};open = false; $wire.selectedClub= {{ $club->id }}" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== {{ $club->id }} &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            @if ($club->logo)
                            <div class="mr-2">
                                <img src="{{ asset('storage/'.$club->logo) }}" class="w-6 rounded" alt="foto" />
                            </div>
                            @endif
                            <span>{{ $club->name }}</span>
                        </button>
                        @endforeach
                        {{--
                        <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            <span>Today</span>
                        </button>
                        
                        <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 1 &amp;&amp; 'text-indigo-500'" @click="selected = 1;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500" :class="selected !== 1 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            <span>Last Month</span>
                        </button>

                        <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 2 &amp;&amp; 'text-indigo-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            <span>Last 12 Month</span>
                        </button>
                        
                        <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 3 &amp;&amp; 'text-indigo-500'" @click="selected = 3;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500" :class="selected !== 3 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            <span>All Time</span>
                        </button>
                        --}}
                    </div>
                </div>
            </div>