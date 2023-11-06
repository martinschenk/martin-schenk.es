{{-- Footer Blade --}}
@php
   $linkUrl = config('url');
@endphp

<footer class="bg-dunkelgruen w-full flex flex-col items-center justify-center p-6 text-white text-sm">
   {{-- Company Logo --}}
   <div class="mb-4">
      <a href="{{ asset('/') }}">
         <img class="w-36 md:w-44 lg:w-52"
              src="{{ asset('/img/logo-schenk-hell-transp-c1999-v8.svg') }}"
              alt="{{ __('Martin Schenk S.L.') }}">
      </a>
   </div>

   {{-- Contact Information --}}
   <p class="text-center mb-4">
      Contacto email: hola@martin-schenk.es ó tel: (+34) 669 686 832
   </p>

   {{-- Legal Links --}}
   <div class="flex items-center justify-center mb-4">
      {{-- Legal Notice --}}
      <a class="underline mx-3 text-gruen hover:text-gray-300"
         href="{{ $linkUrl }}aviso-legal">{{ __('Aviso Legal') }}</a>
      {{-- Privacy Policy --}}
      <a class="underline mx-3 text-gruen hover:text-gray-300"
         href="{{ $linkUrl }}politica-privacidad">{{ __('Política de Privacidad') }}</a>
      {{-- Cookie Policy --}}
      <a class="underline mx-3 text-gruen hover:text-gray-300"
         href="{{ $linkUrl }}politica-cookies">{{ __('Política de Cookies') }}</a>
   </div>

   {{-- Copyright --}}
   @php
      $currentYear = date('Y');
   @endphp
   <div class="text-xs text-center">
      © 1999 - {{ $currentYear }} Martin Schenk S.L., Madrid, España
   </div>
</footer>
