<div class="h-max mx-auto w-full lg:w-1/2 flex flex-col space-y-3 px-3 md:px-6 lg:px-0 py-0 md:py-4 justify-center2 items-center2 bg-[#f5f7f9]">
        <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
          <div
            
            class="flex space-x-1 items-center hover:opacity-80"
          >
            <span class="text-lg tracking-tighter uppercase md:text-2xl font-bold text-[#002f6c]">
              You Might Also Like
            </span>
          </div>
          {{-- 
           <div class="flex space-x-1">
            <div
              
              class={`p-1 rounded-full  shadow-md text-black  ${scrollX !== 0 ? 'bg-[#fd9c0c] cursor-pointer' : 'bg-orange-300 opacity-50 cursor-default'} border-2 border-gray-800 shadow-menu`}
            >
              <span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width={1.5}
                  stroke="currentColor"
                  class="w-5 h-5"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 19.5L8.25 12l7.5-7.5"
                  />
                </svg>
              </span>
            </div>
            <div
              
              class={`p-1 rounded-full  shadow-md text-black  ${!scrolEnd ? 'bg-[#fd9c0c] cursor-pointer' : 'bg-orange-300 opacity-50 cursor-default'} border-2 border-gray-800 shadow-menu`}
            >
              <span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width={1.5}
                  stroke="currentColor"
                  class="w-5 h-5"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.25 4.5l7.5 7.5-7.5 7.5"
                  />
                </svg>
              </span>
            </div>
          </div>
          --}}
        </div>

        <div class="relative flex flex-row mx-auto w-full md:w-12/12 justify-between items-center">
          
            <div class="top-[40%] left-0">
              <button
                class="none absolute top-[35%] -left-0 md:-left-5 z-10 cursor-pointer rounded-full px-2 py-2 bg-[#002f6c] border-2 border-gray-800 shadow text-white"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width=3
                  stroke="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 19.5L8.25 12l7.5-7.5"
                  />
                </svg>
              </button>
            </div>
          
            <div class="top-[40%] right-0">
              <button
                class="none absolute top-[35%] -right-0 md:-right-5 z-10 cursor-pointer rounded-full px-2 py-2 bg-[#002f6c] border-2 border-gray-800 shadow text-white"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width=3
                  stroke="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.25 4.5l7.5 7.5-7.5 7.5"
                  />
                </svg>
              </button>
            </div>
          
          
          <div
            class="mb-[1em] pb-4 flex flex-row overflow-x-auto overflow-hidden2 custom-scrollbar scroll-smooth"
          >
            @foreach($products as $p)
                <div
                  class="transition-all duration-150 flex mr-[1em] "
                >
                  <div class="flex flex-col space-y-2 w-[130px] md:w-[230px]  justify-center bg-white2 border2 shadow2 hover:shadow-lg">
                    <div class="relative w-full bg-gray-200  flex ">
                      <a
                        href="{{ url('/') }}"
                        class="flex p-2 space-y-3 justify-center items-center"
                      >
                        <div class="flex space-x-3">
                          <image src="{{ asset('assets/img/product/product2.png') }}" alt="{{ $p->name }}" class="w-26 " />
                        </div>
                      </a>
                      <div class="absolute top-1 right-1">
                        <div class="border-2 border-slate-700 px-1 ">
                          <span class="text-sm font-semibold tracking-tighter text-gray-700 uppercase">-{{ $p->price }}%</span>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col justify-center2 items-center2">
                      <div class="flex text-center2 leading-tight">
                        <a href="{{ url('/') }}">
                        <span class="font-bold text-[10px] md:text-xs text-[#002f6c]  hover:underline">
                        {{ $p->name }}
                        </span>
                        </a>
                      </div>
                      <div>
                        <span class="font-bold text-xs md:text-sm text-[#002f6c] tracking-tighter">
                        £ {{ $p->price }}
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
          </div>
        </div>
      </div>