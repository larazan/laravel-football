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
        {{ is_active('home') ? '- The Laravel Community Portal' : '' }}
    </title>
    
    <meta name="description" content="The Laravel portal for problem solving, knowledge sharing and community building." />

    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('meta')

    <!-- CSS -->
    
    @stack('style')
</head>

<body>

@include('layouts._header')

@yield('content')

@include('layouts._footer')

@stack('modals')

@stack('js')

</body>
</html>