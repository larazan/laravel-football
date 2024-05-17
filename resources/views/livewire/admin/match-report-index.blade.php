

<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Report ✨</h1>
        </div>

    </div>

    <!-- More actions -->
    <div class="je jd jc ii">

        <!-- Left side -->
        <div class="ri _y">
            <button class="btn bg-white border-slate-200 hover--border-slate-300 yl xy" wire:click="backTo">Back</button>
        </div>

    </div>

    <!-- Table -->
    <div class="bg-white bd w-full rounded-sm border border-slate-200 rc">
        <header class="vc vu">
            <h2 class="gh text-slate-800">Team Comparison <span class="gq gp">{{ $matchId }}</span></h2>
        </header>
        <div class="flex flex-col py-4 px-6 space-y-1 mx-auto w-full">
            @foreach ($matchs as $match)
            <div class="flex justify-between items-center h-14 py-1.5 border-y ">
                <div class="flex w-1/6 items-center">
                    <div class="w-8">
                        @if ($match->home->logo)
                        <div class="">
                            <img src="{{ asset('storage/'.$match->home->logo) }}" class="w-8 rounded" alt="foto" />
                        </div>
                        @endif

                    </div>
                    <div class="ml-2">
                        <span class="text-sm font-bold text-[#002f6c]">
                            {{ $match->home->name }}
                        </span>
                    </div>
                </div>
                <div class=" w-4/6">
                    <div class="w-full flex flex-col justify-center text-center">
                        <div class="flex space-x-2 items-center justify-center">
                            <span class="text-xs font-semibold text-gray-600">
                                {{ $match->competition->name }}
                            </span>
                            <div>
                                <span class="text-xs font-semibold text-gray-600">
                                    {{ $match->season }}
                                </span>
                            </div>
                        </div>
                        <div class="justify-center">
                            <span class="text-xs font-semibold text-gray-600">
                                Stadium: Allianz Arena, Munich
                            </span>
                        </div>
                        <div class="justify-center">
                            <span class="text-xs font-semibold text-gray-600">
                                {{ $match->fixture_match }}, {{ $match->hour }}:{{ $match->minute }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex w-1/6 justify-end items-center">
                    <div class="mr-2">
                        <span class="text-sm font-bold text-[#002f6c]">
                            {{ $match->away->name }}
                        </span>
                    </div>
                    <div class="w-8">
                        @if ($match->away->logo)
                        <div class="">
                            <img src="{{ asset('storage/'.$match->away->logo) }}" class="w-8 rounded" alt="foto" />
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>

    <div class="bg-white bd rounded-sm rc">
        <div class="flex ak zc qv">

            <!-- Panel -->
            <div class="uw">

                <!-- Panel body -->
                <div class="d_ fd">

                    <!-- Business Profile -->
                    <section>
                        <h3 class="gf gb text-slate-800 font-bold rt">Report</h3>
                        <!-- <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div> -->

                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-full" wire:ignore>
                                <textarea class=" s ou" colspan="50" wire:model="report" name="report" id="report" style="height: 10rem;"></textarea>
                            </div>
                           
                        </div>

                    </section>

                    <!-- Icon -->
                    <section>
                        <h3 class="gf gb text-slate-800 font-bold rt">Image</h3>
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
                                <div class="flex items-center">
                                    @if ($oldImage)
                                    <div class="mr-4">
                                        <img class="ue sg rounded" src="{{ asset('storage/'.$oldImage) }}" width="32" height="32" alt="logo" width="80" height="80" alt="User upload">
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Panel footer -->
                <footer>
                    <div class="flex ak vm vg co border-slate-200">
                        <div class="flex ls">
                            <button class="btn ho xi ye ml-3" wire:click="updateReport">Submit</button>
                        </div>
                    </div>
                </footer>

            </div>

        </div>
    </div>

</div>



@push('styles')
<style>
.ck-editor__editable {
    min-height: 10rem;
}
</style>
@endpush

@push('js')
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script type="text/javascript">
    ClassicEditor
            .create(document.querySelector('#report'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                @this.set('report', editor.getData());
                })
            })
            .catch(error => {
                console.error(error);
            });
</script>
@endpush