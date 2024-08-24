@extends('shop.layout')

@section('content')

<main class="pt-[60px] md:pt-[80px] min-h-screen pt-162 h-full bg-white">

    <div class="max-w-5xl mx-auto">

       
        <div class="px-6 py-2 md:py-2 mb-5 min-h-[100px]">
            <div class="grid grid-cols-1">
                <div class="flex flex-col space-y-4">
                    <div class="flex items-center space-x-2">
                        <div><span class="text-lg md:text-2xl text-black font-semibold">Search:</span></div><span class="text-lg md:text-2xl text-black font-bold uppercase">{{ $search }}</span>
                    </div>
                     <!-- Tags -->
                    
                    
                </div>
            </div>
        </div>

    </div>
</main>

<livewire:newsletter-form />

@endsection