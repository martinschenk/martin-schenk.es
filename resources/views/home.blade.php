@php
   $headerTitle =  __('De la Idea a la Solución');
@endphp

<x-legal>
   <x-slot:title>{{ $headerTitle }}</x-slot>

      <x-header headertitle="{{ $headerTitle }}"/>

      <!-- Hero Section -->
      <section class="text-gray-700 ">
         <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <div class="text-center lg:w-2/3 w-full">
               <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                  {{ __('Transformamos Ideas en Aplicaciones Web Innovadoras') }}
               </h1>
               <p class="mb-8 leading-relaxed">
                  {{ __('En Martin Schenk S.L., llevamos más de 20 años convirtiendo ideas en soluciones web efectivas y personalizadas. Tu visión, convertida en realidad.') }}
               </p>
               <div class="flex justify-center">
                  <button
                     class="inline-flex text-white bg-mittelgruen border-0 py-2 px-6 focus:outline-none hover:bg-teal-600 rounded text-lg">
                     {{ __('Contáctanos') }}
                  </button>
                  <a href="#proyectos-representativos"
                     class="ml-4 inline-flex items-center justify-center text-gray-700 bg-grau border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 hover:text-gray-800 rounded text-lg no-underline">
                     {{ __('Ver Proyectos') }}
                  </a>

               </div>
            </div>
            <!-- Professional and inviting image -->
            {{-- <img class="lg:w-5/6 md:w-1/2 w-full rounded-lg mt-10" src="{{ asset('/images/professional-team.jpg') }}" alt="Professional Web Development Team"> --}}
         </div>
      </section>

      <!-- Services Section -->
      <section class="text-gray-600 border-t border-gray-200">
         <div class="container px-5 py-16 mx-auto md:py-12 sm:py-8">
            <div class="text-center mb-20 md:mb-16 sm:mb-12">
               <h2 class="text-3xl font-title font-medium text-gray-900 sm:text-2xl mb-4">
                  {{ __('Nuestros Servicios') }}
               </h2>
            </div>

            <div class="flex flex-wrap -m-4">
               <div class="flex flex-col p-4 lg:w-1/4 md:w-1/2 w-full">
                  <div class="flex-grow border-2 border-gray-200 px-4 py-6 rounded-lg md:px-3 md:py-4 sm:px-2 sm:py-3">
                     <x-heroicon-o-light-bulb class="text-mittelgruen w-12 h-12 mb-3 inline-block"/>
                     <h3 class="">
                        {{ __('Aplicaciones Web a Medida') }}
                     </h3>
                     <p class="md:text-sm sm:text-xs">
                        {{ __('Desarrollo personalizado para materializar tus ideas en soluciones web únicas y eficientes.') }}
                     </p>
                  </div>
               </div>
               <div class="flex flex-col p-4 lg:w-1/4 md:w-1/2 w-full">
                  <div
                     class="flex-grow border-2 border-gray-200 px-4 py-6 rounded-lg md:px-3 md:py-4 sm:px-2 sm:py-3">
                     <x-heroicon-o-puzzle-piece class="text-mittelgruen w-12 h-12 mb-3 inline-block"/>
                     <h3 class="md:text-lg sm:text-base">
                        {{ __('Soluciones Integrales') }}
                     </h3>
                     <p class="md:text-sm sm:text-xs">
                        {{ __('Servicios completos desde el diseño hasta el lanzamiento, asegurando una experiencia digital sin fisuras.') }}
                     </p>
                  </div>
               </div>
               <div class="flex flex-col p-4 lg:w-1/4 md:w-1/2 w-full">
                  <div
                     class="flex-grow border-2 border-gray-200 px-4 py-6 rounded-lg md:px-3 md:py-4 sm:px-2 sm:py-3">
                     <x-heroicon-o-chat-bubble-left-right class="text-mittelgruen w-12 h-12 mb-3 inline-block"/>
                     <h3 class="md:text-lg sm:text-base">
                        {{ __('Mantenimiento') }}
                     </h3>
                     <p class="md:text-sm sm:text-xs">
                        {{ __('Actualizaciones regulares y soporte técnico para garantizar el rendimiento óptimo y la longevidad de tu proyecto web.') }}
                     </p>
                  </div>
               </div>
               <div class="flex flex-col p-4 lg:w-1/4 md:w-1/2 w-full">
                  <div
                     class="flex-grow border-2 border-gray-200 px-4 py-6 rounded-lg md:px-3 md:py-4 sm:px-2 sm:py-3">
                     <x-heroicon-o-server class="text-mittelgruen w-12 h-12 mb-3 inline-block"/>
                     <h3 class="md:text-lg sm:text-base">
                        {{ __('Alojamiento y Seguridad') }}
                     </h3>
                     <p class="md:text-sm sm:text-xs">
                        {{ __('Hosting robusto con enfoque en la seguridad, asegurando que tus aplicaciones y datos estén protegidos y accesibles.') }}
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Portfolio de Proyectos Section -->
      <section class="bg-weiss py-24">
         <div class="container mx-auto px-5">
            <div class="flex flex-col text-center w-full mb-12">
               <h2 id="proyectos-representativos" class="text-3xl font-title font-medium text-gray-900 sm:text-2xl mb-4"
                   style="scroll-margin-top: 100px;">
                  {{ __('Portafolio de Proyectos') }}
               </h2>
               <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                  {{ __('Nuestro portfolio refleja la diversidad y la adaptabilidad a las necesidades específicas de cada cliente:') }}
               </p>
            </div>
            <div class="flex flex-wrap -m-4">
               <!-- ChatKraft -->
               <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-grau p-8 rounded">
                     <p class="leading-relaxed mb-6">{{ __('Más que un chatbot, es una base de conocimiento impulsada por IA que mejora la experiencia del cliente y las operaciones internas.') }}</p>
                     <div class="inline-flex items-center">
                        <x-heroicon-o-chat-bubble-left-ellipsis class="text-mittelgruen w-12 h-12 mr-3"/>
                        <h2 class="text-gray-900 text-lg title-font font-medium">
                           {{ __('ChatKraft - Chat with your Knowledge') }}
                        </h2>
                     </div>
                  </div>
               </div>

               <!-- Plataformas para Interim Managers -->
               <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-grau p-8 rounded">
                     <p class="leading-relaxed mb-6">{{ __('Conexión eficiente entre profesionales y oportunidades laborales, gracias a un algoritmo de emparejamiento avanzado.') }}</p>
                     <div class="inline-flex items-center">
                        <x-heroicon-o-user-group class="text-mittelgruen w-12 h-12 mr-3"/>
                        <h2 class="text-gray-900 text-lg title-font font-medium">
                           {{ __('Plataformas para Interim Managers') }}
                        </h2>
                     </div>
                  </div>
               </div>

               <!-- Herramientas de Valoración de Marcas para Multinacionales -->
               <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-grau p-8 rounded">
                     <p class="leading-relaxed mb-6">{{ __('Sistemas SaaS para grandes firmas de auditoría, especializados en la valoración de marcas de envergadura.') }}</p>
                     <div class="inline-flex items-center">
                        <x-heroicon-o-calculator class="text-mittelgruen w-12 h-12 mr-3"/>
                        <h2 class="text-gray-900 text-lg title-font font-medium">
                           {{ __('Herramientas de Valoración de Marcas para Multinacionales') }}
                        </h2>
                     </div>
                  </div>
               </div>

               <!-- Sistemas de Reservas Personalizados -->
               <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-grau p-8 rounded">
                     <p class="leading-relaxed mb-6">{{ __('Soluciones adaptadas para gimnasios, work centers, coches y escape rooms.') }}</p>
                     <div class="inline-flex items-center">
                        <x-heroicon-o-calendar class="text-mittelgruen w-12 h-12 mr-3"/>
                        <h2 class="text-gray-900 text-lg title-font font-medium">
                           {{ __('Sistemas de Reservas Personalizados') }}
                        </h2>
                     </div>
                  </div>
               </div>

               <!-- Tienda Online para una Fábrica de Frutas Deshidratadas -->
               <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-grau p-8 rounded">
                     <p class="leading-relaxed mb-6">{{ __('Desarrollo completo para maximizar eficiencia en ventas y administración.') }}</p>
                     <div class="inline-flex items-center">
                        <x-heroicon-o-shopping-bag class="text-mittelgruen w-12 h-12 mr-3"/>
                        <h2 class="text-gray-900 text-lg title-font font-medium">
                           {{ __('Tienda Online para una Fábrica de Frutas Deshidratadas') }}
                        </h2>
                     </div>
                  </div>
               </div>

               <!-- Mercado para Periodistas Freelance -->
               <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-grau p-8 rounded">
                     <p class="leading-relaxed mb-6">{{ __('Plataforma que permite a los periodistas vender su contenido directamente a medios de comunicación.') }}</p>
                     <div class="inline-flex items-center">
                        <x-heroicon-o-newspaper class="text-mittelgruen w-12 h-12 mr-3"/>
                        <h2 class="text-gray-900 text-lg title-font font-medium">
                           {{ __('Mercado para Periodistas Freelance') }}
                        </h2>
                     </div>
                  </div>
               </div>

               <!-- Motor de Búsqueda para Piezas de Autos Usadas -->
               <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-grau p-8 rounded">
                     <p class="leading-relaxed mb-6">{{ __('Base de datos con más de 80,000 piezas de coches, multilingüe, con interfaz fácil para subir fotos y cálculo automático de precios de envío.') }}</p>
                     <div class="inline-flex items-center">
                        <x-heroicon-o-document-magnifying-glass class="text-mittelgruen w-12 h-12 mr-3"/>
                        <h2 class="text-gray-900 text-lg title-font font-medium">
                           {{ __('Motor de Búsqueda para Piezas de coches de segunda mano') }}
                        </h2>
                     </div>
                  </div>
               </div>

               <!-- Aplicación Web para la Asociación Española de Pediatría -->
               <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-grau p-8 rounded">
                     <p class="leading-relaxed mb-6">{{ __('Plataforma para exámenes y certificación online de pediatras, complementada con noticias y artículos del sector.') }}</p>
                     <div class="inline-flex items-center">
                        <x-heroicon-o-academic-cap class="text-mittelgruen w-12 h-12 mr-3"/>
                        <h2 class="text-gray-900 text-lg title-font font-medium">
                           {{ __('Aplicación Web para la Asociación Española de Pediatría') }}
                        </h2>
                     </div>
                  </div>
               </div>

               <!-- Palimpalem -->
               <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-grau p-8 rounded">
                     <p class="leading-relaxed mb-6">{{ __('Nuestro primer gran proyecto, un robusto y versátil constructor de páginas web, con más de 1.4 millones de páginas creadas.') }}</p>
                     <div class="inline-flex items-center">
                        <x-heroicon-o-wrench-screwdriver class="text-mittelgruen w-12 h-12 mr-3"/>
                        <h2 class="text-gray-900 text-lg title-font font-medium">
                           {{ __('Palimpalem') }}
                        </h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>


