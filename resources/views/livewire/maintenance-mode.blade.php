<div>
    <div class="flex flex-row justify-between border border-indigo-600 rounded items-center p-2">

        <div class="flex capitalize items-center space-x-1 text-sm font-semibold text-indigo-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                <path strokeLinecap="round" strokeLinejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>

            <span> Maintenance Mode</span>
        </div>
        <div class="relative inline-block w-8 mr-2 align-middle select-none transition duration-200 ease-in">
            <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox top-0 absolute block w-10 h-10 rounded-full bg-white border-4 appearance-none cursor-pointer" />
            <label for="toggle" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 cursor-pointer"></label>
        </div>
        
        <div class="flex items-center" x-data="{ checked: true }">
            <div class="c987k">
                <input type="checkbox" id="switch-1" class="cbl3h" x-model="checked">
                <label class="ce4zx c717g" for="switch-1">
                    <span class="bg-white cl0q9" aria-hidden="true"></span>
                    <span class="cbl3h">Switch label</span>
                </label>
            </div>
            <div class="text-sm ciz4v czgoy clmtf c9o7o" x-text="checked ? 'On' : 'Off'">Off</div>
        </div>
    </div>
    
    <!-- modal delete confirmation -->
    <x-dialog-modal wire:model="showConfirmModal" class="">
        <x-slot name="title" class="border-b bg-slate-200">
            <span class="font-semibold">Maintenance mode Change</span>
        </x-slot>
        <x-slot name="content">
            <div class="border-t">
                <div class="vc vu ">
                    <div class="fw">
                        <div class="">
                            <div class="">
                                <div class="flex flex-col space-y-3">
                                    <div class="flex max-w-auto text-center justify-center items-center">
                                        <div class="text-lg font-semibold ">
                                            <p>Are you sure want to change?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="border-slate-200">
                <div class="flex flex-wrap justify-end fc">
                    <x-button wire:click="closeConfirmModal" class="border-slate-200 hover:text-white  g_">Cancel</x-button>
                    <x-button wire:click.prevent="submit()" class=" ho xi ye2">Submit</x-button>
                </div>
            </div>
        </x-slot>
    </x-dialog-modal>

</div>

@push('styles')
<style>
    .toggle-checkbox:checked {
        @apply: right-0 border-green-400;
        right: 0;
        border-color: #68D391;
        background-color: white;
    }

    .toggle-checkbox:checked+.toggle-label {
        @apply: bg-green-400;
        background-color: #68D391;
    }

    [type=checkbox] {
        height: 1rem;
        width: 1rem;
        color: white;
        background-color: #fff;
        border-color: #6b7280;
    }

    [type=checkbox]:focus {
        outline: none;
        outline-offset: none;
        --tw-ring-inset: none;
        --tw-ring-offset-width: none;
        --tw-ring-offset-color: none;
        --tw-ring-color: none;
        border-color: #6b7280;
    }

    [type=checkbox]:checked {
        background-image: none;
        border-color: #6b7280;
    }

    [type=checkbox]:checked:focus {
        border-color: #6b7280;
    }

    [type=checkbox]:checked:hover {
        border-color: #6b7280;
    }

    .c987k {
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    width: 44px;
}
.cbl3h {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0,0,0,0);
    white-space: nowrap;
    border-width: 0;
}
.c987k label {
    display: block;
    height: 1.5rem;
    cursor: pointer;
    overflow: hidden;
    border-radius: 9999px;
}
.c987k label>span:first-child {
    position: absolute;
    display: block;
    border-radius: 9999px;
    width: 20px;
    height: 20px;
    top: 2px;
    left: 2px;
    right: 50%;
    transition: all .15s ease-out;
}
.c717g {
    --tw-bg-opacity: 1;
    background-color: rgb(148 163 184/var(--tw-bg-opacity));
}
.cl0q9 {
    --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow);
}
.cbl3h {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0,0,0,0);
    white-space: nowrap;
    border-width: 0;
}
</style>
@endpush