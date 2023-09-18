<div class="mt-24">
    <div baslik="Test" aciklam="Test" class="">
        <div class="w-full md:w-1/2 flex flex-col items-center h-64 mx-auto">
            <div class="w-full col-span-6 md:col-span-3" x-data="{acik:false, aktif:'', secim:''}" x-data="{acik:false}" >
                <button type="button" class="relative w-full form-input" @click="acik = !acik">
                    <div class="flex justify-start" x-text="secim =='' ? 'Personal Seciniz' : secim">
                        Secilmiz iceric
                    </div>
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

                <div class="relative mt-1 border border-gray-300 rounded-md" x-show="acik">
                    <div class="flex">
                        <input type="text" class="w-full h-10 px-2 m-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2" wire:model="personel_adi" />
                    </div>
                    <div class="flex flex-col mt-2 mb-2 space-y-2">
                        @foreach ($this->personeller as $oge)
                            <button 
                                type="button" 
                                class="flex justify-start px-3 py-2 cursor-pointer hover:bg-green-400 focus:outline-none" 
                                :class="{'bg-green-500' :aktif=='{{ $oge->id }}'}" 
                                @click="aktif='{{ $oge->id }}', secim='{{ $oge->name }}', acik=false, $wire.yonetici_id=aktif"
                            >
                                {{ $oge->name }}
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
</div>
</div>
</div>
