<div class="lg:col-span-3">
    <div x-data="{
  images: ['img/1_1.jpg', 'img/1_2.jpg', 'img/1_3.jpg', 'img/1_4.jpg'],
  activeImage: null,
  prev() {
      let index = this.images.indexOf(this.activeImage);
      if (index === 0) 
          index = this.images.length;
      this.activeImage = this.images[index - 1];
  },
  next() {
      let index = this.images.indexOf(this.activeImage);
      if (index === this.images.length - 1) 
          index = -1;
      this.activeImage = this.images[index + 1];
  },
  init() {
      this.activeImage = this.images.length > 0 ? this.images[0] : null
  }
}">
        <div class="relative">
            <template x-for="image in images">
                <div x-show="activeImage === image" class="aspect-w-3 aspect-h-2">
                    <img :src="image" alt="" class="w-auto mx-auto" />
                </div>
            </template>
            <a @click.prevent="prev" class="cursor-pointer bg-black/30 text-white absolute left-0 top-1/2 -translate-y-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <a @click.prevent="next" class="cursor-pointer bg-black/30 text-white absolute right-0 top-1/2 -translate-y-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
        <div class="flex">
            <template x-for="image in images">
                <a @click.prevent="activeImage = image" class="cursor-pointer w-[80px] border border-gray-300 hover:border-purple-500 flex items-center justify-center" :class="{'border-purple-600': activeImage === image}">
                    <img :src="image" alt="" class="w-auto max-auto max-h-full" />
                </a>
            </template>
        </div>
    </div>
</div>