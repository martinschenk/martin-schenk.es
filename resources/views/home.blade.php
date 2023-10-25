@php
    $title1 = __('Desarrollo de Aplicaciones Web Avanzadas');
    $title2 = __('Hosting y Dominios Seguros');
    $title3 = __('Mantenimiento y Seguridad Web');
    $title4 = __('Soluciones de Servidor Fiables');
    $title5 = __('Consultoría y Estrategia Digital');
@endphp
<x-legal>
    <x-slot:title>{{ __('Aplicaciones Web de Alto Impacto: Transformamos Ideas en Realidad') }}</x-slot>

        <x-header headertitle="{{ __('Aplicaciones Web de Alto Impacto: Transformamos Ideas en Realidad') }}"/>

        <section class="font-sans antialiased max-w-md mx-auto md:max-w-2xl px-8 py-4 leading-tight">
            <div class="">
                <p>{{ __('Con más de tres décadas de experiencia profesional, mi enfoque se centra en la creación de soluciones web de alta complejidad. Desde bases de datos de conocimiento impulsadas por inteligencia artificial, hasta sistemas de gestión de reservas, ofrezco innovación y eficiencia en cada proyecto.') }}</p>

                <!-- Proyectos de Referencia -->
                <h2>{{ __('Proyectos de Referencia') }}</h2>
                <p>{{ __('Con más de 1.4 millones de páginas web creadas en Palimpalem.com, y proyectos de IA como ChatKraft, mi portafolio es una prueba de la versatilidad y robustez de mis soluciones.') }}</p>

                <!-- Desarrollo de Aplicaciones Web Avanzadas -->
                <h2 class="" id="{{ Str::slug($title1, '-') }}">{{ $title1 }}</h2>
                <p>
                <ul>
                    <li>{{ __('Su visión hecha realidad en la web, con un desarrollo ágil, seguro y completamente personalizado.') }}
                        <ul class="ml-6 list-inside list-decimal">
                            <li class="ml-6 mb-1 mt-3">{{ __('Consultoría estratégica inicial') }}</li>
                            <li class="ml-6 mb-1">{{ __('Diseño centrado en el usuario') }}</li>
                            <li class="ml-6 mb-1">{{ __('Desarrollo a medida con tecnologías de vanguardia') }}</li>
                            <li class="ml-6 mb-1">{{ __('Lanzamiento seguro y escalable') }}</li>
                            <li class="ml-6 mb-1">{{ __('Integración transparente con sistemas existentes') }}</li>
                        </ul>
                    </li>
                </ul>
                </p>

                <!-- Logo and Technology Section -->
                <h2>{{ __('Tecnologías y Herramientas') }}</h2>
                <p>{{ __('Utilizo una variedad de tecnologías de vanguardia y lenguajes de programación para ofrecer soluciones eficientes y personalizadas.') }}</p>
                <div class="flex flex-wrap space-x-10 mt-5">
                    <img src="{{ asset('/img/logo-laravel.svg') }}" alt="Laravel" class="w-24">
                    <img src="{{ asset('/img/logo-livewire.svg') }}" alt="Livewire" class="w-24">
                    <img src="{{ asset('/img/logo-alpine.svg') }}" alt="Alpine" class="w-28">
                    <img src="{{ asset('/img/logo-tailwind.svg') }}" alt="Tailwind" class="w-32">
                    <img src="{{ asset('/img/logo-php.svg') }}" alt="PHP" class="w-[70px] h-20">
                    <div class="w-20 h-20 transform scale-115">
                        @include('svg.logo-filament', ['color' => 'black'])
                    </div>
                </div>

                <!-- Otros Servicios Section -->
                <h2 class="">{{ __('Otros Servicios') }}</h2>

                <!-- Hosting y dominios Section -->
                <h3 class="" id="{{ Str::slug($title2, '-') }}">{{ $title2 }}</h3>
                <p>
                <ul>
                    <li>{{ __('Tu dominio es tu dirección única en internet, te ayudo a seleccionar el nombre perfecto para tu negocio.') }}</li>
                    <li>{{ __('Hosting rápido y seguro, con garantía de tiempo de actividad del 99.9%, para que tu sitio esté siempre disponible.') }}</li>
                </ul>
                </p>

                <!-- Mantenimiento Section -->
                <h3 class="" id="{{ Str::slug($title3, '-') }}">{{ $title3 }}</h3>
                <p>
                <ul>
                    <li>{{ __('Asegura el óptimo funcionamiento de tu sitio web con un mantenimiento regular.') }}</li>
                    <li>{{ __('Actualizaciones regulares para garantizar la seguridad y el rendimiento de tu sitio.') }}</li>
                </ul>
                </p>

                <!-- Alquiler de servidores Section -->
                <h3 class="" id="{{ Str::slug($title4, '-') }}">{{ $title4 }}</h3>
                <p>
                <ul>
                    <li>{{ __('Alquila servidores de alta calidad para un rendimiento sin igual.') }}</li>
                    <li>{{ __('Soporte técnico disponible para garantizar el máximo tiempo de actividad.') }}</li>
                </ul>
                </p>

                <!-- Consultoría y estrategia digital Section -->
                <h3 class="" id="{{ Str::slug($title5, '-') }}">{{ $title5 }}</h3>
                <p>
                <ul>
                    <li>{{ __('Maximice el impacto de su negocio con soluciones tecnológicas actualizadas.') }}</li>
                    <li>{{ __('Confíe en la experiencia y la visión para una estrategia digital sólida.') }}</li>
                </ul>
                </p>
            </div>


            <!-- Saludos y Firma -->
            <div class="mt-12">
                <div class="text-lg">{{ __('Saludos, Martin') }}</div>
                {{--<img class="mt-2 w-[160px]" src="{{ asset('/img/martin-firma-500-azul.png') }}"
                     alt="{{ __('Firma de Martin Schenk') }}">--}}
            </div>

            <!-- Footer con información de contacto -->
            <div class="text-sm text-gray-600 mt-12 mb-5">
                <hr>
                <div>{{ __('Martin Schenk') }}</div>
                <div class="mb-3">{{ __('Diplom-Ingenieur Automatisierungstechnik (FH)') }}</div>
                <div>{{ __('Martin Schenk S.L.') }}</div>
                <div>{{ __('Calle de la Hiruela 3, 7–5') }}</div>
                <div>{{ __('28035 Madrid') }}</div>
                <div>{{ __('martin@martin-schenk.es') }}</div>
                <div>{{ __('www.martin-schenk.es') }}</div>
                <div>{{ __('Móvil 669 686 832') }}</div>
            </div>
        </section>

    {{--@include('components.footer')--}}

</x-legal>


