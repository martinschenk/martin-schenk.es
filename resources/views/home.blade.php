<x-legal>

    <x-slot:title></x-slot>

        <?php
        $titlex = <<<EOD
        <div>SOME HTML</div>
        EOD;
        ?>

    @php
        $title1 = 'Desarrollo de software a medida';
        $title2 = 'Hosting/alojamiento de sus aplicaciónes y webs';
        $title3 = 'Mantenimiento y adaptación';
        $title4 = 'Alquiler de servidores VPS y dedicados';
        $title5 = 'Consultoría SaaS y aplicaciones web';
    @endphp

{{--    <x-header title="{!! $titlex !!}"/>--}}
    @component('components.header')
        @slot('headertitle')
            <p class="text-4xl sm:text-5xl text-black font-black mt-6">
                <span class="" style=" z-index: 1;position: relative;">
                    <img style="width: 100%; position: absolute;top: 0;left: 0; z-index: -1; vertical-align: middle;max-width: 100%;" src="img/texto-circulo-big.svg" alt="texto-circulo-big" width="191" loading="lazy" >
                    Simplifica
                </span>
                tu negocio
            </p>
        @endslot
    @endcomponent




    <section class="">
        <div class="font-sans antialiased
        max-w-md mx-auto md:max-w-2xl
        px-8 py-4  ">

            <p>En Martin Schenk estamos ofreciendo los siguientes servicios informáticos:</p>
            <ul>
                <li><a href="#{{ Str::slug($title1, '-') }}">{{$title1}}</a></li>
                <li><a href="#{{ Str::slug($title2, '-') }}">{{$title2}}</a></li>
                <li><a href="#{{ Str::slug($title3, '-') }}">{{$title3}}</a></li>
                <li><a href="#{{ Str::slug($title4, '-') }}">{{$title4}}</a></li>
                <li><a href="#{{ Str::slug($title5, '-') }}">{{$title5}}</a></li>
            </ul>

