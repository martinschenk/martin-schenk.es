<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- xx Descripción estándar para motores de búsqueda -->
   <meta name="description"
         content="Martin Schenk S.L.: Especialistas en el desarrollo de aplicaciones web a medida y soluciones integrales para negocios. Más de 20 años transformando ideas en realidades digitales eficaces.">

   <!-- Open Graph para redes sociales -->
   <meta property="og:title" content="Martin Schenk S.L. - Soluciones Web Innovadoras">
   <meta property="og:description"
         content="Descubre cómo Martin Schenk S.L. transforma las ideas en aplicaciones web personalizadas, con enfoque en innovación y eficiencia. Más de dos décadas creando soluciones digitales que marcan la diferencia.">
   <meta property="og:image" content="{{ asset('/img/logo-martin-schenk-dunkel.svg') }}">
   <meta property="og:image:width" content="1200">
   <meta property="og:image:height" content="630">
   <meta property="og:type" content="website">
   <meta property="og:url" content="{{ url()->current() }}">

   <!-- Tarjetas de Twitter -->
   <meta name="twitter:card" content="summary_large_image">
   <meta name="twitter:title" content="Martin Schenk S.L. - Expertos en Aplicaciones Web Personalizadas">
   <meta name="twitter:description"
         content="Martin Schenk S.L. se destaca en el desarrollo de aplicaciones web a medida, utilizando tecnologías avanzadas para ofrecer soluciones digitales únicas y eficaces.">
   <meta name="twitter:image" content="{{ asset('/img/logo-martin-schenk-dunkel.svg') }}">
   
   <!-- hreflang -->
   <link rel="alternate" hreflang="x-default" href="https://www.martin-schenk.es/en" />
   <link rel="alternate" hreflang="en" href="https://www.martin-schenk.es/en" />
   <link rel="alternate" hreflang="es" href="https://www.martin-schenk.es/es" />
   <link rel="alternate" hreflang="de" href="https://www.martin-schenk.es/de" />
   
   <title class="">{{ $title.' | ' ?? '' }}  {{ config('app.name', 'Martin Schenk S.L.') }}</title>

   <style>
      [x-cloak] {
         display: none !important;
      }
   </style>


   <link rel="shortcut icon" type="image/png" href="{{ asset('/img/martin-schenk-favicon.png') }}">
   <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/martin-schenk-favicon.png') }}">
   
   
   
   @livewireStyles
   @filamentStyles
   @vite('resources/css/app.css')
   
   
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

@livewireScripts
@livewire('notifications')
@filamentScripts
@vite('resources/js/app.js')
</body>
</html>

