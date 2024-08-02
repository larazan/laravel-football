<div class="hidden2 flex flex-col w-full bg-white fixed top-0 h-full shadow-2xl md:w-[35vw] transition-all duration-300 z-50 px-4 lg:px-[35px]" id="menubar" :class="filterOpen ? 'left-0' : '-left-full'">
  <div class="flex w-full items-center justify-between py-4 border-b">
    <div class="w-1/2">
      <span class="uppercase font-semibold text-gray-900">Filters</span>
    </div>

    <div class="flex justify-end w-1/2">
      <div @click.stop="filterOpen = !filterOpen" class="cursor-pointer w-8 h-8 flex justify-center items-center rounded-full bg-pink-200 hover:bg-pink-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={2} stroke="currentColor" class="w-6 h-6 text-gray-900">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </div>
    </div>
  </div>

  <div class="divide-y">
    <!-- Size -->
    <div class="bg-white py-0 flex flex-col w-full" x-data="{ open:false }">
      <button @click="open = !open" class="flex items-center justify-between py-3 group font-semibold md:font-bold">
        <span class="text-sm font-bold uppercase text-gray-900">Size</span>

        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth=2 stroke="currentColor" class="w-4 h-4 text-gray-900">
          <path strokeLinecap="round" strokeLinejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>

        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth=2 stroke="currentColor" class="w-4 h-4 text-gray-900">
          <path strokeLinecap="round" strokeLinejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>

      </button>
      <div :class="open ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'" class="grid overflow-hidden transition-all duration-300 ease-in-out text-slate-600 text-sm">
        <!-- content filter -->
        <div class="overflow-hidden pb-0">
          <div class="duration-300 px-0 pb-3">
            <div class="space-y-1">
              <ul class="flex flex-row flex-wrap justify-start gap-2">
                <li>
                  <span class="flex h-10 w-10 cursor-pointer select-none items-center justify-center rounded-full bg-[#f3f4f3] text-[#7e8784] h-8 w-8 lg:h-9 lg:w-9">
                    <button class="h-full w-full outline-none focus:outline-none">
                      S
                    </button>
                  </span>
                </li>
                <li>
                  <span class="flex h-10 w-10 cursor-pointer select-none items-center justify-center rounded-full bg-[#7e8784] text-[#f3f4f3] h-8 w-8 lg:h-9 lg:w-9">
                    <button class="h-full w-full outline-none focus:outline-none">
                      M
                    </button>
                  </span>
                </li>
                <li>
                  <span class="flex h-10 w-10 cursor-pointer select-none items-center justify-center rounded-full bg-[#f3f4f3] text-[#7e8784] h-8 w-8 lg:h-9 lg:w-9">
                    <button class="h-full w-full outline-none focus:outline-none">
                      L
                    </button>
                  </span>
                </li>
                <li>
                  <span class="flex h-10 w-10 cursor-pointer select-none items-center justify-center rounded-full bg-[#f3f4f3] text-[#7e8784] h-8 w-8 lg:h-9 lg:w-9">
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
    <DropFilter title="Price">
      <div class="overflow-hidden pb-0">
        <div class="duration-300 px-4">
          <div>
            <div>
              <div class="mb-3 flex items-center justify-between text-sm">
                Between €0 and €300
                <button class="cursor-pointer inline-block leading-none select-none text-center focus:outline-none transition-colors disabled:cursor-not-allowed max-h-10 relative p-0 text-sm text-primary transition-all hover:underline invisible opacity-0" type="button" data-variant="null_null"></button>
              </div>
              <div class="relative my-6 flex h-auto w-full px-2" style=" transform: scale(1); cursor: inherit ">
                <div class="h-[1px] w-full self-center before:absolute before:left-0 before:h-[1px] before:w-2 before:bg-[#707070] after:absolute after:right-0 after:h-[1px] after:w-2 after:bg-[#707070]" style=" background:linear-gradient(to right, #707070 0%, #707070 0%, #debe48 0%, #debe48 100%, #707070 100%, #707070 100%);">
                  <div style="
                            position: absolute;
                            z-index: 0;
                            cursor: grab;
                            touch-action: none;
                            user-select: none;
                            transform: translate(-8px, -7.5px);
                          " tabindex="0" aria-valuemax="300" aria-valuemin="0" aria-valuenow="0" draggable="false" role="slider" class="flex h-4 w-4 items-center justify-center rounded-full bg-primary outline-none transition-shadow">
                    <span class="border-1 absolute -top-12 hidden rounded-[4px] border-black bg-white px-4 py-2 text-[14px] opacity-0 shadow-lg transition-opacity md:inline-block invisible">
                      €0
                    </span>
                  </div>
                  <div style="
                            position: absolute;
                            z-index: 1;
                            cursor: grab;
                            touch-action: none;
                            user-select: none;
                            transform: translate(217.328px, -7.5px);
                          " tabindex="0" aria-valuemax="300" aria-valuemin="0" aria-valuenow="300" draggable="false" role="slider" class="flex h-4 w-4 items-center justify-center rounded-full bg-primary outline-none transition-shadow">
                    <span class="border-1 absolute -top-12 hidden rounded-[4px] border-black bg-white px-4 py-2 text-[14px] opacity-0 shadow-lg transition-opacity md:inline-block invisible">
                      €300
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </DropFilter>
    <DropFilter title="Brands">
      <div class="overflow-hidden pb-0">
        <div class="duration-300 px-0 pb-3">
          <ul>
            <li class="pl-2">
              <label class="flex h-8 flex-row items-center justify-start">
                <span class="grow">
                  <span class="text-sm">Easy </span>
                  <span class="text-xs text-sold-out">(8)</span>
                </span>
                <label class="relative inline-block h-[22px] w-[45px] flex-none">
                  <input class="peer h-0 w-0 opacity-0" type="checkbox" name="properties:air-purifying" value="367" />
                  <span class="absolute bottom-0 left-0 right-0 top-0 cursor-pointer rounded-[22px] bg-white ring-1 ring-inset ring-sold-out duration-300 before:absolute before:bottom-[2px] before:left-[2px] before:h-[18px] before:w-[18px] before:rounded-full before:bg-sold-out before:duration-300 before:content-[''] peer-checked:bg-primary peer-checked:ring-primary peer-checked:before:translate-x-[23px] peer-checked:before:transform peer-checked:before:bg-white peer-checked:peer-disabled:bg-primary/50 peer-checked:peer-disabled:ring-0"></span>
                </label>
              </label>
            </li>
            <li class="pl-2">
              <label class="flex h-8 flex-row items-center justify-start">
                <span class="grow">
                  <span class="text-sm">Air purifying </span>
                  <span class="text-xs text-sold-out">(8)</span>
                </span>
                <label class="relative inline-block h-[22px] w-[45px] flex-none">
                  <input class="peer h-0 w-0 opacity-0" type="checkbox" name="properties:air-purifying" value="367" />
                  <span class="absolute bottom-0 left-0 right-0 top-0 cursor-pointer rounded-[22px] bg-white ring-1 ring-inset ring-sold-out duration-300 before:absolute before:bottom-[2px] before:left-[2px] before:h-[18px] before:w-[18px] before:rounded-full before:bg-sold-out before:duration-300 before:content-[''] peer-checked:bg-primary peer-checked:ring-primary peer-checked:before:translate-x-[23px] peer-checked:before:transform peer-checked:before:bg-white peer-checked:peer-disabled:bg-primary/50 peer-checked:peer-disabled:ring-0"></span>
                </label>
              </label>
            </li>
            <li class="pl-2">
              <label class="flex h-8 flex-row items-center justify-start">
                <span class="grow">
                  <span class="text-sm">Pet friendly </span>
                  <span class="text-xs text-sold-out">(7)</span>
                </span>
                <label class="relative inline-block h-[22px] w-[45px] flex-none">
                  <input class="peer h-0 w-0 opacity-0" type="checkbox" name="properties:pet-friendly" value="368" />
                  <span class="absolute bottom-0 left-0 right-0 top-0 cursor-pointer rounded-[22px] bg-white ring-1 ring-inset ring-sold-out duration-300 before:absolute before:bottom-[2px] before:left-[2px] before:h-[18px] before:w-[18px] before:rounded-full before:bg-sold-out before:duration-300 before:content-[''] peer-checked:bg-primary peer-checked:ring-primary peer-checked:before:translate-x-[23px] peer-checked:before:transform peer-checked:before:bg-white peer-checked:peer-disabled:bg-primary/50 peer-checked:peer-disabled:ring-0"></span>
                </label>
              </label>
            </li>
            <li class="pl-2">
              <label class="flex h-8 flex-row items-center justify-start">
                <span class="grow">
                  <span class="text-sm">Hanging plant </span>
                  <span class="text-xs text-sold-out">(1)</span>
                </span>
                <label class="relative inline-block h-[22px] w-[45px] flex-none">
                  <input class="peer h-0 w-0 opacity-0" type="checkbox" name="properties:hanging-plant" value="370" />
                  <span class="absolute bottom-0 left-0 right-0 top-0 cursor-pointer rounded-[22px] bg-white ring-1 ring-inset ring-sold-out duration-300 before:absolute before:bottom-[2px] before:left-[2px] before:h-[18px] before:w-[18px] before:rounded-full before:bg-sold-out before:duration-300 before:content-[''] peer-checked:bg-primary peer-checked:ring-primary peer-checked:before:translate-x-[23px] peer-checked:before:transform peer-checked:before:bg-white peer-checked:peer-disabled:bg-primary/50 peer-checked:peer-disabled:ring-0"></span>
                </label>
              </label>
            </li>
          </ul>
        </div>
      </div>
    </DropFilter>
    <DropFilter title="Color">
      <div class="overflow-hidden pb-0">
        <div class="duration-300 px-0 pb-3">
          <ul>
            <li class="pl-2">
              <label class="flex h-8 flex-row items-center justify-start">
                <span class="grow">
                  <span class="text-sm">Orange </span>
                  <span class="text-xs text-sold-out">(8)</span>
                </span>
                <label class="relative inline-block h-[22px] w-[45px] flex-none">
                  <input class="peer h-0 w-0 opacity-0" type="checkbox" name="properties:air-purifying" value="367" />
                  <span class="absolute bottom-0 left-0 right-0 top-0 cursor-pointer rounded-[22px] bg-white ring-1 ring-inset ring-sold-out duration-300 before:absolute before:bottom-[2px] before:left-[2px] before:h-[18px] before:w-[18px] before:rounded-full before:bg-sold-out before:duration-300 before:content-[''] peer-checked:bg-primary peer-checked:ring-primary peer-checked:before:translate-x-[23px] peer-checked:before:transform peer-checked:before:bg-white peer-checked:peer-disabled:bg-primary/50 peer-checked:peer-disabled:ring-0"></span>
                </label>
              </label>
            </li>
            <li class="pl-2">
              <label class="flex h-8 flex-row items-center justify-start">
                <span class="grow">
                  <span class="text-sm">Grey </span>
                  <span class="text-xs text-sold-out">(8)</span>
                </span>
                <label class="relative inline-block h-[22px] w-[45px] flex-none">
                  <input class="peer h-0 w-0 opacity-0" type="checkbox" name="properties:air-purifying" value="367" />
                  <span class="absolute bottom-0 left-0 right-0 top-0 cursor-pointer rounded-[22px] bg-white ring-1 ring-inset ring-sold-out duration-300 before:absolute before:bottom-[2px] before:left-[2px] before:h-[18px] before:w-[18px] before:rounded-full before:bg-sold-out before:duration-300 before:content-[''] peer-checked:bg-primary peer-checked:ring-primary peer-checked:before:translate-x-[23px] peer-checked:before:transform peer-checked:before:bg-white peer-checked:peer-disabled:bg-primary/50 peer-checked:peer-disabled:ring-0"></span>
                </label>
              </label>
            </li>
            <li class="pl-2">
              <label class="flex h-8 flex-row items-center justify-start">
                <span class="grow">
                  <span class="text-sm">Yellow </span>
                  <span class="text-xs text-sold-out">(7)</span>
                </span>
                <label class="relative inline-block h-[22px] w-[45px] flex-none">
                  <input class="peer h-0 w-0 opacity-0" type="checkbox" name="properties:pet-friendly" value="368" />
                  <span class="absolute bottom-0 left-0 right-0 top-0 cursor-pointer rounded-[22px] bg-white ring-1 ring-inset ring-sold-out duration-300 before:absolute before:bottom-[2px] before:left-[2px] before:h-[18px] before:w-[18px] before:rounded-full before:bg-sold-out before:duration-300 before:content-[''] peer-checked:bg-primary peer-checked:ring-primary peer-checked:before:translate-x-[23px] peer-checked:before:transform peer-checked:before:bg-white peer-checked:peer-disabled:bg-primary/50 peer-checked:peer-disabled:ring-0"></span>
                </label>
              </label>
            </li>
            <li class="pl-2">
              <label class="flex h-8 flex-row items-center justify-start">
                <span class="grow">
                  <span class="text-sm">Blue </span>
                  <span class="text-xs text-sold-out">(1)</span>
                </span>
                <label class="relative inline-block h-[22px] w-[45px] flex-none">
                  <input class="peer h-0 w-0 opacity-0" type="checkbox" name="properties:hanging-plant" value="370" />
                  <span class="absolute bottom-0 left-0 right-0 top-0 cursor-pointer rounded-[22px] bg-white ring-1 ring-inset ring-sold-out duration-300 before:absolute before:bottom-[2px] before:left-[2px] before:h-[18px] before:w-[18px] before:rounded-full before:bg-sold-out before:duration-300 before:content-[''] peer-checked:bg-primary peer-checked:ring-primary peer-checked:before:translate-x-[23px] peer-checked:before:transform peer-checked:before:bg-white peer-checked:peer-disabled:bg-primary/50 peer-checked:peer-disabled:ring-0"></span>
                </label>
              </label>
            </li>
          </ul>
        </div>
      </div>
    </DropFilter>
    <DropFilter title="Tipe">
      <div class="overflow-hidden pb-0">
        <div class="duration-300 px-0 pb-3">
          <ul>
            <li class="pl-2">
              <label class="flex h-8 flex-row items-center justify-start">
                <span class="grow">
                  <span class="text-sm">Bathroom </span>
                  <span class="text-xs text-sold-out">(8)</span>
                </span>
                <label class="relative inline-block h-[22px] w-[45px] flex-none">
                  <input class="peer h-0 w-0 opacity-0" type="checkbox" name="properties:air-purifying" value="367" />
                  <span class="absolute bottom-0 left-0 right-0 top-0 cursor-pointer rounded-[22px] bg-white ring-1 ring-inset ring-sold-out duration-300 before:absolute before:bottom-[2px] before:left-[2px] before:h-[18px] before:w-[18px] before:rounded-full before:bg-sold-out before:duration-300 before:content-[''] peer-checked:bg-primary peer-checked:ring-primary peer-checked:before:translate-x-[23px] peer-checked:before:transform peer-checked:before:bg-white peer-checked:peer-disabled:bg-primary/50 peer-checked:peer-disabled:ring-0"></span>
                </label>
              </label>
            </li>
            <li class="pl-2">
              <label class="flex h-8 flex-row items-center justify-start">
                <span class="grow">
                  <span class="text-sm">Bedroom </span>
                  <span class="text-xs text-sold-out">(8)</span>
                </span>
                <label class="relative inline-block h-[22px] w-[45px] flex-none">
                  <input class="peer h-0 w-0 opacity-0" type="checkbox" name="properties:air-purifying" value="367" />
                  <span class="absolute bottom-0 left-0 right-0 top-0 cursor-pointer rounded-[22px] bg-white ring-1 ring-inset ring-sold-out duration-300 before:absolute before:bottom-[2px] before:left-[2px] before:h-[18px] before:w-[18px] before:rounded-full before:bg-sold-out before:duration-300 before:content-[''] peer-checked:bg-primary peer-checked:ring-primary peer-checked:before:translate-x-[23px] peer-checked:before:transform peer-checked:before:bg-white peer-checked:peer-disabled:bg-primary/50 peer-checked:peer-disabled:ring-0"></span>
                </label>
              </label>
            </li>
            <li class="pl-2">
              <label class="flex h-8 flex-row items-center justify-start">
                <span class="grow">
                  <span class="text-sm">Livingroom </span>
                  <span class="text-xs text-sold-out">(7)</span>
                </span>
                <label class="relative inline-block h-[22px] w-[45px] flex-none">
                  <input class="peer h-0 w-0 opacity-0" type="checkbox" name="properties:pet-friendly" value="368" />
                  <span class="absolute bottom-0 left-0 right-0 top-0 cursor-pointer rounded-[22px] bg-white ring-1 ring-inset ring-sold-out duration-300 before:absolute before:bottom-[2px] before:left-[2px] before:h-[18px] before:w-[18px] before:rounded-full before:bg-sold-out before:duration-300 before:content-[''] peer-checked:bg-primary peer-checked:ring-primary peer-checked:before:translate-x-[23px] peer-checked:before:transform peer-checked:before:bg-white peer-checked:peer-disabled:bg-primary/50 peer-checked:peer-disabled:ring-0"></span>
                </label>
              </label>
            </li>
            <li class="pl-2">
              <label class="flex h-8 flex-row items-center justify-start">
                <span class="grow">
                  <span class="text-sm">Office </span>
                  <span class="text-xs text-sold-out">(1)</span>
                </span>
                <label class="relative inline-block h-[22px] w-[45px] flex-none">
                  <input class="peer h-0 w-0 opacity-0" type="checkbox" name="properties:hanging-plant" value="370" />
                  <span class="absolute bottom-0 left-0 right-0 top-0 cursor-pointer rounded-[22px] bg-white ring-1 ring-inset ring-sold-out duration-300 before:absolute before:bottom-[2px] before:left-[2px] before:h-[18px] before:w-[18px] before:rounded-full before:bg-sold-out before:duration-300 before:content-[''] peer-checked:bg-primary peer-checked:ring-primary peer-checked:before:translate-x-[23px] peer-checked:before:transform peer-checked:before:bg-white peer-checked:peer-disabled:bg-primary/50 peer-checked:peer-disabled:ring-0"></span>
                </label>
              </label>
            </li>
          </ul>
        </div>
      </div>
    </DropFilter>

    <div>
      <div class="bg-[#73dfb7] hover:bg-white uppercase  rounded-full text-slate-800 border-2 border-[#73dfb7] flex p-3 justify-center items-center w-full font-semibold cursor-pointer">
        Filter
      </div>
    </div>
  </div>
</div>

<div :class="filterOpen ? 'block' : 'hidden'" class=" opacity-50 fixed inset-0 z-30 bg-black"></div>