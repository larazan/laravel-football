<div class="w-full md:w-1/2 flex flex-col items-center h-full mx-auto" 
    x-data="{
        highlighted: 0,
        count: {{ count($items) }},
        next() {
        console.log(this.highlighted);
            this.highlighted = (this.highlighted + 1) % this.count;
        },
        previous() {
            this.highlighted = (this.highlighted + this.count - 1) % this.count;
        },
        select() {
            this.$wire.call('select', this.highlighted)
        },
        close() {
            if (this.$wire.open) {
            this.$wire.open = false;
            }
        }
    }"
   x-init="highlighted =  {{ $selected ?: 0 }}"
   @click.outside="close()"
   
>
  <label class="hidden text-gray-500">
    {{ $label }} {{ $selected }}
  </label>
  <div class="inline-block relative min-w-64" >
    <button
      wire:click="toggle"
      class="w-full flex items-center justify-between h-10 bg-white border rounded px-2"
      @keydown.arrow-down="next()"
      @keydown.arrow-up="previous()"
      @keydown.enter.prevent="select()"
    >
      @if ($selected !== null)
        <div class="flex items-center">
            <div class="mr-2">
                <img src="{{ asset('storage/'.$items[$selected]['logo']) }}" class="w-5 rounded" alt="{{ $items[$selected]['name'] }}" />
            </div>
            <span class="text-sm">{{ $items[$selected]['name'] }}</span>
        </div>
      @else
        Choose...
      @endif

      <div class="text-gray-400">
        @if ($open)
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
              clip-rule="evenodd"/>
          </svg>
        @else
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd"/>
          </svg>
        @endif
      </div>
    </button>
    @if ($open)
      <ul 
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="bg-white absolute mt-1 z-10 border rounded w-full">
        @foreach($items as $item)
          <li wire:click="select({{ $loop->index }})"
            x-data="{ index: {{ $loop->index }} }"
            class="px-3 py-2 cursor-pointer flex items-center justify-between"
            :class="{'bg-blue-400 text-white': index === highlighted}"
            @mouseover="highlighted = index"
          >
            <div class="flex items-center">
                <div class="mr-2">
                    <img src="{{ asset('storage/'.$item['logo']) }}" class="w-5 rounded" alt="{{ $item['name'] }}" />
                </div>
                <span class="text-sm">{{ $item['name'] }}</span>
            </div>
            
            @if ($selected === $loop->index)
              <div :class="true ? 'text-white' : 'text-blue-500'">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                   fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"/>
                </svg>
              </div>
            @endif
          </li>
        @endforeach
      </ul>
    @endif
  </div>
</div>