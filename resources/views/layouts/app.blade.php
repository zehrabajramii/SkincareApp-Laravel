<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-pink-100">
    <div class="min-h-screen">
        @include('layouts.navigation') <!-- ✅ This includes the correct navbar -->

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-pink-500 text-white text-center py-4 shadow-md rounded-md">
                <div class="max-w-7xl mx-auto px-4">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main class="py-8">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
