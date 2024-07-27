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
    class="fixed bg-pink bottom-10 right-3 z-20 cursor-pointer"
>
    <div @click="window.scrollTo({ top: 0, behavior: 'smooth' })" class="fixed p-2 opacity-80 rounded-full border border-[#1cd0ff] bg-[#1cd0ff] bottom-4 right-3  lg:bottom-5 lg:right-5 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width=3 stroke="currentColor" class="w-6 h-6 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
        </svg>
    </div>   
</div>