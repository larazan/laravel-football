<div class="md:border-b border-sold-out/50 bg-[#e6ff00]">
  <div class="grid-container overflow-x-hidden px-3 py-2 md:py-3 lg:px-0 lg:py-4">
    <div // style={{ transform: 'translateX(-200%)' }} // class="flex items-center transition-transform xl:gap-x-[4.5rem] xl:transition-none duration-[0ms]2 duration-500">
      <Slider {...settings} class="overflow-hidden">
        <div class="w-full shrink-0 text-center text-xs before:mr-2 before:text-gray-900 before:content-['\2713'] md:text-sm xl:flex xl:w-auto xl:items-center xl:justify-center xl:text-left">
          <span class="text-slate-900 font-semibold">
            <Link href="/" class="">
            Free Standard Shipping over €95
            </Link>
          </span>
        </div>
        <div class="w-full shrink-0 text-center text-xs before:mr-2 before:text-gray-900 before:content-['\2713'] md:text-sm xl:flex xl:w-auto xl:items-center xl:justify-center xl:text-left">
          <span class="text-slate-900 font-semibold">
            <Link class="" href="/">
            Newsletter Sign Up - <strong class="font-bold">Get 10% Discount</strong>

            </Link>
          </span>
        </div>
        <div class="w-full shrink-0 text-center text-xs before:mr-2 before:text-primary before:content-['\2713'] md:text-sm xl:flex xl:w-auto xl:items-center xl:justify-center xl:text-left">
          <span class="text-slate-900 font-semibold">
            <Link href="/" class="" rel="noreferrer noopener">
            Order Now Pay Later with <strong class="font-bold">Klarna</strong>
            </Link>
          </span>
        </div>
        <div class="w-full shrink-0 text-center text-xs before:mr-2 before:text-primary before:content-['\2713'] md:text-sm xl:flex xl:w-auto xl:items-center xl:justify-center xl:text-left xl:invisible 3xl:visible">
          <span class="text-slate-900 font-semibold">
            <Link href="/" class="" rel="noreferrer noopener">
            Ordered on weekdays before{" "}
            <strong class="font-bold">12pm</strong>, shipped today
            </Link>
          </span>
        </div>
        <div class=" w-full shrink-0 text-center text-xs before:mr-2 before:text-primary before:content-['\2713'] md:text-sm xl:hidden ">
          <span class="text-slate-900 font-semibold">
            <Link href="/" class="" rel="noreferrer noopener">
            <strong class="font-bold">Free shipping</strong> for orders over
            €75,-
            </Link>
          </span>
        </div>
      </Slider>
    </div>
  </div>
</div>


<!--  -->


<div class="min-h-screen bg-gray-300 flex flex-col justify-center">

  <div class="flex justify-center mb-16">
    <h1 class="text-4xl font-extrabold uppdercase text-red-900 uppercase">Breaking News</h1>
  </div>

  <div class="overflow-hidden bg-red-900 pl-64" x-data="newsTickerHandler()" @click="state.moving = false" x-init="init()">
    <ul :style="`transform:translateX(${position}px);padding-left:${offset}px`" class="flex uppercase items-center w-full font-bold max-w-screen whitespace-no-wrap transition-transform duration-300 ease-linear py-6 text-white uppercase text-2xl bg-red-900 leading-tight">
      <template x-for="(headline, index) in headlines.slice(0, visible)" :key="index">
        <li :id="`news-${index}`" class="flex px-16 whitespace-nowrap" x-text="headline"></li>
      </template>
    </ul>
  </div>

</div>

<!-- Dev tools -->
<div id="alpine-devtools" x-data="devtools()" x-show="alpines.length" x-init="start()"></div>

@push('js')
<script>
function newsTickerHandler() {
	return {
		state: {
			moving: true,
		},
		headlines: [],
		position: 0,
		offset: 0,
		speed: 25,
		visible: 10,
		pauseOnNextHeadline: 0,
		init: async function() {
			const response = await fetch('https://jsonplaceholder.typicode.com/posts')
			const data = await response.json()
			this.headlines = data.map(post => post.title)
			this.$nextTick(() => {
				this.start()
			})
		},
		start() {
			this.loop = () => {
				const first = document.getElementById('news-0').getBoundingClientRect()
				if (first.x <= -first.width) {
					// Reorder for continuous loop
					const newHeadlines = this.headlines
					newHeadlines.push(newHeadlines.shift())
					this.headlines = newHeadlines
					this.offset = this.offset + Math.abs(first.width)
					this.$nextTick(() => {
						setTimeout(() => {
							requestAnimationFrame(this.loop)
						}, this.pauseOnNextHeadline)
					})
					return
				}
				this.position = this.state.moving ? this.position - this.speed : this.position
				setTimeout(() => {
					requestAnimationFrame(this.loop)
				}, 300) // This should match your duration-300 class
			}
			requestAnimationFrame(this.loop)
		},
	}
}
</script>
@endpush