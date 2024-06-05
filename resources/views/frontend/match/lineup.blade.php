@extends('frontend.layout')

@section('content')

<!-- MatchResult -->

      <div class="h-max flex flex-col py-4 md:py-6 px-2 md:px-6 bg-[#f5f7f9]">
        <div class="mx-auto w-full lg:w-1/2">
          <div class="flex flex-row justify-between mx-auto w-full ">
            <span class="text-lg md:text-2xl font-bold text-[#002f6c] uppercase">
              Lineup
            </span>
          </div>
          <div class="w-full py-5 flex flex-col md:flex-row space-y-4 md:space-y-0 space-x-2 md:space-x-5">
            <div class=" w-full md:w-1/2 ">
              <div class="flex w-full justify-between items-center h-14 py-1.5 border-y">
                <div class="flex w-2/6 justify-center">
                  <div class="w-8">
                    <img src="{{ url('assets/img/clubs/bayern.png') }}" alt="" />
                  </div>
                </div>
                <div class=" w-4/6">
                  <div class="flex w-full mx-auto justify-center space-x-6">
                    <div class="flex ">
                      <span class="text-sm font-bold leading-tight text-[#002f6c]">
                        FC Bayern Munich
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex flex-col w-full  ">
                {bayernFirstData.map((data, index) => {
                  return (
                    <div
                      class="flex justify-between items-center border-b border-gray-300 py-2 px-3"
                      
                    >
                      <div class="flex space-x-2 items-center">
                        <div class="flex">
                          <div class="flex w-8 h-8 bg-[#002f6c] text-gray-300 justify-center items-center">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="20"
                              viewBox="0 0 24 20"
                              fill="none"
                            >
                              <path
                                fillRule="evenodd"
                                clipRule="evenodd"
                                d="M9.00398 0H5.74805C5.48283 0 5.22848 0.105357 5.04094 0.292893L1.04094 4.29289C0.650416 4.68342 0.650415 5.31658 1.04094 5.70711L2.96006 7.62623C3.35058 8.01675 3.98375 8.01675 4.37427 7.62623L5.33383 6.66667V19C5.33383 19.5523 5.78155 20 6.33383 20H17.6672C18.2195 20 18.6672 19.5523 18.6672 19V6.66667L19.6267 7.62623C20.0173 8.01675 20.6504 8.01675 21.0409 7.62623L22.9601 5.70711C23.3506 5.31658 23.3506 4.68342 22.9601 4.29289L18.9601 0.292893C18.7725 0.105357 18.5182 0 18.253 0H15.3303C14.7686 1.18247 13.5634 1.99999 12.1672 1.99999C10.771 1.99999 9.56572 1.18247 9.00398 0Z"
                                fill="currentColor"
                              ></path>
                            </svg>
                          </div>
                          <div class="flex w-8 h-8 bg-gray-300 justify-center items-center">
                            <span class="text-sm text-[#002f6c] font-bold">
                              {data.number}
                            </span>
                          </div>
                        </div>
                        <div>
                          <span class="text-sm text-[#002f6c] font-bold capitalize">
                            {data.name}
                          </span>
                        </div>
                      </div>
                      <div class="text-[#002f6c] font-mabry">
                        <svg
                          height="22"
                          width="22"
                          viewBox="0 0 24 24"
                          preserveAspectRatio="xMidYMid meet"
                          role="img"
                          aria-hidden="true"
                          focusable="false"
                          xmlns="http://www.w3.org/2000/svg"
                          class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp"
                        >
                          <title>icon</title>
                          <path d="M6.53034 3.53033L5.46968 2.46967L1.93935 6L5.46968 9.53033L6.53034 8.46967L4.81067 6.75H17C18.7949 6.75 20.25 8.20507 20.25 10V12H21.75V10C21.75 7.37665 19.6234 5.25 17 5.25H4.81066L6.53034 3.53033ZM2.25 14V12H3.75V14C3.75 15.7949 5.20507 17.25 7 17.25H19.1893L17.4697 15.5303L18.5303 14.4697L22.0607 18L18.5303 21.5303L17.4697 20.4697L19.1893 18.75H7C4.37665 18.75 2.25 16.6234 2.25 14Z"></path>
                        </svg>
                      </div>
                    </div>
                  );
                })}
              </div>
            </div>
            <div class="w-full md:w-1/2 ">
              <div class="flex w-full justify-between items-center h-14 py-1.5 border-y">
                <div class=" w-4/6">
                  <div class="flex w-full mx-auto justify-center space-x-6">
                    <div class="flex text-end">
                      <span class="text-sm font-bold leading-tight text-[#002f6c]">
                        Manchester City
                      </span>
                    </div>
                  </div>
                </div>
                <div class="flex w-2/6  md:justify-center">
                  <div class="w-8">
                    <img src="{{ url('assets/img/clubs/manchester-city.png') }}" alt="" />
                  </div>
                </div>
              </div>
              <div class="flex flex-col w-full  ">
                {cityFirstData.map((data, index) => {
                  return (
                    <div
                      class="flex justify-between items-center border-b border-gray-300 py-2 px-3"
                      
                    >
                      <div class="flex space-x-2 items-center">
                        <div class="flex">
                          <div class="flex w-8 h-8 bg-[#002f6c] text-gray-300 justify-center items-center">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="20"
                              viewBox="0 0 24 20"
                              fill="none"
                            >
                              <path
                                fillRule="evenodd"
                                clipRule="evenodd"
                                d="M9.00398 0H5.74805C5.48283 0 5.22848 0.105357 5.04094 0.292893L1.04094 4.29289C0.650416 4.68342 0.650415 5.31658 1.04094 5.70711L2.96006 7.62623C3.35058 8.01675 3.98375 8.01675 4.37427 7.62623L5.33383 6.66667V19C5.33383 19.5523 5.78155 20 6.33383 20H17.6672C18.2195 20 18.6672 19.5523 18.6672 19V6.66667L19.6267 7.62623C20.0173 8.01675 20.6504 8.01675 21.0409 7.62623L22.9601 5.70711C23.3506 5.31658 23.3506 4.68342 22.9601 4.29289L18.9601 0.292893C18.7725 0.105357 18.5182 0 18.253 0H15.3303C14.7686 1.18247 13.5634 1.99999 12.1672 1.99999C10.771 1.99999 9.56572 1.18247 9.00398 0Z"
                                fill="currentColor"
                              ></path>
                            </svg>
                          </div>
                          <div class="flex w-8 h-8 bg-gray-300 justify-center items-center">
                            <span class="text-sm text-[#002f6c] font-bold">
                              {data.number}
                            </span>
                          </div>
                        </div>
                        <div>
                          <span class="text-sm text-[#002f6c] font-bold capitalize">
                            {data.name}
                          </span>
                        </div>
                      </div>
                      <div class="text-[#002f6c] font-mabry">
                        <svg
                          height="22"
                          width="22"
                          viewBox="0 0 24 24"
                          preserveAspectRatio="xMidYMid meet"
                          role="img"
                          aria-hidden="true"
                          focusable="false"
                          xmlns="http://www.w3.org/2000/svg"
                          class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp"
                        >
                          <title>icon</title>
                          <path d="M6.53034 3.53033L5.46968 2.46967L1.93935 6L5.46968 9.53033L6.53034 8.46967L4.81067 6.75H17C18.7949 6.75 20.25 8.20507 20.25 10V12H21.75V10C21.75 7.37665 19.6234 5.25 17 5.25H4.81066L6.53034 3.53033ZM2.25 14V12H3.75V14C3.75 15.7949 5.20507 17.25 7 17.25H19.1893L17.4697 15.5303L18.5303 14.4697L22.0607 18L18.5303 21.5303L17.4697 20.4697L19.1893 18.75H7C4.37665 18.75 2.25 16.6234 2.25 14Z"></path>
                        </svg>
                      </div>
                    </div>
                  );
                })}
              </div>
            </div>
          </div>
        </div>

        

