<div x-data="pricingSlider">

                <!-- Pricing slider -->
                <div class="max-w-sm mx-auto lg:max-w-3xl space-y-3 mb-12 lg:mb-16">
                    <div class="text-center text-sm text-slate-700 font-medium" x-text="`${prices[value].contacts} contacts/month`"></div>
                    <div class="relative flex items-center" :style="`--progress:${progress};--segments-width:${segmentsWidth}`">
                        <div class="
                            absolute left-2.5 right-2.5 h-1.5 bg-slate-200 rounded-full overflow-hidden
                            before:absolute
                            before:inset-0
                            before:bg-gradient-to-r
                            before:from-indigo-300
                            before:to-indigo-500
                            before:[mask-image:_linear-gradient(to_right,theme(colors.white),theme(colors.white)_var(--progress),transparent_var(--progress))]
                            after:absolute
                            after:inset-0
                            after:bg-[repeating-linear-gradient(to_right,transparent,transparent_calc(var(--segments-width)-1px),theme(colors.white/.7)_calc(var(--segments-width)-1px),theme(colors.white/.7)_calc(var(--segments-width)+1px))]
                            [&[x-cloak]]:hidden
                        " aria-hidden="true" x-cloak></div>
                        <input class="
                            relative appearance-none cursor-pointer w-full bg-transparent focus:outline-none
                            [&::-webkit-slider-thumb]:appearance-none
                            [&::-webkit-slider-thumb]:h-5
                            [&::-webkit-slider-thumb]:w-5
                            [&::-webkit-slider-thumb]:rounded-full
                            [&::-webkit-slider-thumb]:bg-white
                            [&::-webkit-slider-thumb]:shadow
                            [&::-webkit-slider-thumb]:focus-visible:ring
                            [&::-webkit-slider-thumb]:focus-visible:ring-indigo-300
                            [&::-moz-range-thumb]:h-5
                            [&::-moz-range-thumb]:w-5                            
                            [&::-moz-range-thumb]:rounded-full
                            [&::-moz-range-thumb]:bg-white
                            [&::-moz-range-thumb]:border-none
                            [&::-moz-range-thumb]:shadow
                            [&::-moz-range-thumb]:focus-visible:ring
                            [&::-moz-range-thumb]:focus-visible:ring-indigo-300                            
                        " type="range" min="0" :max="prices.length - 1" :aria-valuetext="`${prices[value].contacts} contacts/month`" aria-label="Pricing Slider" x-model="value">
                    </div>
                    <div>
                        <ul class="flex justify-between text-xs font-medium text-slate-500 px-2.5">
                            <template x-for="(price, index) in prices" :key="index">
                                <li class="relative"><span class="absolute -translate-x-1/2" x-text="price.contacts"></span></li>
                            </template>
                        </ul>
                    </div>
                </div>

</div>

@push('js')
<script>
 document.addEventListener('alpine:init', () => {
                    Alpine.data('pricingSlider', () => ({
                        value: 2,
                        prices: [
                            {
                                contacts: '1K',
                                plans: {
                                    starter: '5',
                                    business: '9',
                                }
                            },
                            {
                                contacts: '5K',
                                plans: {
                                    starter: '19',
                                    business: '29',
                                }
                            },
                            {
                                contacts: '10K',
                                plans: {
                                    starter: '29',
                                    business: '49',
                                }
                            },
                            {
                                contacts: '15K',
                                plans: {
                                    starter: '39',
                                    business: '59',
                                }
                            },
                            {
                                contacts: '1M',
                                plans: {
                                    starter: '1,490',
                                    business: '2,490',
                                }
                            },
                        ],
                        segmentsWidth: '100%',
                        progress: '0%',
                        segments: 1,
                        calculateProgress() {
                            this.segmentsWidth = 100 / this.segments + '%'
                            this.progress = 100 / this.segments * this.value + '%'
                        },
                        init() {
                            this.segments = this.prices.length - 1
                            this.calculateProgress()
                            this.$watch('value', () => this.calculateProgress())
                        },
                    }))
                })
</script>
@endpush