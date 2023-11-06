{{-- Footer Blade --}}
@php
   $linkUrl = config('url');
@endphp

<footer class="bg-mittelgruen w-full flex flex-col items-center justify-center p-5 pb-4 pt-4 relative">

    {{-- Company Logo --}}
    <a href="{{ asset('/') }}" class="ml-4">
        <img class="w-28 sm:w-28 md:w-34 lg:w-40 xl:w-44 2xl:w-48"
             src="{{ asset('/img/logo-schenk-hell-transp-c1999-v8.svg') }}"
             alt="{{ __('Martin Schenk S.L.') }}">
    </a>

    {{-- Contact Information --}}
    <p class="text-center text-sm text-white mb-3">
        Contacto email: hola@martin-schenk.es ó tel: (+34) 669 686 832
    </p>

    {{-- Legal Links --}}
    <div class="flex items-center justify-center whitespace-nowrap text-sm text-white mb-3">
        {{-- Legal Notice --}}
        <div class="mr-6">
           <a class="underline text-gray-50" href="{{ $linkUrl }}aviso-legal">{{ __('Aviso Legal') }}</a>
        </div>
        {{-- Privacy Policy --}}
        <div class="mr-6">
            <a class="underline text-gray-50"
               href="{{ $linkUrl }}politica-privacidad">{{ __('Política de Privacidad') }}</a>
        </div>
        {{-- Cookie Policy --}}
        <div>
           <a class="underline text-gray-50" href="{{ $linkUrl }}politica-cookies">{{ __('Política de Cookies') }}</a>
        </div>
    </div>

    {{-- Copyright --}}
    <div class="mb-4 text-xs text-center text-white">
        © 1999 - 2023 Martin Schenk S.L., Madrid, España
    </div>

</footer>
