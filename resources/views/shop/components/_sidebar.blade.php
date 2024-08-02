@props([
 'carts' => false 
])

<aside 
  id="minicart" 
  :class="minicartOpen ? 'right-0' : '-right-full'" 
  class="transform overflow-auto ease-in-out translate-x-0 w-full bg-white fixed top-0 h-full shadow-2xl md:w-[35vw] transition-all duration-300 z-30" 
  aria-hidden="true"
>
  <div class="flex items-center justify-between px-3 py-6 border-b">
    <div class="uppercase text-sm md:text-lg tracking-tighter font-semibold text-[#001838]">
      Shopping Bag (0)
    </div>
    <div @click.stop="minicartOpen = !minicartOpen" class="cursor-pointer w-8 h-8 flex justify-center items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={1.5} stroke="currentColor" class="w-6 h-6 text-slate-900">
        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
      </svg>
    </div>
  </div>
  
  <div class="flex @if($carts){{ 'flex-col gap-y-2' }}@else{{ '' }}@endif  h-[520px] lg:h-[640px] w-full px-2 overflow-y-auto overflow-x-hidden ">
    @if($carts)
    <ProductItem />
    @else
    <div class="flex flex-col gap-y-3 h-full w-full justify-center items-center">
    <image src="{{ asset('assets/img/empty-cart.jpg') }}" width=300 height=300 class="w-[300px] md:w-[400px]" alt="empty-cart" />
      <div class="flex tracking-tight uppercase font-bold text-slate-900">
        your cart is empty
      </div>
      <a href="{{ url('shop/all') }}" class="bg-[#73dfb7] hover:bg-white capitalize tracking-tight rounded-full text-[#001838] border-2 border-[#73dfb7] flex py-3 px-10 justify-center items-center  font-semibold">
        Continue Shopping
      </a>
    </div>
    @endif
  </div>

  <div class="fixed bottom-4 w-full space-y-2 px-2">
    <div class="flex w-full justify-between items-center ">
      <div class="uppercase font-semibold text-slate-900">
        <span class="mr-2">Total:</span> $ 200.00
      </div>
      <div class="cursor-pointer py-4 bg-red-500 text-white w-8 h-8 rounded-md flex justify-center items-center text-xl">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={1.5} stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
        </svg>
      </div>
    </div>
    <a href="{{ url('/') }}" class="bg-[#001838] hover:opacity-80 uppercase tracking-tight text-white rounded flex p-3 justify-center items-center w-full font-semibold">
      View Cart
    </a>
    <a href="{{ url('/') }}" class="bg-[#3bd6ff] hover:opacity-80 uppercase tracking-tight rounded text-[#001838] border border-[#001838] flex p-3 justify-center items-center w-full font-semibold">
      Checkout
    </a>
  </div>
</aside>
<div :class="minicartOpen ? 'block' : 'hidden'" class="hidden2 opacity-50 fixed inset-0 z-20 bg-black"></div>