
{{--
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
--}}

<div class="text-white w-full mx-auto sticky top-[50px] ">
    <div class="flex2 px-0 py-2">
        <div class="swiper swiper_large_preview">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="zoom_img">
                        <img class="img-fluid" src="{{ asset('assets/img/product/product1.png') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="zoom_img">
                        <img class="img-fluid" src="{{ asset('assets/img/product/product2.png') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="zoom_img">
                        <img class="img-fluid" src="{{ asset('assets/img/product/product3.png') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="zoom_img">
                        <img class="img-fluid" src="{{ asset('assets/img/product/product4.png') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="zoom_img">
                        <img class="img-fluid" src="{{ asset('assets/img/product/product5.png') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="zoom_img">
                        <img class="img-fluid" src="{{ asset('assets/img/product/product6.png') }}" />
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="col-md-12 px-0 py-2">
        <div thumbsSlider="" class="swiper swiper_thumb">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="zoom_img">
                        <img class="img-fluid" src="{{ asset('assets/img/product/product1.png') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="zoom_img">
                        <img class="img-fluid" src="{{ asset('assets/img/product/product2.png') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="zoom_img">
                        <img class="img-fluid" src="{{ asset('assets/img/product/product3.png') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="zoom_img">
                        <img class="img-fluid" src="{{ asset('assets/img/product/product4.png') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="zoom_img">
                        <img class="img-fluid" src="{{ asset('assets/img/product/product5.png') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="zoom_img">
                        <img class="img-fluid" src="{{ asset('assets/img/product/product6.png') }}" />
                    </div>
                </div>

            </div>
            <div class="swiper-button-next ">
            </div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

@push('style')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
.swiper {
  width: 100%;
  height: 100%;
}

.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #fff;
  /* Center slide text vertically */
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
  cursor: pointer;
}

.swiper-slide img {
  display: block;
  width: 100%;
  /* height: 100%;
  object-fit: cover; */
}

.swiper {
  width: 100%;
}

.swiper_thumb .swiper-slide {
  opacity: 0.7;
}

.swiper_thumb .swiper-slide:hover {
  opacity: 1;
}

.swiper_thumb .swiper-slide-thumb-active {
  opacity: 1;
  border: 2px solid #188cd9;
}

.swiper-slide img {
  display: block;
  width: 100%;
  /* height: 100%;
  object-fit: cover; */
  user-select: none;
}

.swiper-button-next,
.swiper-button-prev {
  color: #fff;
  background: #aaa;
  opacity: 40%;
  width: 35px;
  height: 35px;
  /* border-radius: 50%; */
  /* box-shadow: 0px 2px 2px rgb(221 56 34); */
  z-index: 9;
}

.swiper-button-next,
.swiper-button-prev::after {
  font-size: 14px;
  font-weight: 600;
}

.swiper-button-prev,
.swiper-button-next::after {
  font-size: 14px;
  font-weight: 600;
}

.swiper-button-next {
  right: 0px;
}

.swiper-button-prev {
  left: 0px;
}

.swiper-button-next:hover {
  color: #ccc;
  opacity: 50%;
  background: red;
}

.swiper-button-prev:hover {
  color: #ccc;
  background: red;
}
</style>
@endpush

@push('js')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".swiper_thumb", {
    spaceBetween: 10,
    slidesPerView: 4,
    speed: 300,
    loop: true,
    freeMode: true,
    watchSlidesProgress: true,
    ClickAble: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  var swiper2 = new Swiper(".swiper_large_preview", {
    spaceBetween: 10,
    slidesPerView: 1,
    // speed: 300,
    speed: 0,
    loop: true,
    // freeMode: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
</script>
@endpush