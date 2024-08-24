<div class="w-full md:w-1/2 flex flex-col items-center h-full mx-auto">
    <div x-data="dropdown()" {{$attributes->wire('model')}}>
        <label class="hidden text-sm font-medium text-gray-700">
            Assignee
        </label>
        <div class="inline-block relative min-w-64">
            <button
                type="button"
                class="w-full flex items-center justify-between h-10 bg-white border rounded px-2 shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                x-ref="button"
                @click.prevent="open = !open">
                <div x-for="(option,index) in selected" :key="option[trackBy]" class="flex items-center" >
                    <div class="mr-2">
                        <span x-text="option['logo']"></span>
                    </div>
                    <span class="text-sm" x-text="option['name']"></span>
                </div>
                <div class="text-gray-400">
                    <svg x-show="show" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <svg x-show="!show" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 15l7-7 7 7"></path>
                    </svg>
                </div>
            </button>
            <div class="w-full px-4 mt-0" x-show.transition.origin.top="show===true" x-on:click.away="close">
                <div class="absolute shadow top-100 bg-white z-40 w-full left-0 rounded max-h-select">
                    <div class="flex flex-col w-full overflow-y-auto max-h-64">
                        <template x-for="(option,index) in options" :key="option[trackBy]" class="overflow-auto">
                            <div
                                class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100"
                                @click="select(option)">
                                <div
                                    :class="inSelected(option) ? 'hover:bg-red-400' : 'hover:bg-green-400'"
                                    class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">

                                    <div class="flex items-center">
                                        <span x-text="option['logo']"></span>
                                        <span class="block ml-3 font-normal truncate" x-text="option[title]"></span>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <div x-show="!options.length"
                            class="cursor-pointer w-full border-gray-100 rounded border-b border-solid ">
                            <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                <div class="w-full items-center flex justify-between">
                                    <div class="mx-2 leading-6"> List Is empty</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

    <script>
        function dropdown() {
            return {
                options: @json($options) ? @json($options) : [],
                // selected: @entangle($attributes -> wire('model')),
                selected: [{ 'id': 8, 'name': 'bayern', 'logo': 'bayern'}],
                trackBy: @json($trackBy),
                title: @json($label),
                show: false,
                open() {
                    this.show = true;
                },
                close() {
                    this.show = false;
                },
                select(option, $dispatch) {
                    this.inSelected(option) ? this.remove(option, $dispatch) : this.selected.push(option);
                },
                inSelected(option) {
                    return this.selected.find(item => item[this.trackBy] == option[this.trackBy])
                },
                remove(option) {
                    this.options = this.options.map((item) => {
                        item.selected = item[this.trackBy] == option[this.trackBy] ? false : true;
                        return item;
                    })
                    this.selected = this.selected.filter(item => item[this.trackBy] != option[this.trackBy])
                },
                selectedValues() {
                    return this.selected.map((option) => {
                        return this.options[option[this.trackBy]];
                    })
                }
            }
        }
    </script>