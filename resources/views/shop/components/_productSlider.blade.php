
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