<div 
  x-data="{ isVisible: false }"
  x-init="window.addEventListener('scroll', () => { isVisible = window.scrollY > 100; })"
  x-show="isVisible"
  x-transition:enter="transition ease-out duration-300"
  x-transition:enter-start="opacity-0 transform translate-y-2"
  x-transition:enter-end="opacity-100 transform translate-y-0"
  x-transition:leave="transition ease-in duration-300"
  x-transition:leave-start="opacity-100 transform translate-y-0"
  x-transition:leave-end="opacity-0 transform translate-y-2"
  class="fixed flex justify-center mx-auto w-full bottom-3 z-40 cursor-pointer"
>
  <div @click="window.scrollTo({ top: 0, behavior: 'smooth' })" class="fixed flex space-x-2 px-3 py-1 lg:px-4 lg:py-4 items-center text-white rounded-full bg-red-600 bottom-3 hover:bg-red-500 lg:bottom-5 lg:right-5 cursor-pointer border border-white">
    <div class="font-semibold text-sm">Scroll to top</div>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M8 7l4-4m0 0l4 4m-4-4v18" />
    </svg>
  </div>
</div>