<div>
    <!-- Right: Actions -->
    <div class="sn am jo az jp ft">

        <!-- Create award button -->
        <button class="btn ho xi ye" wire:click="showCreateModal">
            <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
            </svg>
            <span class="hidden trm nq">Create Event</span>
        </button>
    </div>

    <x-dialog-modal wire:model="showEventModal" wire:ignore.self>

        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Create Event</span>
        </x-slot>

        <x-slot name="content">
            <div class="border-t">
                <div class="vc vu ">
                    <div class="fw">

                        <form>
                            <div class="">
                                <div class="">
                                    <div class="flex flex-col space-y-3">
                                        <div class="col-start-1 sm:col-span-3">
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                Title
                                            </label>
                                            <input wire:model="title" id="title" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="flex flex-row justify-between">
                                            <div class="col-start-1 sm:col-span-3">
                                                <label class="block text-sm font-medium text-gray-700">
                                                    Start Date
                                                </label>
                                                <x-flatpicker wire:model.defer="start"></x-flatpicker>
                                            </div>
                                            <div class="col-start-1 sm:col-span-3">
                                                <label class="block text-sm font-medium text-gray-700">
                                                    End Date
                                                </label>
                                                <x-flatpicker wire:model.defer="end"></x-flatpicker>
                                            </div>
                                        </div>
                                        <div class="col-start-1 sm:col-span-3">
                                            <label class="block text-sm font-medium text-gray-700">
                                                Category
                                            </label>
                                            <div class="flex flex-row space-x-4 justify-between2">
                                                <div class="flex items-center mb-4">
                                                    <input id="" type="radio" name="category" value="success" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-1" aria-describedby="country-option-1" checked="">
                                                    <label for="" class="text-sm font-medium text-gray-900 ml-2 block">
                                                        Success
                                                    </label>
                                                </div>

                                                <div class="flex items-center mb-4">
                                                    <input id="" type="radio" name="category" value="danger" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-1" aria-describedby="country-option-1" checked="">
                                                    <label for="" class="text-sm font-medium text-gray-900 ml-2 block">
                                                        Danger
                                                    </label>
                                                </div>

                                                <div class="flex items-center mb-4">
                                                    <input id="" type="radio" name="category" value="warning" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-1" aria-describedby="country-option-1" checked="">
                                                    <label for="" class="text-sm font-medium text-gray-900 ml-2 block">
                                                        Warning
                                                    </label>
                                                </div>

                                                <div class="flex items-center mb-4">
                                                    <input id="" type="radio" name="category" value="info" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-1" aria-describedby="country-option-1" checked="">
                                                    <label for="" class="text-sm font-medium text-gray-900 ml-2 block">
                                                        Info
                                                    </label>
                                                </div>
                                            </div>
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
            <div class="flex border-slate-200">
                <div class="flex flex-wrap space-x-2 justify-end fc">
                    <x-button wire:click="closeEventModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-button>
                    <x-button wire:click="createEvent" class=" ho xi ye2">Create</x-button>
                </div>
            </div>
        </x-slot>
    </x-dialog-modal>

</div>