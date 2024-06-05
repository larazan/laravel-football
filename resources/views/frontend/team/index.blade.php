@extends('frontend.layout')

@section('content')

<div class="h-max w-full flex flex-col space-y-4 px-2 md:px-6 py-2 md:py-6 justify-center2 items-center2 bg-[#f5f7f9]">
        <div class="mx-auto w-full lg:w-1/2">
        <img src="{{ url('assets/img/audi.gif') }}" alt="" />
        </div>
      </div>
      <div class="h-max w-full flex flex-col space-y-4 px-2 md:px-6 py-0  justify-center2 items-center2 bg-[#f5f7f9]">
      <div class="mx-auto w-full lg:w-1/2">
        <img src="{{ url('assets/img/Teamfoto.png') }}" alt="" />
        </div>
      </div>

      <div class="h-max w-full flex flex-col space-y-4 px-2 md:px-6 py-0 md:py-6 justify-center2 items-center2 bg-[#f5f7f9]">
        <div class="mx-auto w-full lg:w-1/2">

        
        <section class="flex flex-col py-2">
          <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
            <span class="text-lg md:text-2xl font-bold text-[#002f6c]">
              GoalKeepers
            </span>
          </div>
          <div class="flex flex-row flex-wrap  mx-auto w-full md:w-12/12 ">
            
                  <div class="px-3 py-3 md:w-1/3 lg:w-1/3">
                    <div class=" relative group flex flex-col overflow-hidden hover:scale-105 shadow ">
                      <a href="{{ url('team/') }}" class="relative">
                        <img src="{{ url('assets/img/vertical.png') }}" alt="" class=" h-72" />
                        <div class="absolute flex justify-center bottom-0 z-20 w-full">
                          <img src="{{ url('assets/img/teams/manuel_neuer.png') }}" alt="" class="w-72" />
                        </div>
                        <div class="absolute top-1 left-2">
                          <span class="text-white text-lg font-bold">
                            {data.number}
                          </span>
                        </div>
                        <div class="absolute bottom-2 left-2 z-30 w-10 leading-tight">
                          <span class="text-white text-md font-semibold">
                            {data.name}
                          </span>
                        </div>
                      </a>
                    </div>
                  </div>
                
          </div>
        </section>
        <section class="flex flex-col py-2">
          <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
            <span class="text-lg md:text-2xl font-bold text-[#002f6c]">Defenders</span>
          </div>
          <div class="flex flex-row flex-wrap  mx-auto w-full md:w-12/12 ">
            
                  <div class="px-3 py-3 md:w-1/3 lg:w-1/3">
                    <div class=" relative group flex flex-col overflow-hidden hover:scale-105 shadow ">
                      <a href="{{ url('team/') }}" class="relative">
                        <img src="{{ url('assets/img/vertical.png') }}" alt="" class=" h-72" />
                        <div class="absolute flex justify-center bottom-0 z-20 w-full">
                          <img src="{{ url('assets/img/teams/manuel_neuer.png') }}" alt="" class="w-72" />
                        </div>
                        <div class="absolute top-1 left-2">
                          <span class="text-white text-lg font-bold">
                            {data.number}
                          </span>
                        </div>
                        <div class="absolute bottom-2 left-2 z-30 w-10 leading-tight">
                          <span class="text-white text-md font-semibold">
                            {data.name}
                          </span>
                        </div>
                      </a>
                    </div>
                  </div>

          </div>
        </section>
        <section class="flex flex-col py-2">
          <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
            <span class="text-lg md:text-2xl font-bold text-[#002f6c]">MidFielder</span>
          </div>
          <div class="flex flex-row flex-wrap  mx-auto w-full md:w-12/12 ">
            
                  <div class="px-3 py-3 md:w-1/3 lg:w-1/3">
                    <div class=" relative group flex flex-col overflow-hidden hover:scale-105 shadow ">
                      <a href="{{ url('team/') }}" class="relative">
                        <img src="{{ url('assets/img/vertical.png') }}" alt="" class=" h-72" />
                        <div class="absolute flex justify-center bottom-0 z-20 w-full">
                          <img src="{{ url('assets/img/teams/manuel_neuer.png') }}" alt="" class="w-72" />
                        </div>
                        <div class="absolute top-1 left-2">
                          <span class="text-white text-lg font-bold">
                            {data.number}
                          </span>
                        </div>
                        <div class="absolute bottom-2 left-2 z-30 w-10 leading-tight">
                          <span class="text-white text-md font-semibold">
                            {data.name}
                          </span>
                        </div>
                      </a>
                    </div>
                  </div>

          </div>
        </section>

        <section class="flex flex-col py-2">
          <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
            <span class="text-lg md:text-2xl font-bold text-[#002f6c]">Forwards</span>
          </div>
          <div class="flex flex-row flex-wrap  mx-auto w-full md:w-12/12 ">
           
                  <div class="px-3 py-3 md:w-1/3 lg:w-1/3">
                    <div class=" relative group flex flex-col overflow-hidden hover:scale-105 shadow ">
                      <a href="{{ url('team/') }}" class="relative">
                        <img src="{{ url('assets/img/vertical.png') }}" alt="" class=" h-72" />
                        <div class="absolute flex justify-center bottom-0 z-20 w-full">
                          <img src="{{ url('assets/img/teams/manuel_neuer.png') }}" alt="" class="w-72" />
                        </div>
                        <div class="absolute top-1 left-2">
                          <span class="text-white text-lg font-bold">
                            {data.number}
                          </span>
                        </div>
                        <div class="absolute bottom-2 left-2 z-30 w-10 leading-tight">
                          <span class="text-white text-md font-semibold">
                            {data.name}
                          </span>
                        </div>
                      </a>
                    </div>
                  </div>

          </div>
        </section>


        <section class="flex flex-col py-2">
          <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
            <span class="text-lg md:text-2xl font-bold text-[#002f6c]">Coaches</span>
          </div>
          <div class="flex flex-row flex-wrap  mx-auto w-full md:w-12/12 ">
            {staffData.map((data, index) => {
              return (
                <>
                  <div class="px-3 py-3 md:w-1/3 lg:w-1/3" key={index}>
                    <div class=" relative group flex flex-col overflow-hidden hover:scale-105 shadow ">
                      <Link href={`/teams/${data.name}`} class="relative">
                        <Image src={bg} alt="" class=" h-72" />{" "}
                        <div class="absolute flex justify-center bottom-0 z-20 w-full">
                          <Image src={data.img} alt="" class="w-72" />
                        </div>
                        {/* <div class="absolute top-1 left-2">
                    <span class="text-white text-lg font-bold">{data.number}</span>
                  </div> */}
                        <div class="absolute bottom-2 left-2 z-30 w-10 leading-tight">
                          <span class="text-white text-md font-semibold">
                            {data.name}
                          </span>
                        </div>
                      </Link>{" "}
                    </div>
                  </div>
                </>
              );
            })}
          </div>
        </section>
        </div>
      </div>


@endsection