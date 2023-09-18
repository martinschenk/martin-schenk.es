<x-legal>
    <x-slot:title></x-slot>

        @php
            $title1 = __('Desarrollo de software personalizado');
            $title2 = __('Hosting y dominios');
            $title3 = __('Mantenimiento');
            $title4 = __('Alquiler de servidores');
            $title5 = __('Consultoría tecnológica');
        @endphp

        @component('components.header')
            @slot('headertitle')
                <p class="md:text-3xl text-2xl text-['#1A3336'] font-black mt-6">
            <span class="" style="z-index: 1;position: relative;">
                {{--<img style="margin-left: 50%; width: 50%; position: absolute; top:-10px; left: 0; z-index: -1; vertical-align: middle; max-width: 100%;" src="img/texto-circulo-big.svg" alt="" width="" loading="lazy">--}}
                {{ __('Software a tu medida, creado con maestría.') }}
            </span>
                </p>
            @endslot
        @endcomponent

        <section class="">
            <div class="font-sans antialiased max-w-md mx-auto md:max-w-2xl px-8 py-4">
                <p>{{ __('En Martin Schenk, estoy aquí para impulsar tu negocio hacia el futuro con soluciones de software personalizado.') }}</p>
                <ul>
                    <li><a href="#{{ Str::slug($title1, '-') }}" class="text-[#26CD9C] hover:underline">{{$title1}}</a></li>
                    <li><a href="#{{ Str::slug($title2, '-') }}" class="text-[#26CD9C] hover:underline">{{$title2}}</a></li>
                    <li><a href="#{{ Str::slug($title3, '-') }}" class="text-[#26CD9C] hover:underline">{{$title3}}</a></li>
                    <li><a href="#{{ Str::slug($title4, '-') }}" class="text-[#26CD9C] hover:underline">{{$title4}}</a></li>
                    <li><a href="#{{ Str::slug($title5, '-') }}" class="text-[#26CD9C] hover:underline">{{$title5}}</a></li>
                </ul>
                <p>{{ __('Hablo Español, Alemán e Inglés.') }}</p>

                <h2 class="" id="{{ Str::slug($title1, '-') }}">{{ $title1 }}</h2>
                <p>
                <ul>
                    <li>{{ __('Tu proyecto, desde la idea hasta la ejecución, respaldado por más de 30 años de experiencia:') }}
                        <ul class="ml-6 list-inside list-decimal">
                            <li class="ml-6 mb-1 mt-3">{{ __('Planificación estratégica') }}</li>
                            <li class="ml-6 mb-1">{{ __('Diseño integral') }}</li>
                            <li class="ml-6 mb-1">{{ __('Desarrollo a medida') }}</li>
                            <li class="ml-6 mb-1">{{ __('Lanzamiento exitoso') }}</li>
                            <li class="ml-6 mb-1">{{ __('Expansión con módulos adicionales') }}</li>
                        </ul>
                    </li>
                    <li>{{ __('Soy tu aliado estratégico en la creación de soluciones únicas que se ajustan a las necesidades específicas de tu negocio, evitando las limitaciones de los sistemas estándar.') }}</li>
                    <!-- (Considera agregar ejemplos específicos de cómo has ayudado a otras empresas a alcanzar sus metas a través de soluciones personalizadas) -->
                </ul>
                </p>


                <h2 class="" id="{{ Str::slug($title2, '-') }}">{{ $title2 }}</h2>
                <p>
                <ul>
                    <li>{{ __('Tu dominio es tu dirección única en internet, te ayudo a seleccionar el nombre perfecto para tu negocio.') }}</li>
                    <li>{{ __('Hosting rápido y seguro, con garantía de tiempo de actividad del 99.9%, para que tu sitio esté siempre disponible.') }}</li>
                    <!-- (Mencionar aquí otros beneficios clave del servicio de hosting y dominios que ofreces, como el soporte técnico, backups regulares, etc.) -->
                </ul>
                </p>

                <h2 class="" id="{{ Str::slug($title3, '-') }}">{{ $title3 }}</h2>
                <p>
                <ul>
                    <li>{{ __('Asegura el óptimo funcionamiento de tu sitio web con un mantenimiento regular.') }}</li>
                    <li>{{ __('Actualizaciones regulares para garantizar la seguridad y el rendimiento de tu sitio.') }}</li>
                    <!-- (Detalla aquí otros servicios incluidos en el mantenimiento, como la optimización del SEO, supervisión de la salud del sitio, etc.) -->
                </ul>
                </p>

                <h2 class="" id="{{ Str::slug($title4, '-') }}">{{ $title4 }}</h2>
                <p>
                <ul>
                    <li>{{ __('Alquila servidores de alta calidad para un rendimiento sin igual.') }}</li>
                    <li>{{ __('Soporte técnico disponible para garantizar el máximo tiempo de actividad.') }}</li>
                    <!-- (Podrías incluir información adicional sobre las especificaciones técnicas de los servidores y las ventajas competitivas que ofreces aquí.) -->
                </ul>
                </p>

                <h2 class="" id="{{ Str::slug($title5, '-') }}">{{ $title5 }}</h2>
                <p>
                <ul>
                    <li>{{ __('Asesoramiento experto para tomar las decisiones tecnológicas correctas para tu negocio.') }}</li>
                    <li>{{ __('Transforma tu negocio con soluciones tecnológicas avanzadas y personalizadas.') }}</li>
                    <!-- (Mencionar aquí cómo tu experiencia puede ayudar a las empresas a evitar trampas comunes y a elegir las soluciones más efectivas.) -->
                </ul>
                </p>
            </div>
        </section>

    @component('components.footer')
        @slot('footerText')
            {{ __('© 2023 Martin Schenk - Todos los derechos reservados') }}
        @endslot
    @endcomponent
</x-legal>


{{--<script type="module">--}}
{{--    import { annotate } from 'https://unpkg.com/rough-notation?module';--}}

{{--    const n1 = document.querySelector('circ');--}}
{{--    // const n2 = document.querySelector('strong');--}}
{{--    // const n3 = document.querySelector('h1');--}}
{{--    // const n4 = document.querySelector('span');--}}
{{--    // const n5 = document.querySelector('#block');--}}

{{--    const a1 = annotate(n1, { type: 'circle', color: '#24CD9C', padding: 8 });--}}
{{--    // const a2 = annotate(n2, { type: 'circle', color: 'red', padding: 10 });--}}
{{--    // const a3 = annotate(n3, { type: 'box', color: 'orange' });--}}
{{--    // const a4 = annotate(n4, { type: 'highlight', color: 'yellow', iterations: 1, multiline: true });--}}
{{--    // const a5 = annotate(n5, { type: 'bracket', color: 'red', padding: [2, 10], brackets: ['left', 'right'], strokeWidth: 3 })--}}

{{--    a1.show();--}}
{{--    // a2.show();--}}
{{--    // a3.show();--}}
{{--    // a4.show();--}}
{{--    // a5.show();--}}

{{--</script>--}}
