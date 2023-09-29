<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />

    <!-- Page header -->
    <div class="rc">

        <!-- Title -->
        <h1 class="gu teu text-slate-800 font-bold">Aplikasi Settings ✨</h1>

    </div>

    <div class="bg-white bd rounded-sm rc">
        <div class="flex ak zc qv">

            <!-- Sidebar -->
            {{--
                <x-settings.settings-navigation />
                --}}
            <!-- Panel -->
            <div class="uw">

                <!-- Panel body -->
                <div class="d_ fd">


                    <!-- Business Profile -->
                    <section>
                        <h3 class="gf gb text-slate-800 font-bold rt">General</h3>
                        <!-- <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div> -->
                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-full">
                                <label class="block text-sm gp rt" for="name">Title</label>
                                <input id="title" class="s ou" type="text" wire:model="title">
                            </div>
                        </div>
                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-1/2">
                                <label class="block text-sm gp rt" for="name">Description</label>
                                <textarea class="s ou" colspan="50" wire:model="description">{{ $description }}</textarea>
                            </div>
                            <div class="jr2 w-1/2">
                                <label class="block text-sm gp rt" for="name">Address</label>
                                <textarea class="s ou" colspan="50" wire:model="address">{{ $address }}</textarea>
                            </div>
                        </div>
                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-1/2">
                                <label class="block text-sm gp rt" for="name">Meta Description</label>
                                <textarea class="s ou" colspan="50" wire:model="metaDescription">{{ $metaDescription }}</textarea>
                            </div>
                            <div class="jr2 w-1/2">
                                <label class="block text-sm gp rt" for="name">Meta Keyword</label>
                                <textarea class="s ou" colspan="50" wire:model="metaKeyword">{{ $metaKeyword }}</textarea>
                            </div>
                        </div>

                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-1/2">
                                <label class="block text-sm gp rt" for="name">Email</label>
                                <input id="email" class="s ou" type="email" wire:model="email">
                            </div>
                            <div class="jr2 w-1/2">
                                <label class="block text-sm gp rt" for="name">Phone</label>
                                <input id="phone" class="s ou" type="phone" wire:model="phone">
                            </div>
                        </div>

                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-full">
                                <label class="block text-sm gp rt" for="name">Pinned Club</label>
                                {{-- 
                                <select wire:model="pinnedClub" class=" rounded-r border-t border-r border-b block appearance-none w-full bg-white border-gray-300 text-gray-700 py-2 px-4 pr-8 leading-tight focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                    <option value="">Select Option</option>
                                    @foreach($clubs as $club)
                                    <option value="{{ $club->id }}">{{ $club->name }}</option>
                                    @endforeach
                                </select>
                                --}}
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

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="je jc fg jm jb rw">
                            <div class="jr ">
                                <label class="block text-sm gp rt" for="name">Twitter</label>
                                <input id="twitter" class="s ou" type="text" wire:model="twitter">
                            </div>
                            <div class="jr ">
                                <label class="block text-sm gp rt" for="name">Facebook</label>
                                <input id="facebook" class="s ou" type="text" wire:model="facebook">
                            </div>
                            <div class="jr ">
                                <label class="block text-sm gp rt" for="name">Instagram</label>
                                <input id="instagram" class="s ou" type="text" wire:model="instagram">
                            </div>
                        </div>
                    </section>

                    <!-- logo -->
                    <section>
                        <h3 class="gf gb text-slate-800 font-bold rt">Logo</h3>
                        <div class="text-sm">You can change logo here.</div>
                        <div class="flex items-center">
                            @if ($oldImage)
                            <div class="mr-4">
                                <img class="ue sg rounded" src="{{ asset('storage/'.$oldImage) }}" width="32" height="32" alt="logo" width="80" height="80" alt="User upload">
                            </div>
                            @endif

                            <button class="r ho xi ye" wire:click="showEditModal">Change</button>
                        </div>
                    </section>

                    <!-- Icon -->
                    <section>
                        <h3 class="gf gb text-slate-800 font-bold rt">Icon</h3>
                        <!-- <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div> -->
                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-full" x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">

                                <input wire:model="icon" type="file" class="
                                            file:bg-gradient-to-b file:from-blue-500 file:to-blue-600 
                                            file:px-6 file:py-3 file:m-5
                                            file:border-none
                                            file:rounded
                                            file:text-white
                                            file:cursor-pointer
                                            file:shadow-lg file:shadow-blue-600/50" />
                                <div x-show.transition="isUploading" class="mt-3 w-full bg-slate-100 mb-6">
                                    <div class="ho ye2 rounded text-xs font-medium py-[1px] text-center" x-bind:style="`width: ${progress}%`">%</div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Panel footer -->
                <footer>
                    <div class="flex ak vm vg co border-slate-200">
                        <div class="flex ls">
                            <button class="btn border-slate-200 hover--border-slate-300 g_">Cancel</button>
                            <button class="btn ho xi ye ml-3" wire:click="updateSetting">Save Changes</button>
                        </div>
                    </div>
                </footer>

            </div>

        </div>
    </div>

    <x-dialog-modal wire:model="showSettingModal" class="">
        <x-slot name="title" class="border-b">Update Logo</x-slot>
        <x-slot name="content">
            <div class="border-t">
                <div class="vc vu ">
                    <div class="fw">

                        <form>
                            <div class="">
                                <div class="">
                                    <div class="flex flex-col space-y-3">
                                        <div class="col-span-6 sm:col-span-3" x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <label for="photo" class="block text-sm font-medium text-gray-700">Image Slider
                                            </label>
                                            <input wire:model="file" type="file" autocomplete="given-name" class="
                                                    file:bg-gradient-to-b file:from-blue-500 file:to-blue-600 
                                                    file:px-6 file:py-3 file:m-5
                                                    file:border-none
                                                    file:rounded
                                                    file:text-white
                                                    file:cursor-pointer
                                                    file:shadow-lg file:shadow-blue-600/50" />
                                            <div x-show.transition="isUploading" class="mt-3 w-full bg-slate-100 mb-6">
                                                <div class="ho ye2 rounded text-xs font-medium py-[1px] text-center" x-bind:style="`width: ${progress}%`">%</div>
                                            </div>
                                            @if ($oldImage)
                                            Logo Preview:
                                            <img src="{{ asset('storage/'.$oldImage) }}">
                                            @endif
                                            @if ($file)
                                            Logo Preview:
                                            <img src="{{ $file->temporaryUrl() }}">
                                            @endif
                                        </div>

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
                    <x-button wire:click="closeSettingModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-button>
                    <x-button wire:click="updatePhoto" class=" ho xi ye">Update</x-button>
                </div>
            </div>

        </x-slot>
    </x-dialog-modal>

</div>