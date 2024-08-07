@extends('shop.layout')

@section('content')

@include('shop.components._breadcrumb')

<div class="w-full py-5 md:py-5 bg-[#f5f7f9]">
        
        <div class="w-full max-w-[1280px] px-4 md:px-6 mx-auto">
          <div class="flex flex-col md:flex-row md:px-10 gap-[50px] lg:gap-[100px]">
            <!-- left column start -->
            <div class="w-full md:w-auto flex max-w-[400px] lg:max-w-full mx-auto lg:mx-0">
              @include('shop.components._productSlider')
            </div>
            <!-- left column end -->

            <!-- right column start -->
            <div class="flex-[1] py-3 md:py-0">
              <!-- PRODUCT TITLE -->
              <div class="text-lg md:text-[24px] text-slate-900 font-semibold mb-2 leading-tight">
                <span class="capitalize">{{ $product->name }}</span>
              </div>

              <!-- PRODUCT SUBTITLE -->
              <div class="text-base md:text-lg text-slate-500 font-semibold mb-5 leading-tight">
                lorem ipsum dolor sit amet 
              </div>

              <!-- PRODUCT PRICE -->
              <div class="flex items-center">
                <p class="mr-2 text-lg text-slate-900 font-semibold">
                  MRP : &#8377; 75,00
                </p>
              </div>

              <div class="text-sm md:text-md font-medium text-black/[0.5]">
                incl. of taxes
              </div>
              <div class="text-sm md:text-md font-medium text-black/[0.5] mb-10">
                (Also includes all applicable duties)
              </div>

              <!-- PRODUCT SIZE RANGE START -->
              <div class="mb-10">
                <!-- HEADING START -->
                <div class="flex items-center justify-between mb-2">
                  <div class="text-md text-slate-900 font-semibold tracking-tight uppercase">Select Size</div>
                  @include('shop.components._sizeGuide')
                </div>
                <!-- HEADING END -->

                <!-- SIZE START -->
                <div id="sizesGrid" class="grid grid-cols-3 gap-2">
                  @foreach($sizeData as $s)
                    <div
                      class="border-2 rounded-md text-center text-slate-900 py-3 font-medium hover:border-black cursor-pointer "
                    >
                      {{ $s['size'] }}
                    </div>
                  @endforeach
                </div>
                <!-- SIZE END -->
<!--  -->
                <!-- SHOW ERROR START -->
                
                  <div class="text-red-600 mt-1">
                    Size selection is required
                  </div>
                
                <!-- SHOW ERROR END -->
              </div>
              <!-- PRODUCT SIZE RANGE END -->

              <!-- ADD TO CART BUTTON START -->
              <button
                class="w-full py-2 md:py-4 rounded bg-[#001838] text-white text-lg font-medium transition-transform active:scale-95 mb-3 hover:opacity-80 uppercase tracking-tighter"
              >
                Add to Cart
              </button>
              <!-- ADD TO CART BUTTON END -->

              <!-- WHISHLIST BUTTON START -->
              <button class="w-full py-2 md:py-3 rounded border-2 bg-[#3bd6ff] border-[#3bd6ff] text-slate-900 hover:text-[#3bd6ff] text-base md:text-lg font-medium transition-transform active:scale-95 flex items-center justify-center gap-2 hover:bg-white mb-10 uppercase tracking-tight2">
                Wishlist
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width=1.5
                  stroke="currentColor"
                  class="w-5 h-5 md:w-6 md:h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                  />
                </svg>
              </button>
              <!-- WHISHLIST BUTTON END -->

              <div class="text-slate-900">
                <div class="text-lg font-bold mb-5 md:mb-2">Product Details</div>
                <div class="markdown text-md mb-5 leading-tight md:leading-snug">
                  {{ $product->description }}
                </div>
              </div>
            </div>
            <!-- right column end -->
          </div>
        </div>
      </div>

      @include('shop.components._suggest')

@endsection