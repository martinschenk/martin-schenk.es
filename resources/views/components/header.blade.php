<header>

    <section class="bg-no-repeat bg-right w-full flex justify-center items-center relative" style="background-image: url('{{ asset('/img/robot4.png') }}'); background-color: #22C0A2; min-height: 120px; max-height: 120px; background-size: auto 100%;">

        <a href="{{ asset('/') }}" style="position: absolute; top: 5px; left: 5px;">
            <img class="w-28 md:w-34 lg:w-40 mt-3 ml-5" src="{{ asset('/img/logo-schenk-dunkel-transp-1999-2023v3.svg') }}" alt="{{ __('Martin Schenk S.L. desde 1999') }}">
        </a>

        <div class="text-center  ">
            <h1 class="  mt-1 mb-0 text-gray-100">{{ $headertitle }}</h1>
        </div>
    </section>

    {{--<section>
        <img class="w-full h-6 object-fill object-center" src="{{ asset('/img/bottom-rund-hellblau.png') }}">
    </section>--}}

</header>
