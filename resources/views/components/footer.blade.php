@php
    // Definir la URL base de la aplicación para usarla en los enlaces del pie de página
    $linkurl = env('APP_URL');
@endphp

    <!-- Pie de página de la página web -->
<footer class="bg-hellgrau p-5 pb-4 pt-4">

    <!-- Logo de la empresa -->
    <a href="/">
        <img class="w-20 md:w-30 lg:w-36 xl:42 mb-6 pt-4 xmb-2" src="/img/Logo-Martin-Schenk-white-bg.png" alt="Martin Schenk S.L.">
    </a>

    <!-- Información de contacto -->
    <p class="text-center text-sm text-textkleingrau mb-3">
        Contacto email: hola@martin-schenk.es ó tel: (+34) 669 686 832
    </p>

    <!-- Enlaces legales en el pie de página -->
    <div class="flex items-center justify-center whitespace-nowrap text-sm text-textkleingrau mb-3">
        <!-- Aviso legal -->
        <div class="mr-6">
            <a class="underline" href="{{ $linkurl }}aviso-legal">Aviso Legal</a>
        </div>
        <!-- Política de privacidad -->
        <div class="mr-6">
            <a class="underline" href="{{ $linkurl }}politica-privacidad">Política de Privacidad</a>
        </div>
        <!-- Política de cookies -->
        <div>
            <a class="underline" href="{{ $linkurl }}politica-cookies">Política de Cookies</a>
        </div>
    </div>

    <!-- Derechos de autor y año -->
    <div class="mb-4 text-xs text-center text-gray-500">
        © 1999 - 2023 Martin Schenk S.L., Madrid, España
    </div>

</footer>