{{--            <p class="text-center text-5xl text-black font-black my-12" >--}}
{{--                <span class="" style=" z-index: 1;position: relative;">--}}
{{--                    <img style="width: 100%; position: absolute;top: 0;left: 0; z-index: -1; vertical-align: middle;max-width: 100%;" src="img/texto-circulo-big.svg" alt="texto-circulo-big" width="191" loading="lazy" >--}}
{{--                    Simplifica--}}
{{--                </span>--}}
{{--                tu negocio--}}
{{--            </p>--}}


            <h2 class="" id="{{ Str::slug($title1, '-') }}">{{ $title1 }}</h2>

            <p>
                <ul>
                    <li>Nos dedicamos al desarrollo y mantenimiento de aplicaciones web y SaaS. Le acompañamos en cada etapa:
                        <ul class="ml-6 list-inside list-decimal">
                            <li class="ml-6 mb-1 mt-3">Planificación</li>
                            <li class="ml-6 mb-1">Diseño</li>
                            <li class="ml-6 mb-1">Desarrollo</li>
                            <li class="ml-6 mb-1">Lanzamiento</li>
                            <li class="ml-6 mb-1">Nuevos módulos</li>
                        </ul>
                    </li>
                    <li>Cada cliente tiene unas necesidades específicas. Para pymes y empresas más grandes es muy difícil que una solución estándar se adapte al 100% a sus necesidades.
                    </li>
                    <li>Muchas veces la parametrización de un sistema modelizado es más costosa y tiene más inconvenientes que el desarrollo de un software a medida que, con un costo similar, se adaptará perfectamente a las especificaciones del cliente.</li>
                    <li>Más de 30 años de experiencia en convertir ideas en aplicaciones web estables y fiables. SAAS (Software as a Service) es nuestra pasión.</li>
                </ul>
            </p>

            <h2 id="{{ Str::slug($title2, '-') }}">{{ $title2 }}</h2>
            <ul>
                <li>La mayoría de las aplicaciones que desarrollamos para nuestros clientes se alojan y mantienen en nuestros servidores en la nube, lo que les libera de tener que instalar y mantener nada ellos mismos.
                </li>
                <li>Para la mayoría de las empresas, la externalización de la infraestructura y las aplicaciones (outsourcing) de TI se ha convertido en la norma. Sencillamente, es más rentable y eficiente dejar que otra persona se encargue de los detalles del mantenimiento y las actualizaciones. Ahí es donde entramos nosotros. La mayoría de las aplicaciones que desarrollamos para nuestros clientes se alojan y mantienen en nuestros servidores en la nube, lo que les libera de tener que instalar y mantener nada ellos mismos. Nosotros nos encargamos de todo para que ellos puedan centrarse en sus objetivos empresariales. Y si alguna vez hay algún problema, nuestro equipo está a sólo una llamada de distancia. Así que si está pensando en externalizar sus necesidades de TI, llámenos. Estaremos encantados de charlar sobre cómo podemos ayudarle a liberar su tiempo y sus recursos.


                </li>
            </ul>

            <h2  id="{{ Str::slug($title3, '-') }}">{{ $title3 }}</h2>
            <p>
                <ul>
                    <li>Todos que estamos acostumbrados de implementar nuevo Software, sabemos que los programas no son una cosa estática. Como son una imagen de la realidad, requieren constantes adaptaciones y actualizaciones. Pueden ser motivados por cambios del mercado, la competencia, razónes de seguridad o por otros motivos como un cambio de estrategia.</li>
                    <li>Ofrecemos soluciones personalizadas para el mantenimiento y las actualizaciones de sus programas. El software debe mantenerse al día, ya que, de lo contrario, es fácil que se produzcan fallos de seguridad y rendimiento. Es más barato y seguro mantener el software al día que reescribir un software completamente obsoleto.
                    </li>

                </ul>
            </p>

            <h2  id="{{ Str::slug($title4, '-') }}">{{ $title4 }}</h2>
            <p>
                <ul>
                    <li>Como llevamos propias aplicaciones web SaaS, sabemos que tipo de servidor requieren programas, que tienen cientos de nuevos usuarios por día y miles de logins. Solemos empezar nuevos proyectos con servidores pequeños en nuestra nube, que podemos ampliar a más procesadores, discos y RAM en cualquier momento.</li>
                    <li>Elegimos su VPS o servidor dedicado exactamente a su medida.</li>
                    <li>Opcionalmente puede ser con Mantenimiento completo por nuestra parte.</li>
                    <li>Trabajamos con el panel Plesk desde hace ya casi 20 años. Lo conocemos profundamente.</li>
                    <li>Ofrecemos mudanzas gratuitas desde su Empresa de hosting actual hacia nuestros servidores.</li>
                </ul>
            </p>

            <h2  id="{{ Str::slug($title5, '-') }}">{{ $title5 }}</h2>
            <p>
                En Martin Schenk trabajamos estrechamente con nuestros clientes para crear productos SaaS y aplicaciones web de éxito que aborden sus retos empresariales y sus necesidades latentes. Asesoramos sobre el modelo tecnológico más adecuado para convertir la visión de un cliente en un producto innovador sin dificultades técnicas ni problemas de arquitectura en el camino, ¡y todo ello cumpliendo estrictamente las normas del sector! Nos enorgullece enormemente poder ofrecer soluciones tecnológicas de vanguardia adaptadas específicamente para satisfacer las demandas únicas de cada empresa; no hay dos clientes iguales, lo que significa que nunca habrá un modelo único cuando se trata de qué tipo de servicio requieren de nosotros en esta etapa.



            </p>

            <h2>Experiencia</h2>
            <p>
                Con más de 20 años desarrollando, alojando y manteniendo aplicaciones web, sabemos perfectamente lo que importa. Contamos con clientes de España y varios países de Europa; desde empresas familiares, medianas, hasta grupos corporativos.
            </p>


            <h2 class="h2-normal" >Propias Aplicaciónes Web</h2>

            <p class="p-normal" >
                <ul class="ul-normal"  class="ul-normal" >
                    <li class="li-normal" >
                        Herramienta para crear páginas web: <a class="a-normal" href="https://www.palimpalem.com" target="_blank">www.palimpalem.com</a>
                    </li>
                </ul>
            </p>

            <p class="p-normal" >
                Palimpalem es un constructor de sitios web en línea que se ha utilizado para crear más de 1.400.000 sitios web. Se han generado hasta 500 nuevas páginas web cada día. Actualmente, estamos trabajando en una nueva versión que va a salir bajo otra marca.
            </p>



        </div>
    </section>


    <x-footer></x-footer>




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