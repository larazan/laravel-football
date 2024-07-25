<div class="h-max mx-auto w-full lg:w-1/2 flex flex-col space-y-3 md:px-6 lg:px-0 py-0 md:py-4 justify-center2 items-center2 bg-white">
        

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
            {matchData.map((data, index) => {
              return (
                
                  <div
                    class="transition-all duration-150 flex mr-[.5em] "
                    key={index}
                  >
                    <div class="flex w-[150px] h-[150px] md:w-[180px] md:h-[150px] justify-center bg-white">
                      <div class=" bg-white  flex ">
                        <Link
                          href="/"
                          class="flex flex-col space-y-3 justify-center items-center"
                        >
                          <div class="flex space-x-3">
                            <Image
                              src={data.home_logo}
                              alt=""
                              class="w-11 h-11 md:w-13 md:h-13"
                            />
                            <Image
                              src={data.away_logo}
                              alt=""
                              class="w-11 h-11 md:w-13 md:h-13"
                            />
                          </div>
                          <div class="flex flex-col justify-center items-center">
                            {data.ftr == null ? (
                              <>
                                <div class="">
                                  <span class="font-bold text-base md:text-2xl text-[#002f6c]">
                                    Sat, 29/08
                                  </span>
                                </div>
                              </>
                            ) : (
                              <>
                                <div class="flex space-x-1 text-[#002f6c]">
                                  <div class="font-bold text-lg md:text-2xl">
                                    {data.fthg}
                                  </div>
                                  <div class="font-bold text-lg md:text-2xl">:</div>
                                  <div class="font-bold text-lg md:text-2xl">
                                    {data.ftag}
                                  </div>
                                </div>
                              </>
                            )}

                            <div>
                              <span class="text-xs md:text-sm text-gray-500">
                                17:00 GMT+7
                              </span>
                            </div>
                          </div>
                        </Link>{" "}
                      </div>
                    </div>
                  </div>
                
              );
            })}

           
            <div class="transition-all duration-150 flex mr-[.5em] ">
              <div class="flex w-[180px] h-[150px] justify-center bg-white">
                <div class=" bg-white  flex ">
                  <Link
                    href="/"
                    class="flex flex-col space-y-3 justify-center items-center"
                  >
                    <div class="flex space-x-3">
                      <Image src={bayern} alt="" class="w-13 h-13" />
                      <Image src={bayern} alt="" class="w-13 h-13" />
                    </div>
                    <div class="flex flex-col justify-center items-center">
                      <div class="flex space-x-1">
                        <div class="font-bold text-2xl">1</div>
                        <div class="font-bold text-2xl">:</div>
                        <div class="font-bold text-2xl">3</div>
                      </div>
                      <div>
                        <span class="text-sm text-gray-500">
                          17:00 GMT+7
                        </span>
                      </div>
                    </div>
                  </Link>{" "}
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>