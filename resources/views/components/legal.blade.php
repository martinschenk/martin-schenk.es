<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="En Martin Schenk estamos ofreciendo los siguientes servicios informáticos: Desarrollo de software a medida y SaaS, Hosting/alojamiento de sus aplicaciónes y webs, Mantenimiento y adaptación, Alquiler de servidores VPS y dedicados, Consultoría SaaS y aplicaciones web.">

    <title class="">{{ $title ?? 'Aviso Legal' }}  {{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/martin-schenk-favicon.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/martin-schenk-favicon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="flex flex-col h-screen justify-between">

        {{ $slot }}

    </div>
    @include('cookie-consent::index')
</body>
</html>

