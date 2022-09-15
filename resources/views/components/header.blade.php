@php
    $linkurl = env('APP_URL');
@endphp

<header>

    <section class="bg-hellblau bg-cover pt-5 pl-5 pr-5 pb-2 bp-0 w-full" >
        <div class="flex items-start">
            <a href="/">
                <img class="w-24 md:w-32 lg:w-40 xmb-2" src="/img/Logo-Martin-Schenk-white-bg.png" alt="Martin Schenk S.L.">
            </a>

        </div>

        <div class="text-dunkelgruen text-center ">
            <h1 class="h1-normal font-title mt-1 mb-0">{{ $headertitle }}</h1>
        </div>
    </section>

    <section>
        <img class="w-full h-6  object-fill object-center" src="/img/bottom-rund-hellblau.png">
    </section>

</header>
