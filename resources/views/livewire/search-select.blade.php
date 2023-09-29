<div class="z-30">
    <div title="Test" openlam="Test" class="relative">
        <div class="w-full md:w-1/2 flex flex-col items-center h-64 mx-auto">
            <div class="relative w-full col-span-6 md:col-span-3" x-data="{open:false, aktif:'', selected:''}">
                <button type="button" class="relative w-full form-input" @click="open = !open" >
                    
                    @if ($selectedPlayer !== null)
                        <div class="flex justify-start">
                        {{ $people[$selectedPlayer-1]['name'] }}
                        </div>
                    @else
                        <div class="flex justify-start" x-text="selected =='' ? 'Select Player' : selected">
                            please select
                        </div>
                    @endif
                    
                    <!--  -->
                    <div class="absolute inset-y-0 right-0 z-10 flex items-center px-2 text-gray-700 pointer-events-none">
                        <!-- svg -->
                        <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
                            <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
    c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
    L17.418,6.109z" />
                        </svg>
                    </div>
                </button>

                <div class="absolute w-full z-30 mt-1 border border-gray-300 rounded bg-white" x-show="open">
                    <div class="flex">
                        <input 
                            type="text" 
                            class="w-full h-10 px-2 m-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2" 
                            placeholder="Search Player"
                            wire:model="playerName"
                            wire:keydown.escape="reset"
                            wire:keydown.tab="reset"
                            @click.away="open = false"

                        />
                    </div>
                    
                    <div class="flex flex-col mt-0 mb-2 space-y-0">
                        
                        @if (count($this->player) > 0)
                            @foreach ($this->player as $ele)
                            <div type="button" class="flex justify-start cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100 focus:outline-none" :class="{'bg-green-500' :aktif=='{{ $ele->id }}'}" @click="aktif='{{ $ele->id }}', selected='{{ $ele->name }}', open=false, $wire.playerId=aktif, $wire.selectedPlayer={{ $ele->id }}">
                                <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                    <div class="w-full items-center flex justify-between">
                                        {{ $ele->name }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="flex justify-start w-full">
                                <div class="flex w-full items-center p-1 pl-2 border-transparent border-l-2 relative">    
                                No results!
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>{{ $selectedPlayer }}</div>

    <div class="mt-10 mx-auto w-1/2">
        <livewire:select2
            :selected="1"
            :items="['Apple','Banana','Strawberry']"
            label="Favorite fruit"
        />
    </div>

    <div class="mt-10 mx-auto w-1/2">
        <livewire:tags />
    </div>
</div>
