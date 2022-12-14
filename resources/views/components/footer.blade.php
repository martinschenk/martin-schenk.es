    @php
        $linkurl = env('APP_URL');
    @endphp

    <footer class="bg-hellgrau p-5 pb-4 pt-4">



    {{--        {{ $slot }}--}}
            <a href="/">
                <img class="mb-6 pt-4 w-24 md:w-32 lg:w-40 xmb-2" src="/img/Logo-Martin-Schenk-white-bg.png"
                alt="Martin Schenk S.L.">
            </a>

            <p class="text-center text-sm text-textkleingrau mb-3">
                Contacto email: hola@martin-schenk.es ó tel: (+34) 669 686 832
            </p>


            <div class="flex items-center justify-center whitespace-nowrap text-sm text-textkleingrau mb-3">
                <div class=" mr-6">
                    <a class="underline"  class="whitespace-nowrap" href="{{ $linkurl }}aviso-legal">Aviso Legal</a>
                </div>
                <div class=" mr-6 ">
                    <a class="underline"  class="" href="{{ $linkurl }}politica-privacidad">Política de Privacidad</a>
                </div>
                <div class="  ">
                    <a class="underline"  class=" align-bottom" href="{{ $linkurl }}politica-cookies">Política de Cookies</a>
                </div>

            </div>

            <div class="mb-4 text-xs text-center text-gray-500">
                © 1999 - 2022 Martin Schenk S.L., Madrid, España
            </div>


    </footer>
