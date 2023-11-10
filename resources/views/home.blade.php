@php
	$headerTitle =  __('De la Idea a la Solución');
@endphp

<x-guest>
	<x-slot:title>{{ $headerTitle }}</x-slot>
		
		<x-header headertitle="{{ $headerTitle }}"/>
		
		<!-- Hero Section -->
		<section class="">
			<div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
				<div class="text-center lg:w-2/3 w-full">
					<h1 class="mb-4 ">
						{{ __('Transformamos Ideas en Aplicaciones Web Innovadoras') }}
					</h1>
					<p class="mb-8">
						{{ __('En Martin Schenk S.L., llevamos más de 20 años convirtiendo ideas en soluciones web efectivas y personalizadas. Tu visión, convertida en realidad.') }}
					</p>
					<div class="flex justify-center">
						{{--@livewire('test-notification')--}}
						@livewire('contact-form')
						{{--<button
							 class="inline-flex text-white bg-mittelgruen border-0 py-2 px-6 focus:outline-none hover:bg-teal-600   text-sm sm:text-lg">
							 {{ __('Contáctanos') }}
						</button>--}}
						<a href="#proyectos-representativos"
						   class="ml-4 inline-flex items-center justify-center text-gray-700 bg-grau border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 hover:text-gray-800   no-underline text-sm sm:text-lg">
							{{ __('Ver Proyectos') }}
						</a>
					
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Services Section -->
		<section class="border-t border-gray-300 mb-5">
			<div class="container px-5 py-8 lg:py-16 mx-auto md:py-12 sm:py-8">
				<div class="text-center mb-10 lg:mb-18 md:mb-15 sm:mb-12">
					<h2 class="text-xl md:text-2xl">
						{{ __('Nuestros Servicios') }}
					</h2>
				</div>
				
				<div class="flex flex-wrap -m-4">
					<div class="flex flex-col p-4 lg:w-1/2 md:w-1/2 w-full">
						<div class="flex-grow border-2 border-gray-300 px-8 py-6">
							<x-heroicon-o-light-bulb class="text-mittelgruen w-12 h-12 mb-3 inline-block"/>
							<h3 class="">
								{{ __('Aplicaciones Web a Medida') }}
							</h3>
							<p class="">
								{{ __('Desarrollo personalizado para materializar tus ideas en soluciones web únicas y eficientes.') }}
							</p>
						</div>
					</div>
					<div class="flex flex-col p-4 lg:w-1/2 md:w-1/2 w-full">
						<div class="flex-grow border-2 border-gray-300 px-8 py-6">
							<x-heroicon-o-puzzle-piece class="text-mittelgruen w-12 h-12 mb-3 inline-block"/>
							<h3 class="">
								{{ __('Soluciones Integrales') }}
							</h3>
							<p class="">
								{{ __('Servicios completos desde el diseño hasta el lanzamiento, asegurando una experiencia digital sin fisuras.') }}
							</p>
						</div>
					</div>
					<div class="flex flex-col p-4 lg:w-1/2 md:w-1/2 w-full">
						<div class="flex-grow border-2 border-gray-300 px-8 py-6">
							<x-heroicon-o-chat-bubble-left-right class="text-mittelgruen w-12 h-12 mb-3 inline-block"/>
							<h3 class="">
								{{ __('Mantenimiento') }}
							</h3>
							<p class="">
								{{ __('Actualizaciones regulares y soporte técnico para garantizar el rendimiento óptimo y la longevidad de tu proyecto web.') }}
							</p>
						</div>
					</div>
					<div class="flex flex-col p-4 lg:w-1/2 md:w-1/2 w-full">
						<div class="flex-grow border-2 border-gray-300 px-8 py-6">
							<x-heroicon-o-server class="text-mittelgruen w-12 h-12 mb-3 inline-block"/>
							<h3 class="">
								{{ __('Alojamiento y Seguridad') }}
							</h3>
							<p class="">
								{{ __('Hosting robusto con enfoque en la seguridad, asegurando que tus aplicaciones y datos estén protegidos y accesibles.') }}
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Portfolio de Proyectos Section -->
		<section class="border-400  bg-gray-100">
			<div class="container px-5 py-8 lg:py-16 mx-auto md:py-12 sm:py-8">
				<div class="text-center mb-10 lg:mb-18 md:mb-15 sm:mb-12">
					<h2 id="proyectos-representativos" class="text-xl md:text-2xl"
					    style="scroll-margin-top: 100px;">
						{{ __('Portafolio de Proyectos') }}
					</h2>
					<p class="lg:w-2/3 mx-auto leading-relaxed text-base">
						{{ __('Nuestro portfolio refleja la diversidad y la adaptabilidad a las necesidades específicas de cada cliente:') }}
					</p>
				</div>
				
				<!-- Projekte Container -->
				<div class="flex flex-wrap -m-4">
					
					<!-- ChatKraft -->
					<div class="p-4 md:w-1/2 w-full">
						<div class="h-full bg-white border-2 border-gray-300 p-8">
							<p class="leading-relaxed mb-6">{{ __('Más que un chatbot, es una base de conocimiento impulsada por IA que mejora la experiencia del cliente y las operaciones internas.') }}</p>
							<div class="inline-flex items-center">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
									     stroke="currentColor" class="text-mittelgruen w-12 h-12 mr-3">
										<path stroke-linecap="round" stroke-linejoin="round"
										      d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/>
									</svg>
								</div>
								<h3 class="">
									{{ __('ChatKraft - Chatea con tu Conocimiento') }}
								</h3>
							</div>
						</div>
					</div>
					
					<!-- Plataformas para Interim Managers -->
					<div class="p-4 md:w-1/2 w-full">
						<div class="h-full bg-white border-2 border-gray-300 p-8">
							<p class="leading-relaxed mb-6">{{ __('Conexión eficiente entre profesionales y oportunidades laborales, gracias a un algoritmo de emparejamiento avanzado.') }}</p>
							<div class="inline-flex items-center">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
									     stroke="currentColor" class="text-mittelgruen w-12 h-12 mr-3">
										<path stroke-linecap="round" stroke-linejoin="round"
										      d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
									</svg>
								
								</div>
								<h3 class="">
									{{ __('Plataformas para Gestores Interinos') }}
								</h3>
							</div>
						</div>
					</div>
					
					<!-- Herramientas de Valoración de Marcas para Multinacionales -->
					<div class="p-4 md:w-1/2 w-full">
						<div class="h-full bg-white border-2 border-gray-300 p-8">
							<p class="leading-relaxed mb-6">{{ __('Sistemas SaaS para grandes firmas de auditoría, especializados en la valoración de marcas de envergadura.') }}</p>
							<div class="inline-flex items-center">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
									     stroke="currentColor" class="text-mittelgruen w-12 h-12 mr-3">
										<path stroke-linecap="round" stroke-linejoin="round"
										      d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z"/>
									</svg>
								
								</div>
								<h3 class="">
									{{ __('Herramientas para la Valoración de Marcas en Multinacionales') }}
								</h3>
							</div>
						</div>
					</div>
					
					<!-- Sistemas de Reservas Personalizados -->
					<div class="p-4 md:w-1/2 w-full">
						<div class="h-full bg-white border-2 border-gray-300 p-8 ">
							<p class="leading-relaxed mb-6">{{ __('Soluciones adaptadas para gimnasios, work centers, coches y escape rooms.') }}</p>
							<div class="inline-flex items-center">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
									     stroke="currentColor" class="text-mittelgruen w-12 h-12 mr-3">
										<path stroke-linecap="round" stroke-linejoin="round"
										      d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"/>
									</svg>
								
								</div>
								<h3 class="">
									{{ __('Sistemas Personalizados de Reservas') }}
								</h3>
							</div>
						</div>
					</div>
					
					<!-- Tienda Online para una Fábrica de Frutas Deshidratadas -->
					<div class="p-4 md:w-1/2 w-full">
						<div class="h-full bg-white border-2 border-gray-300 p-8">
							<p class="leading-relaxed mb-6">{{ __('Desarrollo completo para maximizar eficiencia en ventas y administración.') }}</p>
							<div class="inline-flex items-center">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
									     stroke="currentColor" class="text-mittelgruen w-12 h-12 mr-3">
										<path stroke-linecap="round" stroke-linejoin="round"
										      d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
									</svg>
								
								</div>
								<h3 class="">
									{{ __('Tienda Online para Fábrica de Frutas Deshidratadas') }}
								</h3>
							</div>
						</div>
					</div>
					
					<!-- Mercado para Periodistas Freelance -->
					<div class="p-4 md:w-1/2 w-full">
						<div class="h-full bg-white border-2 border-gray-300 p-8">
							<p class="leading-relaxed mb-6">{{ __('Plataforma que permite a los periodistas vender su contenido directamente a medios de comunicación.') }}</p>
							<div class="inline-flex items-center">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
									     stroke="currentColor" class="text-mittelgruen w-12 h-12 mr-3">
										<path stroke-linecap="round" stroke-linejoin="round"
										      d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>
									</svg>
								
								</div>
								<h3 class="">
									{{ __('Mercado para Periodistas Independientes') }}
								</h3>
							</div>
						</div>
					</div>
					
					<!-- Motor de Búsqueda para Piezas de Autos Usadas -->
					<div class="p-4 md:w-1/2 w-full">
						<div class="h-full bg-white border-2 border-gray-300 p-8">
							<p class="leading-relaxed mb-6">{{ __('Plataforma para piezas de coches de segunda mano, con SEO para Google, multilingüe, y con interfaz fácil para subir fotos y cálculo automático de precios de envío.') }}</p>
							<div class="inline-flex items-center">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
									     stroke="currentColor" class="text-mittelgruen w-12 h-12 mr-3">
										<path stroke-linecap="round" stroke-linejoin="round"
										      d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
									</svg>
								</div>
								
								<h3 class="">
									{{ __('Plataforma de Piezas de Coche de Segunda Mano') }}
								</h3>
							</div>
						</div>
					</div>
					
					<!-- Aplicación Web para la Asociación Española de Pediatría -->
					<div class="p-4 md:w-1/2 w-full">
						<div class="h-full bg-white border-2 border-gray-300 p-8">
							<p class="leading-relaxed mb-6">{{ __('Plataforma para exámenes y certificación online de pediatras, complementada con noticias y artículos del sector.') }}</p>
							<div class="inline-flex items-center">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
									     stroke="currentColor" class="text-mittelgruen w-12 h-12 mr-3">
										<path stroke-linecap="round" stroke-linejoin="round"
										      d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
									</svg>
								
								</div>
								<h3 class="">
									{{ __('Cursos Online para medicos de la Asociación Española de Pediatría') }}
								</h3>
							</div>
						</div>
					</div>
					
					<!-- Palimpalem -->
					<div class="p-4 md:w-1/2 w-full">
						<div class="h-full bg-white border-2 border-gray-300 p-8">
							<p class="leading-relaxed mb-6">{{ __('Nuestro primer gran proyecto, un robusto y versátil constructor de páginas web, con más de 1.4 millones de páginas creadas.') }}</p>
							<div class="inline-flex items-center">
								<div>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
									     stroke="currentColor" class="text-mittelgruen w-12 h-12 mr-3">
										<path stroke-linecap="round" stroke-linejoin="round"
										      d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
									</svg>
								</div>
								
								<h3 class="">
									{{ __('Plataforma para crear páginas web') }}
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Tecnologías y Herramientas Modernas Section -->
		<section class="py-16 bg-white">
			<div class="container mx-auto px-5">
				<h2 class="text-3xl font-title font-medium text-center text-gray-800 mb-10">
					{{ __('Avanzando con Tecnología de Punta y Herramientas Innovadoras') }}
				</h2>
				<div class="flex flex-wrap -mx-4 mb-6">
					<div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
						<p class="text-left text-base text-gray-700">
							{{ __('En Martin Schenk S.L., aprovechamos el poder de las tecnologías de vanguardia y los lenguajes de programación avanzados para crear soluciones web eficientes y personalizadas.') }}
						</p>
					</div>
					<div class="w-full md:w-1/2 px-4">
						<p class="text-left text-base text-gray-700">
							{{ __('Nuestra gama de tecnologías es diversa y progresista, incluyendo Laravel para el desarrollo robusto de back-end, Livewire para interfaces dinámicas, Alpine.js para experiencias de front-end responsivas, Tailwind CSS para un estilo elegante y Filament para paneles de administración sin complicaciones. Combinado con la versatilidad de PHP, nuestro conjunto de herramientas nos permite dar vida a tus proyectos visionarios con precisión y estilo.') }}
						</p>
					</div>
				</div>
				<div class="flex justify-center flex-wrap py-4">
					<!-- Logo Container -->
					<div class="flex flex-wrap justify-center m-3">
						<!-- Laravel Logo mit grauem Rahmen -->
						<img class="h-6 xl:h-10 lg:h-10 sm:h-8  m-4 mt-3" src="{{ asset('/img/logo-laravel.png') }}" alt="Laravel">
						<!-- Livewire Logo -->
						<img class="h-5 xl:h-8 lg:h-8 sm:h-6 xs:h-5 m-4" src="{{ asset('/img/logo-livewire.png') }}"
						     alt="Livewire">
						<!-- Alpine.js Logo -->
						<img class="h-5 xl:h-8 lg:h-8 sm:h-6 xs:h-5 m-4" src="{{ asset('/img/logo-alpine.png') }}"
						     alt="Alpine">
						<!-- Tailwind CSS Logo -->
						<img class="h-5 xl:h-8 lg:h-8 sm:h-6 xs:h-5 m-4" src="{{ asset('/img/logo-tailwind.png') }}"
						     alt="Tailwind">
						<!-- Filament Logo -->
						<img class="h-5 xl:h-8 lg:h-8 sm:h-6 xs:h-5 m-4" src="{{ asset('/img/logo-filament.png') }}"
						     alt="Filament">
						<!-- PHP Logo -->
						<img class="h-5 xl:h-8 lg:h-8 sm:h-6 xs:h-5 m-4" src="{{ asset('/img/logo-php.png') }}" alt="PHP">
					</div>
				</div>
			</div>
		</section>


</x-guest>



