@php
    $linkurl = env('APP_URL');
@endphp

<header>

    <section class="bg-hellblau bg-cover p-5 w-full h-full">
        <div class="flex items-start">
            <img class="w-24 md:w-32 lg:w-40 xmb-2" src="/img/Logo-Martin-Schenk-white-bg.png" alt="Martin Schenk S.L.">
            {{--        <div class="text-gray-700 font-thin text-sm"  >--}}
            {{--            Programación, Alojamiento, Mantenimiento.--}}
            {{--        </div>--}}

{{--            <a class="ml-auto" href="">--}}
{{--                <div class="space-y-2">--}}
{{--                    <div class="w-8 h-0.5 bg-gray-600"></div>--}}
{{--                    <div class="w-8 h-0.5 bg-gray-600"></div>--}}
{{--                    <div class="w-8 h-0.5 bg-gray-600"></div>--}}
{{--                </div>--}}
{{--            </a>--}}
        </div>

        <div class="text-dunkelgruen text-center ">
            <h1 class="h1-normal font-title">{{ $title }}</h1>
        </div>
    </section>

    <section>
        <img class="w-full h-6  object-fill object-center" src="/img/bottom-rund-hellblau.png">
    </section>

</header>