<div class="min-h-[calc(100vh-200px)] flex flex-col space-y-3 px-0 md:px-6 py-4 md:py-4 justify-center2 items-center2 bg-[#f5f7f9]">
    <div class="mx-auto w-full md:w-12/12 lg:w-1/2">
        <a
            href="/"
            class="flex space-x-1 items-center hover:opacity-80">
            <span class="text-lg md:text-2xl font-bold text-[#002f6c] uppercase">
                Wishlist
            </span>
        </a>

    </div>
    @forelse ($wishlist as $wishlistItem)
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-2 mx-auto w-full md:w-12/12 lg:w-1/2">
        @if ($wishlistItem->product)
        <a
            href="{{ url('shop/product/'. $wishlistItem->product->slug) }}"
            class="transform overflow-hidden m-3 bg-white border shadow duration-200 hover:scale-105 cursor-pointer">
            <div class="bg-[#f3f6f9] p-2">
                <image
                    width=500
                    height=500
                    src="{{ asset('assets/img/product/product1.png') }}"
                    alt="{{ $wishlistItem->product->name }}" />
            </div>
            <div class="p-2 text-black/[0.9]">
                <h2 class="text-base font-medium leading-tight">{{ $wishlistItem->product->name }}</h2>
                <div class="flex items-center text-black/[0.5]">
                    <p class="mr-2 text-lg text-gray-950 font-semibold">
                        &#8377;{{ $wishlistItem->product->price }}
                    </p>

                    <p class="text-base  font-medium line-through">
                        &#8377;{{ $wishlistItem->product->price }}
                    </p>

                </div>
            </div>
            <div class='flex w-full items-center'>
                <button class="flex w-full rounded2 py-2 bg-transparent items-center justify-center text-sm text-center border border-[#32e6e2] text-[#32e6e2] font-semibold cursor-pointer hover:bg-[#32e6e2] hover:text-slate-700 hover:border-slate-800">
                    Add to cart
                </button>
                <button wire:click="removeWishlistItem({{ $wishlistItem->id }})" class="flex w-full rounded2 py-2 bg-[#32e6e2] items-center justify-center text-sm text-center border border-[#32e6e2] text-[#181a1c] font-semibold cursor-pointer hover:bg-slate-700 hover:text-white">
                    <span wire:loading.remove>Remove</span>
                    <span wire:loading wire:target="removeWishlistItem">Removing...</span>
                </button>
            </div>
        </a>
        @endif
    </div>
    @empty
    <div class="flex justify-center items-center mx-auto w-full max-w-2xl">
        <span class="text-sm md:text-lg font-semibold">No Wishlist added</span>
    </div>
    @endforelse
</div>