@extends('shop.layout')

@section('content')

<div class="w-full">
    <image src="{{ asset('assets/img/PLP_Banner_Mobile_1445x800_mothersday.jpg') }}" alt="" class="h-32 w-full md:h-60" />
</div>

@include('shop.components._filter')

<livewire:frontend.product.index />

@endsection