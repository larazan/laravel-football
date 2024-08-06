@props([
'carts' => true
])

@extends('shop.layout')

@section('content')

<div class="w-full py-1 md:py-10 bg-[#f5f7f9]">
  <div class="w-full max-w-[1280px] px-5 md:px-10 mx-auto">

    <div class="text-center max-w-[800px] mx-auto mt-8 md:mt-0">
      <div class="text-[28px] md:text-[34px] mb-5 font-semibold uppercase tracking-tight leading-tight text-slate-900">
        Shopping Cart
      </div>
    </div>

    @if($carts)
    <div class="flex flex-col md:flex-row gap-12 mb-10 md:py-10">
      <div class="flex-[2]">
        <div class="text-lg font-bold text-slate-900">Cart Items</div>
        <!-- cart items -->
        <div class="flex py-5 gap-3 md:gap-5 border-b">
      <!-- IMAGE START -->
      <div class="shrink-0 aspect-square w-[70px] md:w-[120px] md:bg-[#f3f6f9] p-1">
        <Image src="{{ asset('assets/img/product/product1.png') }}" alt="productx" width="120" height="120" />
      </div>
       <!-- IMAGE END -->

      <div class="w-full flex flex-col">
        <div class="flex flex-col md:flex-row justify-between">
          <!-- PRODUCT TITLE -->
          <a
            href="{{ url('/') }}"
            class="text-base leading-tight hover:underline underline-offset-1 font-semibold text-black/[0.8]"
          >
            Manchester City Home Jersey 2023/24 with DE BRUYNE 17 printing
          </a>

          <!-- PRODUCT SUBTITLE -->
          <div class="text-sm md:text-md font-medium text-black/[0.5] block md:hidden">
            lorem ipsum dolor sit amet
          </div>

          <!-- PRODUCT PRICE -->
          
        </div>
        <div class="text-sm md:text-md font-bold text-black/[0.5] mt-2">
            MRP : &#8377;91,00
          </div>
        <!-- PRODUCT SUBTITLE -->
        <div class="text-sm font-medium text-black/[0.5] hidden md:block">
          lorem ipsum dolor sit amet
        </div>

        <div class="flex items-center justify-between mt-3">
          <div class="custom-number-input  w-[80px] ">
            <div class="flex  flex-row h-8 w-full rounded-lg relative bg-transparent ">
              <button
                data-action="decrement"
                class="flex items-center pl-1 bg-gray-200 text-gray-600 hover:text-gray-700 hover:bg-gray-300 h-full w-20 rounded-l cursor-pointer outline-none"
              >
                <span class="m-auto text-2xl font-thin">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width=2
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M18 12H6"
                    />
                  </svg>
                </span>
              </button>
              <input
                type="number"
                class="outline-none border-none text-center w-full bg-gray-200 font-semibold text-sm hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none2"
                name="custom-input-number"
                value="0"
              />
              <button
                data-action="increment"
                class="flex items-center  bg-gray-200 text-gray-600 hover:text-gray-700 hover:bg-gray-300 h-full w-20 rounded-r cursor-pointer"
              >
                <span class="m-auto text-2xl font-thin">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width=2
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 6v12m6-6H6"
                    />
                  </svg>
                </span>
              </button>
            </div>
          </div>

          <span class="cursor-pointer text-black/[0.5] hover:text-red-600 text-[16px] md:text-[18px]">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width=1.5
              stroke="currentColor"
              class="w-6 h-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
              />
            </svg>
          </span>
        </div>
      </div>
    </div>
        <!-- end cart items -->
      </div>

      <div class="flex-[1]">
        <div class="text-lg font-bold text-slate-900">Summary</div>

        <div class="p-5 my-5 bg-black/[0.05] rounded-lg">
          <div class="flex justify-between">
            <div class="uppercase text-md md:text-lg font-medium text-black">
              Subtotal
            </div>
            <div class="text-md md:text-lg font-medium text-black">
              &#8377;200
            </div>
          </div>
          <div class="text-sm md:text-md py-3 text-slate-900">
            The subtotal reflects the total price of your order, including
            duties and taxes, before any applicable discounts. It does not
            include delivery costs and international transaction fees.
          </div>
        </div>

        <button class="w-full py-2 md:py-3 rounded uppercase tracking-tighter bg-[#001838] text-white text-lg font-medium transition-transform active:scale-95 mb-3 hover:opacity-80 flex items-center gap-2 justify-center">
          Checkout
          {loading &&
          <Image src={spinner} alt="" />}
        </button>
      </div>
    </div>
    @else
    <div class="flex-[2] flex flex-col items-center pb-[50px] md:-mt-14">
      <image src="{{ asset('assets/img/empty-cart.png') }}" width=300 height=300 class="w-[300px] md:w-[400px]" alt="empty-cart" />
      <span class="text-xl font-bold text-slate-900 uppercase">Your cart is empty</span>
      <span class="hidden md:block text-center mt-4 text-slate-900">
        Looks like you have not added anything in your cart.
        <br />
        Go ahead and explore top categories.
      </span>
      <a href="/shop" class="bg-[#73dfb7] mt-4 hover:bg-white capitalize tracking-tight rounded-full text-[#001838] border-2 border-[#73dfb7] flex py-3 px-10 justify-center items-center  font-semibold">
        Continue Shopping
      </a>
    </div>
    @endif
  </div>
</div>

@include('shop.components._guarantee')

@endsection