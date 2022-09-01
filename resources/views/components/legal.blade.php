<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title class="">{{ $title ?? 'Aviso Legal' }} - {{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/martin-schenk-favicon.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/martin-schenk-favicon.png') }}">

{{--    <!-- Fonts -->--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div>
    {{ $slot }}
</div>
@include('cookie-consent::index')
</body>
</html>