</x-legal>


{{--<x-legal>
   <x-slot:title>{{ $headerTitle }}</x-slot>

      --}}{{--<x-header headertitle="De la Idea a la Realidad"/>--}}{{--
      <x-header headertitle="De la Idea a la Solución"/>

        <section class="font-sans antialiased max-w-md mx-auto md:max-w-2xl px-8 py-4 ">
            <div class="">
               <p>{{ __('En Martin Schenk S.L., llevamos más de 20 años convirtiendo ideas en aplicaciones web innovadoras y personalizadas. Nuestro enfoque es claro: convertir tu visión en realidad.') }}</p>

                <h2 class="mt-14"
                    id="desarrollo-de-aplicaciones-web-avanzadas">{{ __('Desarrollo de Aplicaciones Web a Medida') }}</h2>
                <div class="container mx-auto px-4">
                   <p>{{ __('Gestión de Proyecto Aplicación Web Integral') }}</p>
                    <ul>
                       <li>{{ __('Consultoría Inicial: Dialogamos sobre tu idea y delineamos el camino para su materialización.') }}</li>
                       <li>{{ __('Diseño Centrado en el Usuario: Creamos experiencias online que enamoran a los usuarios.') }}</li>
                       <li>{{ __('Desarrollo a Medida: Construimos tu aplicación desde cero, personalizada para tus necesidades únicas.') }}</li>
                       <li>{{ __('Lanzamiento Impecable: Nos encargamos de que todo funcione perfectamente para tu estreno.') }}</li>
                       <li>{{ __('Integración Eficiente: Integramos sistemas existentes de forma eficaz y sin complicaciones.') }}</li>
                    </ul>
                </div>


                <!-- Tecnologías y Herramientas -->
               <h2>{{ __('Tecnologías y Herramientas Modernas') }}</h2>
                <div class="container mx-auto px-0">
                   <p>{{ __('Utilizamos tecnologías de vanguardia y lenguajes de programación avanzados para entregar soluciones eficientes y personalizadas. Nuestro conjunto de herramientas incluye Laravel, Livewire, Alpine.js, Tailwind CSS, Filament, y PHP, entre otras.') }}</p>
                    <div class="flex flex-wrap mt-0">
                        <div class="m-2">
                            <img class="h-5" src="{{ asset('/img/logo-laravel.png') }}" alt="Laravel">
                        </div>
                        <div class="m-2">
                            <img class="h-5" src="{{ asset('/img/logo-livewire.png') }}" alt="Livewire">
                        </div>
                        <div class="m-2">
                            <img class="h-5" src="{{ asset('/img/logo-alpine.png') }}" alt="Alpine">
                        </div>
                        <div class="m-2">
                            <img class="h-5" src="{{ asset('/img/logo-tailwind.png') }}" alt="Tailwind">
                        </div>
                        <div class="m-2">
                            <img class="h-5" src="{{ asset('/img/logo-filament.png') }}" alt="Filament">
                        </div>
                        <div class="m-2">
                            <img class="h-5" src="{{ asset('/img/logo-php.png') }}" alt="PHP">
                        </div>
                    </div>
                </div>


            </div>

            <!-- Proyectos Representativos -->
           <h2 id="proyectos-representativos">{{ __('Portafolio de Proyectos') }}</h2>
           <div class="container mx-auto px-4 ">
              <p class=" mb-4">{{ __('Nuestro portfolio refleja la diversidad y la adaptabilidad a las necesidades específicas de cada cliente:') }}</p>

                <ul class="list-disc pl-8">

                    <li class="mb-2">
                       <strong>{{ __('ChatKraft - Chat with your Knowledge:') }}</strong>
                       {{ __('Más que un chatbot, es una base de conocimiento impulsada por IA que mejora la experiencia del cliente y las operaciones internas.') }}

                    </li>

                    <li class="mb-2">
                       <strong>{{ __('Plataformas para Interim Managers:') }}</strong>
                       {{ __('Conexión eficiente entre profesionales y oportunidades laborales, gracias a un algoritmo de emparejamiento avanzado.') }}
                    </li>

                    <li class="mb-2">
                        <strong>{{ __('Herramientas de Valoración de Marcas para Multinacionales:') }}</strong>
                       {{ __('Sistemas SaaS para grandes firmas de auditoría, especializados en la valoración de marcas de envergadura.') }}
                    </li>


                    <li class="mb-2">
                       <strong>{{ __('Sistemas de Reservas Personalizados:') }}</strong>
                       {{ __('Soluciones adaptadas para gimnasios, work centers, coches y escape rooms.') }}
                    </li>

                    <li class="mb-2">
                       <strong>{{ __('Tienda Online para una Fábrica de Frutas Deshidratadas:') }}</strong>
                       {{ __('Desarrollo completo para maximizar eficiencia en ventas y administración.') }}
                    </li>

                    <li class="mb-2">
                        <strong>{{ __('Mercado para Periodistas Freelance:') }}</strong>
                       {{ __('Plataforma que permite a los periodistas vender su contenido directamente a medios de comunicación.') }}
                    </li>

                   <li class="mb-2">
                      <strong>{{ __('Motor de Búsqueda para Piezas de Autos Usadas:') }}</strong>
                      {{ __('Base de datos con más de 80,000 piezas de autos, multilingüe, con interfaz fácil para subir fotos y cálculo automático de precios de envío.') }}
                   </li>

                   <li class="mb-2">
                      <strong>{{ __('Aplicación Web para la Asociación Española de Pediatría:') }}</strong>
                      {{ __('Plataforma para exámenes y certificación online de pediatras, complementada con noticias y artículos del sector.') }}
                   </li>

                    <li class="mb-2">
                       <strong>{{ __('Palimpalem:') }}</strong>
                       {{ __('Mi primer gran proyecto, un robusto y versátil constructor de páginas web, con más de 1.4 millones de páginas creadas.') }}
                    </li>
                </ul>
            </div>


            <!-- Otros Servicios Section -->
           <h2>{{ __('Servicios Complementarios') }}</h2>
           <p>{{ __('Además de desarrollo de aplicaciones, ofrecemos:') }}</p>


           <h3
              id="hosting-y-dominios-seguros">{{ __('Alojamiento Web y Gestión Integral: Seguridad y Rendimiento Garantizados') }}</h3>
           <ul>
              <li>{{ __('Nos especializamos en brindar un alojamiento web excepcional. La mayoría de las aplicaciones de nuestros clientes residen en servidores dedicados y VPS de alta calidad, gestionados por nosotros. Nos ocupamos meticulosamente de todos los aspectos críticos: desde realizar copias de seguridad regulares y garantizar la máxima seguridad, hasta asegurarnos de que tus aplicaciones funcionen con un rendimiento óptimo.') }}</li>
              <li>{{ __('Además, administramos cientos de dominios y cuentas de correo electrónico, proporcionando a nuestros clientes soluciones de alojamiento integrales. Con nosotros, puedes estar seguro de que tus datos están protegidos, tus aplicaciones corren de manera eficiente y tus comunicaciones por correo electrónico son seguras y confiables. En [Nombre de tu Empresa], no solo alojamos tus proyectos web, sino que también cuidamos de ellos como si fueran nuestros, garantizando tranquilidad y rendimiento excepcional.') }}</li>
           </ul>

            <!-- Solución Integral Section -->
           <h3 id="solucion-integral">{{ __('Soluciones Integrales') }}</h3>
            <ul>
                <li>{{ __('De principio a fin: diseño, desarrollo, alojamiento y mantenimiento. Todo en una solución integral llave en mano.') }}</li>
                <li>{{ __('Si tienes necesidades específicas, las cubrimos: desde rendimiento y escalabilidad hasta seguridad.') }}</li>
            </ul>

            <!-- Mantenimiento Section -->
            <h3 id="mantenimiento-y-seguridad-web">{{ __('Mantenimiento y Seguridad Web') }}</h3>
            <ul>
                <li>{{ __('Mantenimiento constante para que tu aplicación funcione a la perfección día tras día.') }}</li>
                <li>{{ __('Actualizaciones y mejoras regulares para mantener tu sitio seguro y eficiente.') }}</li>
            </ul>

            <!-- Consultoría y estrategia digital Section -->
            <h3 id="consultoria-y-estrategia-digital">{{ __('Consultoría y Estrategia Digital') }}</h3>
            <ul>
               <li>{{ __('Aprovecha nuestra experiencia para establecer una sólida presencia online.') }}</li>
            </ul>


        </section>
</x-legal>--}}


