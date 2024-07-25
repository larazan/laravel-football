<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <title>
        {{ isset($title) ? $title.' | ' : '' }}
        {{ config('app.name') }}
        {{ General::is_active('home') ? '- The Laravel Community Portal' : '' }}
    </title>
    
    <meta name="description" content="The Laravel portal for problem solving, knowledge sharing and community building." />
    
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.0/dist/cdn.min.js"></script>

    @stack('meta')

    @include('frontend.layouts._favicons')
    @include('frontend.layouts._social')

    <!-- CSS -->
    
    @stack('style')
</head>

<body>

@include('backend.layouts._header')
@include('frontend.components._gotop')

@yield('content')

@include('backend.layouts._footer')

@stack('modals')

@stack('js')

</body>
</html>