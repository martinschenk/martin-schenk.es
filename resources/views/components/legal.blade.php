<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
          content="En Martin Schenk te ayudamos a simplificar los procesos de tu negocio con los nuestros servicios informáticos: Desarrollo de software a medida y SaaS, Hosting/alojamiento de sus aplicaciónes y webs, Mantenimiento y adaptación, Alquiler de servidores VPS y dedicados, Consultoría SaaS y aplicaciones web.">
    <meta property="og:title"
          content="Simplifica tu negocio. Martin Schenk S.L., Madrid, España.">
    <meta property="og:description"
          content="En Martin Schenk te ayudamos a simplificar los procesos de tu negocio">
    <meta property="og:image" content="{{env('APP_URL')}}/img/logo-martin-schenk-dunkel.svg">
    <meta property="og:image:width" content="1200">

    <title class="">{{ $title ?? 'Aviso Legal' }}  {{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/martin-schenk-favicon.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/martin-schenk-favicon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="flex flex-col h-screen justify-between">
    <div class="flex-grow">
        {{ $slot }}
        <x-footer></x-footer>
    </div>
</div>



@include('cookie-consent::index')

</body>
</html>

