@extends('shop.layout')

@section('content')

@include('shop.components._breadcrumb')

<livewire:frontend.product.detail :product="$product" />

@include('shop.components._suggest')

@endsection