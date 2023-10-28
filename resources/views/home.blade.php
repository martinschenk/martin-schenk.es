@php
    $title0 = __('Impacto Digital: De la Idea a la Realidad');
    $title1 = __('Desarrollo de Aplicaciones Web Avanzadas');
    $title6 = __('Proyectos Representativos');
    $title2 = __('Hosting y Dominios Seguros');
    $title3 = __('Mantenimiento y Seguridad Web');
    $title4 = __('Soluciones de Servidor Fiables');
    $title5 = __('Consultoría y Estrategia Digital');
@endphp
<x-legal>
    <x-slot:title>{{ $title0 }}</x-slot>

        <x-header headertitle="{{ $title0 }}"/>

        <section class="font-sans antialiased max-w-md mx-auto md:max-w-2xl px-8 py-4 xleading-tight">
            <div class="mt-8">
                <p>{{ __('Con más de 20 años de experiencia, me dedico a transformar ideas en soluciones web innovadoras y eficientes. Mi enfoque es simple: tu visión, hecha realidad.') }}</p>




                <!-- Desarrollo de Aplicaciones Web Avanzadas -->
                <h2 class="mt-14" id="{{ Str::slug($title1, '-') }}">{{ $title1 }}</h2>
                <div class="container mx-auto px-4">
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

                    <!-- Tecnologías y Herramientas -->
                    <h3 class="mt-8">{{ __('Tecnologías y Herramientas') }}</h3>
                    <div class="container mx-auto px-4">
                        <p>{{ __('Utilizo una variedad de tecnologías de vanguardia y lenguajes de programación para ofrecer soluciones eficientes y personalizadas.') }}</p>
                        <div class="flex flex-wrap space-x-6 mt-5 ">
                            <img src="{{ asset('/img/logo-laravel.svg') }}" alt="Laravel" class="w-24 mr-2">
                            <img src="{{ asset('/img/logo-livewire.svg') }}" alt="Livewire" class="w-24 mr-2">
                            <img src="{{ asset('/img/logo-alpine.svg') }}" alt="Alpine" class="w-28 mr-2">
                            <img src="{{ asset('/img/logo-tailwind.svg') }}" alt="Tailwind" class="w-32 mr-2">
                            <img src="{{ asset('/img/logo-php.svg') }}" alt="PHP" class="w-[70px] h-20">
                            <div class="w-20  transform scale-115">
                                @include('svg.logo-filament', ['color' => 'black'])
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proyectos Representativos -->
                <h2 class="mt-14" id="{{ Str::slug($title6, '-') }}">{{ $title6 }}</h2>
                <div class="container mx-auto px-4">
                    <div
                            class="text-xl font-semibold mb-4">{{ __('Mi experiencia en el campo del desarrollo de software es diversa y orientada a las necesidades individuales de cada cliente. Algunos proyectos destacados incluyen:') }}</div>

                    <ul class="list-disc pl-8">

                        <li class="mb-2">
                            <strong>{{ __('Plataforma para la Creación de Páginas Web (Website Builder):') }}</strong>
                            {{ __('Con más de 1.4 millones de páginas creadas, Palimpalem fue mi primer gran proyecto propio y demuestra la robustez y versatilidad de mis soluciones. Lanzado entre 2004-2005, el sistema experimentó un crecimiento explosivo en sus primeros años, alcanzando un promedio de 500 altas diarias. La gran desafío fue escalar el sistema para soportar esta demanda. Genera ingresos a través de publicidad de Google Adsense y otros parecidos, en páginas de usuarios gratuitos, mientras que los clientes que pagan disfrutan de funcionalidades adicionales como la ausencia de publicidad, capacidad para más páginas y más almacenamiento para multimedia. También ofrece integración de dominios y herramientas de SEO. Aunque el sistema necesita una actualización completa, todavía cuenta con una base de usuarios leales que han alojado sus páginas web durante casi dos décadas. Actualmente, lo sigo manteniendo aunque ha estado muchos años sin actualizaciones.') }}
                        </li>


                        <li class="mb-2">
                            <strong>{{ __('ChatKraft - Inteligencia Artificial en Acción:') }}</strong>
                            {{ __('Este no es simplemente un chatbot, sino una base de conocimiento impulsada por IA que automatiza y optimiza la experiencia del cliente y las operaciones internas. Utiliza algoritmos de aprendizaje profundo para comprender y responder a las consultas en tiempo real, ofreciendo así respuestas más precisas y soluciones más efectivas. ChatKraft también se integra de manera transparente con diversas bases de datos y sistemas de back-end, haciendo que la implementación sea sencilla y efectiva.') }}
                        </li>

                        <li class="mb-2">
                            <strong>{{ __('Plataformas de Emparejamiento Laboral para Interim Managers:') }}</strong>
                            {{ __('Este sistema avanzado funciona como un puente entre oportunidades laborales y Interim Managers altamente calificados. Los Interim Managers llenan un formulario detallado que abarca tanto su experiencia profesional como aspectos psicológicos. Utilizando un algoritmo de comparación sofisticado, el sistema escanea continuamente la base de datos de ofertas de empleo y compara los perfiles de los Interim Managers con las vacantes disponibles. Mediante un sistema de puntuación multifacético, el algoritmo genera listas de los candidatos que mejor coinciden con cada oferta de empleo. El núcleo del sistema radica en su capacidad para realizar comparaciones profundas y precisas, ofreciendo así emparejamientos altamente optimizados entre los Interim Managers y las oportunidades laborales.') }}
                        </li>

                        <li class="mb-2">
                            <strong>{{ __('Herramientas de Valoración de Marcas para Multinacionales:') }}</strong>
                            {{ __('Diseñado para las grandes firmas de auditoría (Wirtschaftsprüfungsgesellschaften) del mundo, este sistema SaaS resuelve el complejo desafío de valorar marcas de gran envergadura, como aerolíneas o cerveceras, para sus balances contables. El sistema proporciona una base de datos exhaustiva que recoge valoraciones de miles de marcas multinacionales. Los auditores pueden realizar búsquedas avanzadas por diversas variables como gama de producto, facturación y beneficios, y acceder a estadísticas detalladas y desviaciones estándar para marcas similares. Estas métricas estadísticas y comparativas facilitan el proceso de valoración y a menudo se incorporan en los informes oficiales para respaldar la tasación. Creado y mantenido desde cero alrededor del año 2020, el sistema ha añadido módulos nuevos y ha sido alojado y mantenido por mí durante sus primeros cuatro años de existencia.') }}
                        </li>


                        <li class="mb-2">
                            <strong>{{ __('Sistemas de Reservas:') }}</strong>
                            {{ __('Desarrollo de sistemas de reserva personalizados para gimnasios y escape rooms.') }}
                        </li>

                        <li class="mb-2">
                            <strong>{{ __('Tienda Online para Fábrica de Frutas Deshidratadas:') }}</strong>
                            {{ __('Diseñada para maximizar la eficiencia en ventas y administración, esta tienda online construida con Shopify ofrece una solución completa para una fábrica de frutas deshidratadas. El proyecto abarca desde el proceso de ventas hasta la administración de pedidos, incluyendo estrategias de marketing integradas para impulsar el crecimiento.') }}
                        </li>

                        <li class="mb-2">
                            <strong>{{ __('Mercado para Periodistas Freelance:') }}</strong>
                            {{ __('Una aplicación que permite a los periodistas vender sus reportajes y artículos directamente a medios de comunicación a través de un sistema de pujas.') }}
                        </li>
                    </ul>
                </div>



                <!-- Otros Servicios Section -->
                <h2 class="mt-14">{{ __('Otros Servicios') }}</h2>

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


