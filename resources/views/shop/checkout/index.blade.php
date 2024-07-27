@extends('shop.layout')

@section('content')

<div class="grid  md:grid-cols-2 lg:px-20 xl:px-32 ">
  <div class="px-6 pt-8 pb-8 bg-white border-r shadow">
    <p class="text-xl font-medium uppercase tracking-tighter text-gray-800">Contact Information</p>
    <p class="text-sm text-gray-800">
      Already have an account?
      <Link href={"/login"} class="text-blue-500">Log in</Link>
    </p>
    <div class="">
      <div class="mt-5">
        <input type="text" id="email" name="email" class="w-full rounded-md bg-white border border-gray-200 px-4 py-3  text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Email" />
      </div>
      <div class="mt-2">
        <div class="inline-flex items-center">
          <input type="checkbox" name="" id="" class="bg-white" />
          <label for="" class="text-sm  ml-2 text-gray-500">My billing address is different than above.</label>
        </div>
      </div>
      <div class="mt-4 py-2">
        <span class="text-base font-semibold text-gray-800">Shipping Address</span>
      </div>
      <div class="flex space-x-1">
        <input type="text" id="card-holder" name="card-holder" class="w-full rounded-md bg-white border border-gray-200 px-4 py-3 text-sm  shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="First name" />
        <input type="text" id="card-holder" name="card-holder" class="w-full rounded-md bg-white border border-gray-200 px-4 py-3 text-sm  shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Last name" />
      </div>
      <div class="mt-2">
        <input type="text" id="card-holder" name="card-holder" class="w-full rounded-md bg-white border border-gray-200 px-4 py-3 text-sm  shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Address" />
      </div>
      <div class="mt-2">
        <input type="text" id="card-holder" name="card-holder" class="w-full rounded-md bg-white border border-gray-200 px-4 py-3 text-sm  shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="City" />
      </div>
      <div class="mt-2 flex space-x-1">
        <div class="md:col-span-2">
          <div class="bg-white flex border border-gray-200 rounded-md shadow-sm items-center mt-0">
            <input name="country" id="country" placeholder="Country" class="px-4 py-3 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
            <button tabindex="-1" class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
              <svg class="w-5 h-5 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
            </button>
            <button tabindex="-1" for="show_more" class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
              <svg class="w-5 h-5 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="18 15 12 9 6 15"></polyline>
              </svg>
            </button>
          </div>
        </div>
        <div class="md:col-span-2">
          <div class="bg-white flex border border-gray-200 rounded-md shadow-sm items-center mt-0">
            <input name="state" id="state" placeholder="State" class="px-4 py-3 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
            <button tabindex="-1" class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
              <svg class="w-5 h-5 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
            </button>
            <button tabindex="-1" for="show_more" class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
              <svg class="w-5 h-5 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="18 15 12 9 6 15"></polyline>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="mt-2">
        <input type="text" id="card-holder" name="card-holder" class="w-full rounded-md bg-white border border-gray-200 px-4 py-3 text-sm  shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Postal Code" />
      </div>
      <div class="mt-2">
        <div class="inline-flex items-center">
          <input type="checkbox" name="" id="" class="border-gray-200 bg-white shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" />
          <label for="" class="text-sm ml-2 text-gray-500">Save this information for next time</label>
        </div>
      </div>
    </div>

    <p class="mt-8 text-lg font-medium uppercase tracking-tighter text-gray-800">Shipping Methods</p>
    <form class="mt-2 grid gap-3">
      <div class="relative bg-pink-50">
        <input class="peer hidden" id="radio_1" type="radio" name="radio" checked />
        <span class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
        <label class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_1">

          <div class="ml-5">
            <span class="mt-2 font-semibold text-gray-800">Fedex Delivery</span>
            <p class="text-slate-500 text-sm leading-6">
              Delivery: 2-4 Days
            </p>
          </div>
        </label>
      </div>
      <div class="relative">
        <input class="peer hidden" id="radio_2" type="radio" name="radio" checked />
        <span class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
        <label class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_2">
          <img class="w-14 object-contain" src="/images/oG8xsl3xsOkwkMsrLGKM4.png" alt="" />
          <div class="ml-5">
            <span class="mt-2 font-semibold text-gray-800">Fedex Delivery</span>
            <p class="text-slate-500 text-sm leading-6">
              Delivery: 2-4 Days
            </p>
          </div>
        </label>
      </div>
    </form>

    <Link href={"/cart"} class="flex items-center space-x-1 mt-4 text-sm md:text-base text-blue-400 hover:text-blue-500 font-semibold">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3 md:w-4 md:h-4 ">
      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
    </svg>
    <span>Return to cart</span>
    </Link>
  </div>
  <div class="mt-0 bg-[#f5f7f9] px-6 pt-8 lg:mt-0 pb-10">
    <p class="text-xl font-medium uppercase tracking-tighter text-gray-800">Order Summary</p>
    <p class="text-sm text-gray-800">
      Check your items. And select a suitable shipping method.
    </p>
    <div class="flex flex-col">

      <div class="min-h-[200px]">
        <CheckoutItem />
      </div>

      <div class="flex  space-x-2 py-4 border-b border-t border-gray-300">
        <input type="text" id="discount" name="discount" class="w-full rounded-md bg-white border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Discount code" />
        <button class=" w-40 rounded-md bg-gray-900 px-3 py-3 font-medium text-white">
          Apply
        </button>
      </div>

      <div class="mt-3  py-2">
        <div class="flex items-center justify-between">
          <p class="text-sm font-medium text-gray-900">Subtotal</p>
          <p class="font-semibold text-gray-900">$399.00</p>
        </div>
        <div class="flex items-center justify-between">
          <p class="text-sm font-medium text-gray-900">Shipping</p>
          <p class="font-semibold text-gray-900">$8.00</p>
        </div>
        <div class="flex items-center justify-between">
          <p class="text-sm font-medium text-gray-900">Taxes</p>
          <p class="font-semibold text-gray-900">$8.00</p>
        </div>
      </div>
      <div class="mt-3 pt-3 border-t border-gray-300 flex items-center justify-between">
        <p class="text-sm font-medium text-gray-900">Total</p>
        <p class="text-2xl font-semibold text-gray-900">$408.00</p>
      </div>
    </div>
    <button class="mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white">
      Place Order
    </button>
  </div>
</div>

@endsection