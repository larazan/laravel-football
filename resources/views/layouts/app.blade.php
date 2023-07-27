<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="{{ URL::asset('admin/css/style.css') }}" rel="stylesheet" />
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    @stack('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

</head>

<body class="font-inter antialiased bg-slate-100 text-slate-600" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">
    <!-- <x-banner /> -->
    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <div class="flex h-screen overflow-hidden ss la ">

        <x-app.sidebar />

        <!-- Content area -->
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden @if($attributes['background']){{ $attributes['background'] }}@endif y flex ak ug ll lc bg-white" x-ref="contentarea">

            <x-app.header />

            <main>
                {{ $slot }}
            </main>

        </div>

    </div>

    @stack('modals')

    @livewireScripts
    @stack('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

    <script>
        window.addEventListener('banner-message', event => {
            toastr[event.detail.style](event.detail.message,
                event.detail.title ?? ''), toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
        });
    </script>

</body>

</html>