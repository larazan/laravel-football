<div class="h-max mx-auto w-full lg:w-1/2 flex flex-col space-y-3 px-3 md:px-6 lg:px-0 py-0 md:py-4 justify-center2 items-center2 bg-[#f5f7f9]">
        <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
          <a
            href="/"
            class="flex space-x-1 items-center hover:opacity-80"
          >
            <span class="text-lg md:text-2xl font-bold text-[#002f6c]">
              Honours
            </span>
          </a>
         
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
                  stroke-width={3}
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
                  stroke-width={3}
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
            class="mb-[1em] flex flex-row overflow-x-auto scroll-smooth custom-scrollbar"
            ref={scrl}
            
          >
            {awardData.map((data, index) => {
              return (
                <div
                  class="transition-all duration-150 flex mr-[.5em] "
                  key={index}
                >
                  <div class="flex w-[130px] md:w-[180px] p-5 justify-center bg-white shadow hover:shadow-lg">
                    <div class=" bg-white  flex ">
                      <a
                        href="/"
                        class="flex flex-col space-y-3 justify-center items-center"
                      >
                        <div class="flex space-x-3">
                          <Image src={data.img} alt="" class="w-26 " />
                        </div>
                        <div class="flex flex-col justify-center items-center">
                          <div class="flex text-center">
                            <span class="font-bold text-[12px] md:text-sm text-[#002f6c]">
                              {data.title}
                            </span>
                          </div>
                          <div>
                            <span class="font-bold text-xs md:text-sm text-[#002f6c]">
                              {data.amount}
                            </span>
                          </div>
                        </div>
                      </a>{" "}
                    </div>
                  </div>
                </div>
              );
            })}
          </div>
        </div>

        <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center pb-7">
          <a
            href="/"
            class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200"
          >
            <span class=" font-semibold text-xs md:text-base text-[#002f6c]">
              All achievements
            </span>
          </a>
        </div>
      </div>