<!-- COACH -->
        <section class="flex justify-between w-full px-10 py-3 min-h-14 bg-white2 md:h-14 border-b  items-center">
          <div class="flex flex-row items-center">
            <div class="mr-3 flex flex-col justify-center items-center">
              <div class="coachIcon">
                <img
                  src="{{ url('assets/img/player/guardiola.png') }}"
                  class="img Playerimg rounded-full bg-white "
                  alt=""
                />
              </div>
              <div class="block md:hidden">
                <span class="font-semibold text-xs text-[#002f6c]">
                  Pep Guardiola
                </span>
              </div>
            </div>
            <span class="hidden md:block text-sm text-[#002f6c] font-bold capitalize">
              Pep Guardiola
            </span>
          </div>
          <h2 class="text-sm text-[#002f6c] font-bold capitalize">Pelatih</h2>
          <div class="flex flex-row-reverse items-center ">
            <div class="ml-3 flex flex-col justify-center items-center">
              <div class="coachIcon">
                <img
                  src="{{ url('assets/img/player/arteta.png') }}"
                  class="img Playerimg rounded-full bg-white "
                  alt=""
                />
              </div>

              <div class="block md:hidden">
                <span class="font-semibold text-xs text-slate-900">
                  Mikel Arteta
                </span>
              </div>
            </div>
            <span class="hidden md:block text-sm text-[#002f6c] font-bold capitalize">
              Mikel Arteta
            </span>
          </div>
        </section>

        <!-- Subtitution -->
        
      </div>

@endsection