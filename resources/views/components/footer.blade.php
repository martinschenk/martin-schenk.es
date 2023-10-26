{{-- Footer Blade --}}
@php
    $linkurl = env('APP_URL');
@endphp

<footer class="bg-no-repeat bg-right w-full flex flex-col items-center justify-center p-5 pb-4 pt-4 relative"
        style="background-image: url('{{ asset('/img/robot4.png') }}'); background-color: #22C0A2; min-height: 120px; max-height: auto; background-size: auto 100%;">

    {{-- Company Logo --}}
    <a href="/">
        <img class="w-20 md:w-30 lg:w-36 xl:42 mb-6 pt-4"
             src="{{ asset('/img/logo-schenk-dunkel-transp-1999-2023v3.svg') }}"
             alt="{{ __('Martin Schenk S.L. desde 1999') }}">
    </a>

    {{-- Contact Information --}}
    <p class="text-center text-sm text-white mb-3">
        Contacto email: hola@martin-schenk.es ó tel: (+34) 669 686 832
    </p>

    {{-- Legal Links --}}
    <div class="flex items-center justify-center whitespace-nowrap text-sm text-white mb-3">
        {{-- Legal Notice --}}
        <div class="mr-6">
            <a class="underline text-gray-50" href="{{ $linkurl }}aviso-legal">{{ __('Aviso Legal') }}</a>
        </div>
        {{-- Privacy Policy --}}
        <div class="mr-6">
            <a class="underline text-gray-50"
               href="{{ $linkurl }}politica-privacidad">{{ __('Política de Privacidad') }}</a>
        </div>
        {{-- Cookie Policy --}}
        <div>
            <a class="underline text-gray-50" href="{{ $linkurl }}politica-cookies">{{ __('Política de Cookies') }}</a>
        </div>
    </div>

    {{-- Copyright --}}
    <div class="mb-4 text-xs text-center text-white">
        © 1999 - 2023 Martin Schenk S.L., Madrid, España
    </div>

</footer>
