@extends('backend.layout')

@section('content')

<main class="bg-white min-h-screen">
  
<!-- navigation -->
@include('backend.components._navigation')

  <div class="flex flex-col md:flex-row py-3 pb-10 mx-auto w-11/12 space-y-6 md:space-x-5 mt-5 md:mt-10">
    <div class="flex w-full md:w-9/12 flex-col space-y-2">
      <div class="flex space-x-2">
        <div>
          <span class="text-lg font-semibold uppercase text-gray-800">
            Order
          </span>
        </div>
        <span class="text-lg font-semibold uppercase text-gray-800">
          #1071
        </span>
      </div>
      <div>
        <span class="text-sm font-semibold text-gray-500">
          Placed on July 03, 2023 10:23 AM
        </span>
      </div>
      <div class="flex flex-wrap justify items-center space-x-22">
        <div class="flex min-w-[160px]2 mr-2 mb-2 space-x-1 items-center justify-center rounded-sm bg-gray-50 hover:bg-gray-100 cursor-pointer px-2 py-1.5 border border-gray-700">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={1.5} stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
            </svg>
          </div>
          <span class="flex font-semibold text-sm">Request Return</span>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={1.5} stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
          </div>
        </div>
        <a href="{{ url('account/invoice/1') }}" class="flex min-w-[160px]2 mr-2 mb-2 space-x-1 items-center justify-center rounded-sm bg-gray-50 hover:bg-gray-100 cursor-pointer px-2 py-1.5 border border-gray-700">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={1.5} stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
          </svg>
        </div>
        <span class="flex font-semibold text-sm">Request Invoice</span>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={1.5} stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
          </svg>
        </div>
</a>
        <div class="flex mr-2 mb-2 space-x-1 items-center justify-center rounded-sm bg-gray-50 hover:bg-gray-100 cursor-pointer px-2 py-1.5 border border-gray-700">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={1.5} stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
            </svg>
          </div>
          <span class="font-semibold text-sm">Reorder</span>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={1.5} stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
          </div>
        </div>
      </div>
      <div class="overflow-x-auto py-2 ">
        <table class="min-w-full text-sm">
          <thead class="bg-white border-y border-gray-300">
            <tr class="text-left2">
              <th class="text-sm text-center p-3 capitalize text-gray-500">
                <p>Product</p>
              </th>
              <th class="text-sm text-center p-3 uppercase text-gray-500">
                <p>SKU</p>
              </th>
              <th class="text-sm text-center p-3 capitalize text-gray-500">
                <p>price</p>
              </th>
              <th class="text-sm text-center p-3 capitalize text-gray-500">
                <p>quantity</p>
              </th>
              <th class="text-sm text-center p-3 capitalize text-gray-500">
                <p>total</p>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-white text-gray-800 border-y border-gray-300 font-semibold ">
              <td class="text-sm p-2 w-[120px] capitalize text-gray-600">
                <div class="flex flex-col leading-tight">
                  <div class="flex justify-center px-2 py-2 border border-gray-300 rounded-sm cursor-pointer bg-gray-50 hover:bg-gray-200">
                    Frieskies Seafood Sensations Dry Cat Food
                  </div>
                </div>
              </td>
              <td class="text-sm text-center p-4 ">
                <p>1234</p>
              </td>
              <td class="text-sm text-center p-4">
                <p>$200.00</p>
              </td>
              <td class="text-sm text-center p-4">
                <p>1</p>
              </td>
              <td class="text-sm text-right p-4 uppercase">
                <p>$200.00</p>
              </td>
            </tr>
            <tr class="bg-white text-gray-800 border-y border-gray-300 font-semibold ">
              <td colspan="4" class="text-sm text-left px-4 py-2">
                <p>Subtotal</p>
              </td>
              <td class="text-sm text-right px-4 py-2">
                <p>$200.00</p>
              </td>
            </tr>
            <tr class="bg-white text-gray-800 border-y border-gray-300 font-semibold ">
              <td colspan="4" class="text-sm text-left px-4 py-2">
                <p>Shipping (Standard Shipping)</p>
              </td>
              <td class="text-sm text-right px-4 py-2">
                <p>$10.00</p>
              </td>
            </tr>
            <tr class="bg-white text-gray-800 border-y border-gray-300 font-bold ">
              <td colspan="4" class="text-sm text-left px-4 py-2">
                <p>Total</p>
              </td>
              <td class="text-sm text-right px-4 py-2">
                <p>$210.00</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="flex">
        <a href="{{ url('account/orders') }}" class="flex space-x-1 items-center justify-center rounded-sm bg-gray-50 hover:bg-gray-100 cursor-pointer px-3 py-1.5 border border-gray-700">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={1.5} stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
          </svg>
        </div>
        <span class="font-semibold text-sm">Back</span>
</a>
      </div>
    </div>
    <div class="flex w-full md:w-3/12 flex-col space-y-4 md:space-y-6 text-gray-900">
      <div class="flex flex-col space-y-2 px-3 py-3 rounded-md bg-gray-100 border border-gray-300">
        <div>
          <h3 class="text-lg font-bold">Billing Address</h3>
        </div>
        <div class="flex items-center space-x-2">
          <div>
            <span class="text-sm font-bold">Payment Status:</span>
          </div>
          <span class="text-sm text-gray-500 font-semibold">
            Paid
          </span>
        </div>
        <div class="flex flex-col text-md font-semibold text-gray-500">
          <div>
            <span>John Smith</span>
          </div>
          <div class="leading-tight">
            <span>151 Oconnor street Ottawa ON K2P 2L8</span>
          </div>
          <div>
            <span>Canada</span>
          </div>
        </div>
      </div>
      <div class="flex flex-col space-y-2 px-3 py-3 rounded-md bg-gray-100 border border-gray-300">
        <div>
          <h3 class="text-lg font-bold">Shipping Address</h3>
        </div>
        <div class="flex items-center space-x-2">
          <div>
            <span class="text-sm font-bold">Fulfillment Status:</span>
          </div>
          <span class="text-sm text-gray-500 font-semibold">
            Fulfilled
          </span>
        </div>
        <div class="flex flex-col text-md font-semibold text-gray-500">
          <div>
            <span>John Smith</span>
          </div>
          <div class="leading-tight">
            <span>151 Oconnor street Ottawa ON K2P 2L8</span>
          </div>
          <div>
            <span>Canada</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection