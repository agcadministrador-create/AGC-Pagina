@extends('layouts.app')

@section('title', 'AGC GROUP México | Soluciones Industriales Integrales')

@section('content')

    <section class="bg-slate-950 text-white py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Columna de Texto -->
            <div>
                <span class="text-blue-500 font-bold text-xs tracking-widest uppercase block mb-2">Manufactura</span>
                <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tight mb-4">
                    Transformación de metales a gran escala
                </h2>
                <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-6">
                    Corte, doblado y rolado de metales de gran calibre con precisión industrial.
                </p>

                <!-- Características / Viñetas -->
                <ul class="space-y-2 mb-6 text-slate-300 text-xs sm:text-sm">
                    <li class="flex items-center gap-2">
                        <span class="text-blue-500 font-bold">✓</span> Corte y habilitado de placa y perfil pesado.
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-blue-500 font-bold">✓</span> Rolado de tubería y estructuras metálicas a medida.
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-blue-500 font-bold">✓</span> Soldadura industrial bajo estrictas normativas.
                    </li>
                </ul>

                <!-- Boton para ver mas a detalles y cotizar  -->
                <div>
                    <a href="{{ route('servicios.manufactura') }}"
                        class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs tracking-widest uppercase px-6 py-3 rounded-lg shadow-lg transition-all duration-300 hover:translate-y-[-2px]">
                        Ver más detalles
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Columna de Imágenes (Adaptada a 2 imágenes simétricas) -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Imagen Principal existente -->
                <div class="relative overflow-hidden rounded-xl shadow-2xl aspect-[3/4] border border-slate-800">
                    <img src="{{ asset('images/metales_de_gran_calibre.jpg') }}" alt="Transformación de metales"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
                <!-- Segunda Imagen complementaria -->
                <div class="relative overflow-hidden rounded-xl shadow-2xl aspect-[3/4] border border-slate-800">
                    <img src="{{ asset('images/estructura.png') }}" alt="Proceso industrial complementario"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
            </div>

        </div>
    </section>


    <!-- Tarjeta: Recubrimientos Industriales (Fondo Blanco / Dos Imágenes Izquierda) -->
    <section class="bg-white text-slate-900 py-20 px-4 sm:px-6 lg:px-8 border-y border-slate-200">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Columna con Dos Imágenes (Izquierda en pantallas grandes) -->
            <div class="grid grid-cols-2 gap-4 order-2 lg:order-1">
                <!-- Imagen 1: Loseta Antiácida -->
                <div class="relative overflow-hidden rounded-2xl shadow-xl aspect-[3/4] border border-slate-200">
                    <img src="{{ asset('images/galeria/recubrimientos/loseta_4.jpeg') }}"
                        alt="Instalación de Loseta Antiácida"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
                <!-- Imagen 2: Pisos Epóxicos -->
                <div class="relative overflow-hidden rounded-2xl shadow-xl aspect-[3/4] border border-slate-200">
                    <img src="{{ asset('images/galeria/recubrimientos/loseta_7.jpeg') }}"
                        alt="Recubrimiento Epóxico Industrial"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
            </div>

            <!-- Columna de Texto (Derecha en pantallas grandes) -->
            <div class="order-1 lg:order-2">
                <span class="text-blue-600 font-bold text-xs tracking-widest uppercase block mb-2">Recubrimientos
                    Industriales</span>
                <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tight mb-4 text-slate-900">
                    Sistemas de Pisos Epóxicos y Loseta Antiácida
                </h2>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-4">
                    Protección especializada para superficies industriales expuestas a ataques químicos severos, ácidos,
                    altos impactos y tráfico pesado constante.
                </p>
                <ul class="text-slate-600 text-xs sm:text-sm space-y-2 mb-6">
                    <li class="flex items-center gap-2">
                        <span class="text-blue-600 font-bold">✓</span> Aplicación de pisos epóxicos autonivelantes y de alta
                        resistencia.
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-blue-600 font-bold">✓</span> Colocación profesional de loseta antiácida para
                        plantas químicas y de procesos.
                    </li>
                </ul>

                <!-- Botón de Cotización -->
                <div>
                    <a href="{{ route('servicios.recubrimientos') }}"
                        class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs tracking-widest uppercase px-6 py-3 rounded-lg shadow-lg transition-all duration-300 hover:translate-y-[-2px]">
                        Ver más detalles
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>


    <section class="bg-slate-950 text-white py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Columna de Texto -->
            <div>
                <span class="text-blue-500 font-bold text-xs tracking-widest uppercase block mb-2">Maquinado y
                    Refaccionamiento</span>
                <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tight mb-4">
                    Maquinado Industrial
                </h2>
                <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-6">
                    Maquinado de piezas de precisión, fabricación de refacciones industriales y partes mecánicas bajo
                    especificación.
                </p>

                <!-- Características / Viñetas -->
                <ul class="space-y-2 mb-6 text-slate-300 text-xs sm:text-sm">
                    <li class="flex items-center gap-2">
                        <span class="text-blue-500 font-bold">✓</span> Fabricación de refacciones y partes mecánicas a la
                        medida.
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-blue-500 font-bold">✓</span> Maquinado de precisión para componentes críticos de
                        maquinaria.
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-blue-500 font-bold">✓</span> Recuperación y ajuste de piezas metálicas
                        desgastadas.
                    </li>
                </ul>

                <!-- Botón de Cotización -->
                <div>
                    <a href="{{ route('servicios.maquinado') }}"
                        class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs tracking-widest uppercase px-6 py-3 rounded-lg shadow-lg transition-all duration-300 hover:translate-y-[-2px]">
                        Ver más detalles
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Columna de Imágenes (Dos imágenes simétricas) -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Imagen 1 -->
                <div class="relative overflow-hidden rounded-xl shadow-2xl aspect-[3/4] border border-slate-800">
                    <img src="{{ asset('images/refacciones.jpeg') }}" alt="Maquinado industrial de precisión"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
                <!-- Imagen 2 (puedes cambiar el nombre del archivo según tus imágenes) -->
                <div class="relative overflow-hidden rounded-xl shadow-2xl aspect-[3/4] border border-slate-800">
                    <img src="{{ asset('images/maquinado_industrial.jpg') }}" alt="Refacciones y piezas mecánicas"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
            </div>

        </div>
    </section>



    <section class="bg-white text-slate-900 py-20 px-4 sm:px-6 lg:px-8 border-y border-slate-200">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Columna con Dos Imágenes (Izquierda en pantallas grandes gracias a 'order') -->
            <div class="grid grid-cols-2 gap-4 order-2 lg:order-1">
                <!-- Imagen 1 -->
                <div class="relative overflow-hidden rounded-2xl shadow-xl aspect-[3/4] border border-slate-200">
                    <img src="{{ asset('images/soldador_saltillo_1.jpeg') }}" alt="Recubrimiento 1"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
                <!-- Imagen 2 -->
                <div class="relative overflow-hidden rounded-2xl shadow-xl aspect-[3/4] border border-slate-200">
                    <img src="{{ asset('images/soldador_celaya.jpeg') }}" alt="Soldador_1_1_"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
            </div>

            <!-- Columna de Texto -->
            <div class="order-1 lg:order-2">
                <span class="text-blue-600 font-bold text-xs tracking-widest uppercase block mb-2">
                    Construcción de Obras Industriales
                </span>
                <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tight mb-4 text-slate-900">
                    Obras Industriales, Civiles, Soldadura y Pailería
                </h2>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-6">
                    Servicios de Ingeniería y Diseño de Proyectos, Fabricación y Construcción. Proyectos llave en mano e
                    integradores de la Industria.
                </p>

                <!-- Características / Viñetas -->
                <ul class="space-y-2 mb-6 text-slate-600 text-xs sm:text-sm">
                    <li class="flex items-center gap-2">
                        <span class="text-blue-600 font-bold">✓</span> Ingeniería conceptual y diseño de proyectos
                        especializados.
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-blue-600 font-bold">✓</span> Ejecución de obra civil, estructural y pailería
                        avanzada.
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-blue-600 font-bold">✓</span> Soluciones integrales para plantas
                        de producción.
                    </li>
                </ul>

                <!-- Botón de Cotización -->
                <div>
                    <a href="{{ route('servicios.construccion') }}"
                        class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs tracking-widest uppercase px-6 py-3 rounded-lg shadow-lg transition-all duration-300 hover:translate-y-[-2px]">
                        Ver más detalles
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>


    <section class="bg-slate-950 text-white py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Columna de Texto -->
            <div>
                <span class="text-blue-500 font-bold text-xs tracking-widest uppercase block mb-2">Manejo de Scrap</span>
                <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tight mb-4">
                    Servicio de manejo y disposición de Scrap
                </h2>
                <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-6">
                    Servicios integrales que comprenden la recolección, transporte, clasificación, reciclaje o disposición
                    final de desperdicios industriales.
                </p>

                <!-- Características / Viñetas -->
                <ul class="space-y-2 mb-6 text-slate-300 text-xs sm:text-sm">
                    <li class="flex items-center gap-2">
                        <span class="text-blue-500 font-bold">✓</span> Recolección y transporte seguro de residuos
                        industriales.
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-blue-500 font-bold">✓</span> Clasificación y procesamiento eficiente de
                        materiales.
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-blue-500 font-bold">✓</span> Disposición final ecológica y cumplimiento
                        normativo.
                    </li>
                </ul>

                <!-- Botón de Cotización -->
                <div>
                    <a href="{{ route('servicios.scrap') }}"
                        class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs tracking-widest uppercase px-6 py-3 rounded-lg shadow-lg transition-all duration-300 hover:translate-y-[-2px]">
                        Ver más detalles
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Columna de Imágenes (Dos imágenes simétricas) -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Imagen 1 -->
                <div class="relative overflow-hidden rounded-xl shadow-2xl aspect-[3/4] border border-slate-800">
                    <img src="{{ asset('images/scrap.jpeg') }}" alt="Manejo de Scrap"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
                <!-- Imagen 2 (puedes cambiar el nombre por otra foto relacionada en tu carpeta public/images) -->
                <div class="relative overflow-hidden rounded-xl shadow-2xl aspect-[3/4] border border-slate-800">
                    <img src="{{ asset('images/scrap_2.jpeg') }}" alt="Reciclaje y disposición de residuos"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
            </div>

        </div>
    </section>

@endsection
