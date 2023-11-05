<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Descripción estándar para motores de búsqueda -->
    <meta name="description"
          content="{{ __('Martin Schenk S.L.: Experto en Aplicaciones Web de Alto Impacto y Bases de Conocimiento Potenciadas por IA') }}">

    <!-- Open Graph para redes sociales -->
    <meta property="og:title"
          content="{{ __('Martin Schenk - Transforma tu negocio con Aplicaciones Web de Alto Impacto') }}">
    <meta property="og:description"
          content="{{ __('Simplifica los procesos de tu negocio y mejora la experiencia del cliente con soluciones potenciadas por IA de Martin Schenk') }}">
    <meta property="og:image" content="{{ asset('/img/logo-martin-schenk-dunkel.svg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Tarjetas de Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('Martin Schenk - Desarrollador de Aplicaciones Web de Alto Impacto') }}">
    <meta name="twitter:description"
          content="{{ __('Revoluciona tu negocio con soluciones web personalizadas y potenciadas por IA de Martin Schenk') }}">
    <meta name="twitter:image" content="{{ asset('/img/logo-martin-schenk-dunkel.svg') }}">


   <title class="">{{ $title.' | ' ?? '' }}  {{ config('app.name', 'Martin Schenk S.L.') }}</title>


    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/martin-schenk-favicon.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/martin-schenk-favicon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col h-screen">


<!-- Main content -->
<div class="flex-grow">
   {{ $slot }}
</div>

<!-- Footer -->
<div>
   <x-footer></x-footer>
</div>

@include('cookie-consent::index')
</body>
</html>

