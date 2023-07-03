<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://unpkg.com/claymorphism-css/dist/clay.css"/>


    <!-- Scripts -->
    @vite(['resources/scss/main.scss', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.includes.header')
    {{ $slot }}
    @include('layouts.includes.footer')
    <script src="https://kit.fontawesome.com/2ac7f45686.js" crossorigin="anonymous"></script>
    <script>
        window.addEventListener("scroll", () => {
            document.querySelector('.header').classList.toggle("sticky", window.scrollY > 0);
        });
    </script>
</body>
</html>
