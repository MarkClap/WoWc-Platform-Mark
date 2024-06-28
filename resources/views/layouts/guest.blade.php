<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scrollbar scrollbar-thumb-primary scrollbar-w-2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts in public laravel-->
    <link rel="stylesheet" href="{{ asset('font/Inter/') }}">
    

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scripts')

    <!-- Styles -->
    @livewireStyles
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
    <!-- MDB -->
</head>

<body class="flex flex-col min-h-screen">
    <div class="min-h-screen flex flex-col font-sans text-base-content antialiased">
        {{ $slot }}
    </div>

    @livewireScripts
</body>

</html>
