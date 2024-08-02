@extends('shop.layout')

@section('content')

@include('shop.components._adsModal')

<div class="bg-white">
@include('shop.components._hero')

<div class="w-full max-w-[1280px] px-5 py-1 md:px-10 mx-auto bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 my-14 px-5 md:px-0">
        @foreach($products as $p)  
       
              <a
                href="{{ url('/') }}"
                class="transform overflow-hidden bg-white duration-200 hover:scale-105 cursor-pointer"
              >
                <div class="bg-[#f3f6f9] p-2">
                <image
                  width="500"
                  height="500"
                  src="{{ asset('assets/img/product/product1.png') }}"
                  alt="{{ $p->name }}"
                />
                </div>
                <div class="p-2 text-black/[0.9]">
                  <h2 class="text-base font-medium leading-tight">{{ $p->name }}</h2>
                  <div class="flex items-center text-black/[0.5]">
                    <p class="mr-2 text-lg text-gray-950 font-semibold">
                      &#8377;{{ $p->price }}
                    </p>

                    @if($p->discount)
                      <>
                        <p class="text-base  font-medium line-through">
                          &#8377;{{ $p->price }}
                        </p>
                      </>
                    @endif
                  </div>
                </div>
              </a>
            @endforeach
        </div>
      </div>

</div>

      @endsection