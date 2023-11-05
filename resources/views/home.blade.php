@php
   $headerTitle =  __('De la Idea a la Solución');
@endphp

<x-legal>
   <x-slot:title>{{ $headerTitle }}</x-slot>

      <x-header headertitle="{{ $headerTitle }}"/>

      <!-- Hero Section -->
      <section class="text-gray-700 body-font">
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
                  <button
                     class="ml-4 inline-flex text-gray-700 bg-grau border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">
                     {{ __('Ver Proyectos') }}
                  </button>
               </div>
            </div>
            <!-- Professional and inviting image -->
            {{-- <img class="lg:w-5/6 md:w-1/2 w-full rounded-lg mt-10" src="{{ asset('/images/professional-team.jpg') }}" alt="Professional Web Development Team"> --}}
         </div>
      </section>

      <!-- Services Section -->
      <section class="text-gray-600 body-font border-t border-gray-200">
         <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
               <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">
                  {{ __('Nuestros Servicios') }}
               </h2>
               <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">
                  {{ __('Descubre cómo nuestros servicios de desarrollo web a medida pueden impulsar tu negocio.') }}
               </p>
            </div>

            <div class="flex flex-wrap -m-4">
               <!-- Feature 1: Smart Insights -->
               <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                  <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                     <x-heroicon-o-light-bulb class="text-mittelgruen w-12 h-12 mb-3 inline-block"/>
                     <h2 class="title-font font-medium text-2xl text-gray-900">
                        {{ __('Desarrollo de Aplicaciones Web a Medida') }}
                     </h2>
                     <p class="leading-relaxed text-base">
                        {{ __('Gestión de Proyecto Aplicación Web Integral') }}

                     </p>
                  </div>
               </div>
               <!-- Feature 2: Multi-Format Support -->
               <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                  <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                     <x-heroicon-o-document-arrow-up class="text-mittelgruen w-12 h-12 mb-3 inline-block"/>
                     <h2 class="title-font font-medium text-2xl text-gray-900">
                        {{ __('Soluciones Integrales') }}
                     </h2>
                     <p class="leading-relaxed text-base">
                        {{ __('De principio a fin: diseño, desarrollo, alojamiento y mantenimiento. Todo en una solución integral llave en mano.') }}
                     </p>
                  </div>
               </div>
               <!-- Feature 3: Interactive Chat Interface -->
               <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                  <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                     <x-heroicon-o-chat-bubble-left-right class="text-mittelgruen w-12 h-12 mb-3 inline-block"/>
                     <h2 class="title-font font-medium text-2xl text-gray-900">
                        {{ __('Mantenimiento y Integración') }}
                     </h2>
                     <p class="leading-relaxed text-base">
                        {{ __('Engage with your knowledge base using natural language through an intuitive chat interface.') }}
                     </p>
                  </div>
               </div>
               <!-- Feature 4: Full Stack Solution -->
               <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                  <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                     <x-heroicon-o-server class="text-mittelgruen w-12 h-12 mb-3 inline-block"/>
                     <h2 class="title-font font-medium text-2xl text-gray-900">
                        {{ __('Alojamiento y Seguridad Web') }}
                     </h2>
                     <p class="leading-relaxed text-base">
                        {{ __('Comprehensive hosting and maintenance for a hassle-free experience, backed by 25+ years of expertise.') }}
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Testimonials Section -->
      <section class="text-gray-600 body-font border-t border-gray-200">
         <div class="container px-5 py-24 mx-auto">
            <h2 class="text-3xl text-gray-900 font-medium title-font text-center mb-20">
               {{ __('Lo Que Dicen Nuestros Clientes') }}
            </h2>
            <div class="flex flex-wrap -m-4">
               <!-- Testimonials - Dynamically load testimonials -->
               <!-- Example Testimonial -->
               <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-gray-100 p-8 rounded">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                          class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                        <path d="..."></path>
                     </svg>
                     <p class="leading-relaxed mb-6">"...</p>
                     <a class="inline-flex items-center">
                        <img alt="testimonial" src="{{ asset('/images/client.jpg') }}"
                             class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                        <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900">...</span>
                                <span class="text-gray-500 text-sm">...</span>
                            </span>
                     </a>
                  </div>
               </div>
               <!-- Add more testimonials here -->
            </div>
         </div>
      </section>

      <!-- Contact Section -->
      <section class="text-gray-700 body-font relative">
         <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
               <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">
                  {{ __('Contacta con Nosotros') }}
               </h2>
               <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                  {{ __('¿Tienes un proyecto en mente? Hablemos y veamos cómo podemos ayudarte.') }}
               </p>
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
               <!-- Contact Form - Use Laravel Form or similar -->
               <!-- Include fields like Name, Email, Message, etc. -->
            </div>
         </div>
         <div class="lg:absolute lg:inset-0">
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
               <img class="h-56 w-full object-cover lg:absolute lg:h-full"
                    src="{{ asset('/images/contact-image.jpg') }}" alt="Contact Us">
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


