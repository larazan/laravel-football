@extends('shop.layout')

@section('content')

<div class="w-full">
    <image src="{{ asset('assets/img/PLP_Banner_Mobile_1445x800_mothersday.jpg') }}" alt="" class="h-32 w-full md:h-60" />
</div>

@include('shop.components._filter')

<div class="w-full py-1 md:py-8 relative bg-white">
    <div class="w-full max-w-[1280px] px-5 md:px-10 mx-auto">
        <div class="text-center max-w-[800px] mx-auto mt-2 md:mt-0">
            <div class="text-[24px] md:text-[30px] md:mb-0 font-semibold  uppercase leading-tight text-slate-900">
                category
            </div>
        </div>

        <div class="flex relative pt-3 items-center  bg-white">
            <div class="flex flex-col md:flex-row md:justify-between items-center mx-auto w-full px-0 md:px-0 md:w-11/12 border-y border-black divide-y md:divide-y-0 md:divide-x-2 divide-black">
                <div class="flex w-full md:w-1/2 py-2">
                    <button 
                        class="filter2 place-content-center flex w-full justify-between px-4 items-center py-1 text-black focus:outline-none " 
                        type="button" 
                        @click="filterOpen = !filterOpen" 
                        aria-controls="menubar" 
                        :aria-expanded="filterOpen" 
                    >
                        <span class="font-semibold text-md uppercase text-slate-800">
                            Filter berdasarkan
                        </span>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={1.5} stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                            </svg>
                        </div>

                    </button>
                </div>
                <div class="w-full md:w-1/2 py-2">
                    <!-- <SortOpt /> -->
                </div>


            </div>
        </div>

        <!-- Product List -->
        <div class="w-full max-w-[1280px] px-5 py-1 md:px-10 mx-auto bg-white">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-5 py-5 md:my-1 px-0 md:px-0">
                @foreach($products as $p)
                <a href="{{ url('/') }}" class="transform overflow-hidden bg-transparent duration-200 hover:scale-105 cursor-pointer" key={index}>
                    <div class="bg-[#f4f4f4] p-2 rounded-md">
                        <image width="500" height="500" src="{{ asset('assets/img/product/product3.png') }}" alt="{{ $p->name }}" />
                    </div>
                    <div class="p-2 flex flex-col justify-center items-center space-y-1 text-black/[0.9]">
                        <h2 class="text-base text-center font-medium leading-tight">{{ $p->name }}</h2>
                        <div class="flex items-center text-black/[0.5]">
                            <p class="mr-2 text-lg text-gray-950 font-semibold">
                                ${{ $p->price }}
                            </p>

                            @if($p->discount)
                            <>
                                <p class="text-base  font-medium line-through">
                                    ${{ $p->price }}
                                </p>
                            </>
                            @endif
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

            {{ $products->links() }}
        </div>

    </div>
</div>

@endsection