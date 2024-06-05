@extends('frontend.layout')

@section('content')

<!-- MatchResult -->

      <div class="h-max flex flex-col py-0 bg-white">
        <div class="flex flex-col py-4 px-3 md:px-6 space-y-1 mx-auto w-full lg:w-1/2">
          <h1 class="text-lg md:text-2xl font-bold text-[#002f6c] uppercase">
            Statistic Comparison
          </h1>
          <div class="flex w-full justify-between items-center h-14 py-1.5 border-y">
            <div class="flex w-1/6">
              <div class="w-8">
                <img src="{{ url('assets/img/clubs/bayern.png') }}" alt="" />
              </div>
            </div>
            <div class=" w-4/6">
              <div class="flex w-full mx-auto justify-center space-x-6">
                <div class="flex ">
                  <span class="text-xs md:text-sm font-bold leading-tight text-[#002f6c]">
                    FC Bayern Munich
                  </span>
                </div>
                <div class="flex text-end">
                  <span class="text-xs md:text-sm font-bold leading-tight text-[#002f6c]">
                    Manchester City
                  </span>
                </div>
              </div>
            </div>
            <div class="flex w-1/6 justify-end">
              <div class="w-8">
                <img src="{{ url('assets/img/clubs/manchester-city.png') }}" alt="" />
              </div>
            </div>
          </div>
          <div class="flex flex-col py-2 space-y-2">
            <div class="flex justify-center">
              <span class="text-xs md:text-sm font-bold text-[#002f6c]">Penguasaan bola</span>
              </div>
              <div class="w-full flex space-x-2">
                <div class="flex justify-start items-center h-7 rounded-l-full bg-[#c60428] w-[55%]">
                  <div class="flex justify-center rounded-full  w-14 text-sm text-white font-semibold">55%</div>
                </div>
                <div class="flex justify-end items-center h-7 rounded-r-full bg-[#98c5e9] w-[45%]">
                  <div class="flex justify-center rounded-full  w-14 text-sm text-white font-semibold">45%</div>
                </div>
              </div>
          </div>
          {statistics.map((data, index) => {
            return (
              <div
                class="flex w-full justify-between items-center space-y-0 py-1"
                key={index}
              >
                <div class="flex w-1/12">
                  <div class={`flex ${data.home > data.away ? 'bg-[#c60428] text-white' : 'text-[#002f6c]'} px-2 py-1  rounded-full `}>
                    <span class="text-xs font-bold ">
                      {data.home}
                    </span>
                  </div>
                </div>
                <div class="w-10/12">
                  <div class="flex flex-row w-full mx-auto justify-center items-center">
                    
                    <div class="w-8/12 text-center leading-tight">
                      <span class="text-xs md:text-sm font-bold text-[#002f6c]">
                        {data.title}
                      </span>
                    </div>
                    
                  </div>
                </div>
                <div class="flex w-1/12 justify-end">
                <div class={`flex ${data.away > data.home ? 'bg-[#98c5e9] text-[#002f6c]' : 'text-[#002f6c]'}  rounded-full px-2 py-1`}>
                    <span class="text-xs font-bold ">
                      {data.away}
                    </span>
                  </div>
                </div>
              </div>
            );
          })}
        </div>
        
      </div>

@endsection