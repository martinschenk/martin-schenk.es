<x-legal>

    <x-slot:title></x-slot>


    @php
        $title1 = 'Desarrollo de software a medida';
        $title2 = 'Hosting/alojamiento, dominios, cuentas email';
        $title3 = 'Mantenimiento';
        $title4 = 'Alquiler de servidores';
        $title5 = 'Consultoría tecnológica';
    @endphp

    @component('components.header')
        @slot('headertitle')
            <p class="md:text-3xl text-2xl text-['#1A3336'] font-black mt-6">
                <span class="" style=" z-index: 1;position: relative;">

                    <img style="margin-left: 56%; width: 50%; position: absolute;top:-10px; left: 0; z-index: -1; vertical-align: middle;max-width: 100%;" src="img/texto-circulo-big.svg" alt="" width="" loading="lazy" >
                     Software a medida, <span class="text-[#26CD9C]">que funciona</span>.
                </span>
            </p>
            {{--<p class="ml-[40%] md:text-3xl text-2xl text-['#1A3336'] font-black ">Desde 1999</p>--}}
        @endslot
    @endcomponent




    <section class="">
        <div class="font-sans antialiased
        max-w-md mx-auto md:max-w-2xl
        px-8 py-4  ">

            <p>En Martin Schenk te ayudamos a simplificar los procesos de tu negocio con los siguientes servicios informáticos:</p>
            <ul>
                <li><a href="#{{ Str::slug($title1, '-') }}">{{$title1}}</a></li>
                <li><a href="#{{ Str::slug($title2, '-') }}">{{$title2}}</a></li>
                <li><a href="#{{ Str::slug($title3, '-') }}">{{$title3}}</a></li>
                <li><a href="#{{ Str::slug($title4, '-') }}">{{$title4}}</a></li>
                <li><a href="#{{ Str::slug($title5, '-') }}">{{$title5}}</a></li>
            </ul>
            <p>Hablamos Español, Aleman e Ingles.</p>


            <h2 class="" id="{{ Str::slug($title1, '-') }}">{{ $title1 }}</h2>

            <p>
            <ul>
                <li>Me dedico al desarrollo y mantenimiento de aplicaciones web y SaaS, acompañándote en cada etapa:
                    <ul class="ml-6 list-inside list-decimal">
                        <li class="ml-6 mb-1 mt-3">Planificación</li>
                        <li class="ml-6 mb-1">Diseño</li>
                        <li class="ml-6 mb-1">Desarrollo</li>
                        <li class="ml-6 mb-1">Lanzamiento</li>
                        <li class="ml-6 mb-1">Incorporación de nuevos módulos</li>
                    </ul>
                </li>
                <li>Cada empresa es única y tiene requisitos específicos que no siempre pueden ser satisfechos por soluciones estándar, especialmente para PYMEs y corporaciones más grandes.
                </li>
                <li>Frecuentemente, desarrollar software personalizado puede ser más accesible y ajustado a las necesidades del cliente que adaptar un sistema preexistente.</li>
                <li>Con más de 30 años de experiencia, convierto ideas en aplicaciones web estables y fiables. SAAS es mi pasión.</li>
            </ul>
            </p>

            <h2 id="{{ Str::slug($title2, '-') }}">{{ $title2 }}</h2>
            <ul>
                <li>La mayoría de las aplicaciones que desarrollo se alojan y mantienen en servidores en la nube propios, liberando a los clientes de la carga del mantenimiento técnico.
                </li>
                <li>La externalización de servicios de TI es una estrategia eficiente y rentable consolidada en el sector. Facilito este proceso, encargándome del mantenimiento y actualizaciones, para que puedas enfocarte plenamente en tus metas empresariales. Estoy a una llamada de distancia para ofrecer soporte constante. Contáctame para descubrir cómo puedo ayudarte a optimizar tiempo y recursos.
                </li>
            </ul>

            <h2  id="{{ Str::slug($title3, '-') }}">{{ $title3 }}</h2>
            <p>
            <ul>
                <li>En el mundo del software, sabemos que la adaptación y actualización constante es fundamental. Esta puede ser motivada por diversos factores como cambios en el mercado, competencia, o modificaciones estratégicas.</li>
                <li>Ofrezco soluciones personalizadas para el mantenimiento y actualización de tus programas, garantizando seguridad y rendimiento óptimo, y evitando obsolescencia.</li>
            </ul>
            </p>

            <h2  id="{{ Str::slug($title4, '-') }}">{{ $title4 }}</h2>
            <p>
            <ul>
                <li>Gestiono aplicaciones web SaaS y sé exactamente qué tipo de servidor necesitas, pudiendo adaptar los recursos según la demanda del proyecto.</li>
                <li>Selecciono el VPS o servidor dedicado que mejor se ajuste a tus necesidades.</li>
                <li>Ofrezco la opción de mantenimiento completo.</li>
                <li>Llevo casi 20 años trabajando con el panel Plesk, conociéndolo a fondo.</li>
                <li>Realizo traslados gratuitos desde tu actual empresa de hosting hacia mis servidores.</li>
            </ul>
            </p>

            <h2  id="{{ Str::slug($title5, '-') }}">{{ $title5 }}</h2>
            <p>
                En Martin Schenk SL trabajo de manera estrecha con mis clientes para crear exitosos productos SaaS y aplicaciones web que respondan a sus desafíos empresariales y necesidades particulares. Brindo asesoramiento sobre el modelo tecnológico más apropiado para materializar tu visión sin inconvenientes técnicos ni problemas de arquitectura. Me enorgullece poder ofrecer soluciones tecnológicas de vanguardia que satisfacen las demandas únicas de cada empresa, siempre cumpliendo con las normativas del sector.
            </p>

            <h2>Experiencia</h2>
            <p>
                Con una trayectoria de más de 20 años desarrollando, alojando y manteniendo aplicaciones web, tengo un profundo entendimiento de lo que realmente importa. Tengo una clientela que abarca desde España hasta varios países de Europa, incluyendo empresas familiares, medianas y grupos corporativos grandes.
            </p>



            <h2 >Propias Aplicaciónes Web</h2>

            <p >
                <ul  >
                    <li >
                        Herramienta para crear páginas web: <a href="https://www.palimpalem.com" target="_blank">www.palimpalem.com</a>
                    </li>
                </ul>
            </p>

            <p >
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
