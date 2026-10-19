@extends('layouts.app')

@section('title', 'AGC GROUP México | Soluciones Industriales Integrales')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-950 min-h-screen flex items-center overflow-hidden">

        <div class="absolute inset-0 z-0 opacity-60 bg-cover bg-center"
            style="background-image: url('{{ asset('images/fondo_soldador_1.jpeg') }}'); background-size: cover; background-position: center;">

        </div>

        <!-- Overlay/Gradiente para asegurar que el texto sea completamente legible -->
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950/90 via-slate-950/70 to-slate-950/40 z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20 w-full">
            <div class="max-w-3xl">

                <!-- Eslogan / Ubicación -->
                <p class="text-blue-500 font-bold tracking-widest uppercase text-sm md:text-base mb-4 drop-shadow-md">
                    Celaya &bull; Guanajuato &bull; México
                </p>

                <!-- Título Principal -->
                <!-- Se ajustó el interlineado (leading-[0.9]) y tamaños masivos para coincidir con el diseño -->
                <h1 class="text-5xl md:text-7xl lg:text-[85px] font-black uppercase tracking-tight leading-[0.9] mb-8">
                    <span class="text-white block drop-shadow-lg">AGC GROUP</span>
                    <span class="text-blue-500 block drop-shadow-lg">SOLUCIONES</span>
                    <span class="text-blue-500 block drop-shadow-lg">INDUSTRIALES</span>
                </h1>

                <!-- Descripción -->
                <p class="text-slate-200 text-lg md:text-xl mb-10 max-w-2xl font-light leading-relaxed drop-shadow">
                    "AGC GROUP MEXICO" Somos una empresa enfocada en un ecosistema de
                    fabricación metálica, corte, mecanizado, soldadura y recubrimientos.
                </p>

                <!-- Botón de Acción -->
                <div>
                    <a href="#servicios"
                        class="inline-block bg-blue-600 hover:bg-blue-500 text-white font-bold py-4 px-10 text-center uppercase tracking-widest text-sm transition rounded-sm shadow-[0_0_20px_rgba(37,99,235,0.4)]">
                        Nuestros Servicios
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Barra Inferior de Diferenciadores -->
    <section class="bg-slate-950 border-y border-slate-800 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-2">
                <h3 class="text-blue-500 font-black text-lg tracking-wider uppercase">Ingeniería</h3>
                <p class="text-xs text-slate-400 mt-1">Diseño y cálculo especializado</p>
            </div>
            <div class="p-2">
                <h3 class="text-blue-500 font-black text-lg tracking-wider uppercase">Tecnología</h3>
                <p class="text-xs text-slate-400 mt-1">Procesos de alta precisión</p>
            </div>
            <div class="p-2">
                <h3 class="text-blue-500 font-black text-lg tracking-wider uppercase">Calidad</h3>
                <p class="text-xs text-slate-400 mt-1">Estándares industriales</p>
            </div>
            <div class="p-2">
                <h3 class="text-blue-500 font-black text-lg tracking-wider uppercase">Compromiso</h3>
                <p class="text-xs text-slate-400 mt-1">Entrega de trabajos en tiempo y forma</p>
            </div>
        </div>
    </section>

    <!-- Sección de Servicios con Carrusel -->
    <section id="servicios" class="py-20 bg-slate-100 text-slate-900 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Encabezado de la Sección -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-5xl font-black text-slate-900 uppercase tracking-tight mb-3">
                    Nuestros Servicios
                </h2>
            </div>

            <!-- Contenedor del Carrusel -->
            <div class="relative px-4">
                <div class="swiper serviciosSwiper overflow-hidden">
                    <div class="swiper-wrapper py-6">

                        <!-- Tarjeta 1: Mantenimiento Industrial -->
                        <div class="swiper-slide h-auto">
                            <div
                                class="bg-white rounded-lg overflow-hidden shadow-lg border-t-4 border-blue-600 flex flex-col justify-between h-full transition hover:-translate-y-1 text-center">
                                <div>
                                    <div class="p-6">
                                        <span
                                            class="text-blue-600 font-bold text-[10px] tracking-widest uppercase block mb-1">Manufactura</span>
                                        <h3 class="text-xl font-bold text-slate-900 mb-2">Transformación de metales a gran
                                            escala</h3>
                                        <p class="text-slate-600 text-xs leading-relaxed">
                                            Corte, doblado y rolado de metales de gran calibre con precisión industrial.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Tarjeta 2: Fabricación Industrial -->
                        <div class="swiper-slide h-auto">
                            <div
                                class="bg-white rounded-lg overflow-hidden shadow-lg border-t-4 border-blue-600 flex flex-col justify-between h-full transition hover:-translate-y-1 text-center">
                                <div>
                                    <div class="p-6">
                                        <span
                                            class="text-blue-600 font-bold text-[10px] tracking-widest uppercase block mb-1">Recubrimientos</span>
                                        <h3 class="text-xl font-bold text-slate-900 mb-2">Sistemas de Pisos Epóxicos y
                                            Loseta Antiácida</h3>
                                        <p class="text-slate-600 text-xs leading-relaxed">
                                            Protección especializada para superficies industriales expuestas a ataques
                                            químicos severos, ácidos, altos impactos y tráfico pesado constante.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Tarjeta 3: Maquinado e Ingeniería -->
                        <div class="swiper-slide h-auto">
                            <div
                                class="bg-white rounded-lg overflow-hidden shadow-lg border-t-4 border-blue-600 flex flex-col justify-between h-full transition hover:-translate-y-1 text-center">
                                <div>
                                    <div class="p-6">
                                        <span
                                            class="text-blue-600 font-bold text-[10px] tracking-widest uppercase block mb-1">Maquinado
                                            y Refaccionamiento</span>
                                        <h3 class="text-xl font-bold text-slate-900 mb-2">Maquinado Industrial</h3>
                                        <p class="text-slate-600 text-xs leading-relaxed">
                                            Maquinado de piezas de precisión, fabricación de refacciones industriales y
                                            partes mecánicas bajo especificación.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- Tarjeta 4: Maquinado e Ingeniería -->
                        <div class="swiper-slide h-auto">
                            <div
                                class="bg-white rounded-lg overflow-hidden shadow-lg border-t-4 border-blue-600 flex flex-col justify-between h-full transition hover:-translate-y-1 text-center">
                                <div>
                                    <div class="p-6">
                                        <span
                                            class="text-blue-600 font-bold text-[10px] tracking-widest uppercase block mb-1">Construcción
                                            de Obras Industriales</span>
                                        <h3 class="text-xl font-bold text-slate-900 mb-2">Construcción de Obras
                                            Industriales, Civiles, Soldadura y Pailería</h3>
                                        <p class="text-slate-600 text-xs leading-relaxed">
                                            Servicios de Ingeniería y Diseño de Proyectos, Fabricación y Construcción.
                                            Proyectos llave en manos e integradores de la Industria.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Tarjeta 5: Manejo de Scrap -->
                        <div class="swiper-slide h-auto">
                            <div
                                class="bg-white rounded-lg overflow-hidden shadow-lg border-t-4 border-blue-600 flex flex-col justify-between h-full transition hover:-translate-y-1 text-center">
                                <div>
                                    <div class="p-6">
                                        <span
                                            class="text-blue-600 font-bold text-[10px] tracking-widest uppercase block mb-1">Manejo
                                            de Scrap</span>
                                        <h3 class="text-xl font-bold text-slate-900 mb-2">Servicio de manejo y disposicion
                                            de Scrap</h3>
                                        <p class="text-slate-600 text-xs leading-relaxed">
                                            Servicios de manejo y disposición de scrap comprende la recolección, transporte,
                                            clasificación, reciclaje o disposición final de desperdicios industriales.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                <!-- Botones Personalizados de Navegación -->
                <button
                    class="custom-prev absolute left-0 top-1/2 -translate-y-1/2 z-20 bg-slate-900 hover:bg-blue-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-2xl transition">
                    &#10094;
                </button>
                <button
                    class="custom-next absolute right-0 top-1/2 -translate-y-1/2 z-20 bg-slate-900 hover:bg-blue-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-2xl transition">
                    &#10095;
                </button>
            </div>
        </div>
    </section>

    <!-- Sección de Proyectos-->
    <section id="proyectos" class="py-20 bg-slate-950 text-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tight text-white mb-4">
                    NUESTROS PROYECTOS
                </h2>
                <p class="text-slate-400 text-sm md:text-base max-w-xl mx-auto">
                    Soluciones eficientes y de alta calidad.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Tarjeta 1 -->
                <div
                    class="bg-slate-900/80 border border-slate-800 rounded-2xl p-6 hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div
                            class="relative rounded-xl overflow-hidden mb-6 p-1 bg-gradient-to-br from-blue-600 via-slate-800 to-blue-900">
                            <div class="relative h-64 md:h-72 w-full overflow-hidden rounded-lg">
                                <img src="{{ asset('images/estructura.png') }}" alt="Montaje de Silos"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-white mb-3 tracking-tight leading-snug">
                            Diseño y Fabricacion de estructuras Metalicas.
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            Desarrollo de plataformas y componentes industriales con altos estándares de fabricación.
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div
                    class="bg-slate-900/80 border border-slate-800 rounded-2xl p-6 hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div
                            class="relative rounded-xl overflow-hidden mb-6 p-1 bg-gradient-to-br from-blue-600 via-slate-800 to-blue-900">
                            <div class="relative h-64 md:h-72 w-full overflow-hidden rounded-lg">
                                <img src="{{ asset('images/instalacion_tuberia.jpg') }}" alt="Montaje de Silos"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-white mb-3 tracking-tight leading-snug">
                            Ingeneria e instalacion en control de flujos
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            Instalación y montaje de tuberías, suministros y componentes mecánicos para procesos
                            industriales.
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div
                    class="bg-slate-900/80 border border-slate-800 rounded-2xl p-6 hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div
                            class="relative rounded-xl overflow-hidden mb-6 p-1 bg-gradient-to-br from-blue-600 via-slate-800 to-blue-900">
                            <div class="relative h-64 md:h-72 w-full overflow-hidden rounded-lg">
                                <img src="{{ asset('images/instalacion_loseta.jpg') }}" alt="Montaje de Silos"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-white mb-3 tracking-tight leading-snug">
                            Recubrimientos Especializados
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            Aplicacion experta de loseta antiacida de alta resistencia quimica y pisos expoxicos
                            industriales
                            para entornos criticos.
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div
                    class="bg-slate-900/80 border border-slate-800 rounded-2xl p-6 hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div
                            class="relative rounded-xl overflow-hidden mb-6 p-1 bg-gradient-to-br from-blue-600 via-slate-800 to-blue-900">
                            <div class="relative h-64 md:h-72 w-full overflow-hidden rounded-lg">
                                <img src="{{ asset('images/desmantelamiento_industrial.jpg') }}" alt="Montaje de Silos"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-white mb-3 tracking-tight leading-snug">
                            Desmantelamiento industrial
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            Desmontaje y retiro seguro de equipos, maquinaria y estructuras industriales mediante maniobras
                            de alta precisión.
                        </p>
                    </div>
                </div>


                <!-- Tarjeta 5 -->
                <div
                    class="bg-slate-900/80 border border-slate-800 rounded-2xl p-6 hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div
                            class="relative rounded-xl overflow-hidden mb-6 p-1 bg-gradient-to-br from-blue-600 via-slate-800 to-blue-900">
                            <div class="relative h-64 md:h-72 w-full overflow-hidden rounded-lg">
                                <img src="{{ asset('images/integracion_equipos.jpeg') }}" alt="Montaje de Silos"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-white mb-3 tracking-tight leading-snug">
                            Integracion de equipos
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            Conexión, interconexión de sistemas electromecánicos y puesta en marcha para el funcionamiento
                            óptimo de maquinaria industrial.
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 6 -->
                <div
                    class="bg-slate-900/80 border border-slate-800 rounded-2xl p-6 hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div
                            class="relative rounded-xl overflow-hidden mb-6 p-1 bg-gradient-to-br from-blue-600 via-slate-800 to-blue-900">
                            <div class="relative h-64 md:h-72 w-full overflow-hidden rounded-lg">
                                <img src="{{ asset('images/renta_equipos.jpg') }}" alt="Montaje de Silos"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-white mb-3 tracking-tight leading-snug">
                            Renta de equipos de carga y elevacion
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            Renta de maquinaria especializada de carga y elevación, adaptada a tus necesidades operativas
                            con máximo rendimiento y seguridad.

                        </p>
                    </div>
                </div>


                <!-- Tarjeta 7 -->
                <div
                    class="bg-slate-900/80 border border-slate-800 rounded-2xl p-6 hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div
                            class="relative rounded-xl overflow-hidden mb-6 p-1 bg-gradient-to-br from-blue-600 via-slate-800 to-blue-900">
                            <div class="relative h-64 md:h-72 w-full overflow-hidden rounded-lg">
                                <img src="{{ asset('images/instalacion_linea.jpg') }}" alt="Montaje de Silos"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-white mb-3 tracking-tight leading-snug">
                            Montaje de lineas de producion
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            Instalación integral, nivelación y alineación de maquinaria para la optimización de procesos
                            productivos en planta.
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 8 -->
                <div
                    class="bg-slate-900/80 border border-slate-800 rounded-2xl p-6 hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div
                            class="relative rounded-xl overflow-hidden mb-6 p-1 bg-gradient-to-br from-blue-600 via-slate-800 to-blue-900">
                            <div class="relative h-64 md:h-72 w-full overflow-hidden rounded-lg">
                                <img src="{{ asset('images/limpieza.jpg') }}" alt="Servicio de limpieza"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-white mb-3 tracking-tight leading-snug">
                            Servicio de Limpieza
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            Servicios profesionales de limpieza profunda y sanitización continua para áreas corporativas,
                            comerciales e industriales.
                        </p>
                    </div>
                </div>

                <!-- Envoltorio para centrar en Grid de 2 columnas -->
                <div class="col-span-1 md:col-span-2 flex justify-center w-full">

                    <!-- Tarjeta 9 -->
                    <div
                        class="w-full max-w-xl bg-slate-900/80 border border-slate-800 rounded-2xl p-6 hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <div
                                class="relative rounded-xl overflow-hidden mb-6 p-1 bg-gradient-to-br from-blue-600 via-slate-800 to-blue-900">
                                <div class="relative h-64 md:h-72 w-full overflow-hidden rounded-lg">
                                    <img src="{{ asset('images/mantenimiento_1.jpg') }}" alt="Mantenimiento de equipos"
                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                </div>
                            </div>
                            <h3 class="text-2xl font-black text-white mb-3 tracking-tight leading-snug">
                                Mantenimiento Industrial Integral
                            </h3>
                            <p class="text-slate-400 text-sm leading-relaxed mb-4">
                                Soporte técnico y conservación de equipos industriales bajo estrictos estándares de
                                inocuidad,
                                garantizando la máxima eficiencia en plantas de producción.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Sección de Capacidades: Equipos y Tecnología -->
    <section id="capacidades" class="py-20 bg-slate-100 text-slate-900 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Encabezado de la sección opcional pero recomendado -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span
                    class="inline-block px-3.5 py-1 bg-blue-600/10 border border-blue-600/30 text-blue-600 text-xs font-bold uppercase tracking-widest rounded-full mb-3">
                    Nuestras Capacidades
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    Infraestructura, Tecnología y Especialidades Industriales
                </h2>
                <p class="mt-4 text-slate-600 text-sm sm:text-base">
                    Soluciones integrales ejecutadas bajo rigurosos estándares de calidad, precisión y seguridad.
                </p>
            </div>

            <!-- Grid de 6 columnas adaptativo (3 por fila en pantallas grandes) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Tarjeta 1: Manufactura -->
                <div
                    class="bg-white rounded-2xl shadow-md border border-slate-200/80 p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 hover:border-blue-500/30 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-14 h-14 bg-blue-600 text-white rounded-xl flex items-center justify-center mb-6 shadow-md shadow-blue-500/20">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h2m-2 0V9m0 0H7m0 0v12" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 mb-4 leading-snug">Manufactura</h3>
                        <ul class="text-slate-600 text-xs md:text-sm leading-relaxed space-y-2.5">
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">•</span>
                                <span>Corte láser de alta precisión en acero inoxidable.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">•</span>
                                <span>Doblado de placa hasta 1/4” de espesor por 12 pies de longitud.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Tarjeta 2: Fabricación Metálica -->
                <div
                    class="bg-white rounded-2xl shadow-md border border-slate-200/80 p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 hover:border-blue-500/30 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-14 h-14 bg-blue-600 text-white rounded-xl flex items-center justify-center mb-6 shadow-md shadow-blue-500/20">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 mb-4 leading-snug">Fabricación Metálica</h3>
                        <ul class="text-slate-600 text-xs md:text-sm leading-relaxed space-y-2.5">
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">•</span>
                                <span>Estructuras de acero inoxidable grado sanitario para el sector alimenticio y
                                    farmacéutico.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">•</span>
                                <span>Fabricación de soportería y estructuras de acero al carbón.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Tarjeta 3: Montaje de Estructuras (NUEVA) -->
                <div
                    class="bg-white rounded-2xl shadow-md border border-slate-200/80 p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 hover:border-blue-500/30 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-14 h-14 bg-blue-600 text-white rounded-xl flex items-center justify-center mb-6 shadow-md shadow-blue-500/20">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 mb-4 leading-snug">Montaje de Estructuras</h3>
                        <ul class="text-slate-600 text-xs md:text-sm leading-relaxed space-y-2.5">
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">•</span>
                                <span>Erección y ensamblaje de naves industriales y plataformas.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">•</span>
                                <span>Instalación de componentes estructurales bajo estrictas normas de seguridad.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Tarjeta 4: Control de Flujos y Tuberías (NUEVA) -->
                <div
                    class="bg-white rounded-2xl shadow-md border border-slate-200/80 p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 hover:border-blue-500/30 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-14 h-14 bg-blue-600 text-white rounded-xl flex items-center justify-center mb-6 shadow-md shadow-blue-500/20">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 mb-4 leading-snug">Control de Flujos</h3>
                        <ul class="text-slate-600 text-xs md:text-sm leading-relaxed space-y-2.5">
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">•</span>
                                <span>Instalación y montaje de redes de tuberías industriales.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">•</span>
                                <span>Suministro de componentes mecánicos para procesos de alta exigencia.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Tarjeta 5: Recubrimientos y Loseta Antiácida (NUEVA) -->
                <div
                    class="bg-white rounded-2xl shadow-md border border-slate-200/80 p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 hover:border-blue-500/30 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-14 h-14 bg-blue-600 text-white rounded-xl flex items-center justify-center mb-6 shadow-md shadow-blue-500/20">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 mb-4 leading-snug">Recubrimientos Especiales</h3>
                        <ul class="text-slate-600 text-xs md:text-sm leading-relaxed space-y-2.5">
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">•</span>
                                <span>Instalación de loseta antiácida para áreas de procesos químicos severos.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">•</span>
                                <span>Aplicación de pisos epóxicos resistentes a alto tráfico industrial.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Tarjeta 6: Seguridad Industrial y Desmantelamiento (NUEVA) -->
                <div
                    class="bg-white rounded-2xl shadow-md border border-slate-200/80 p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 hover:border-blue-500/30 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-14 h-14 bg-blue-600 text-white rounded-xl flex items-center justify-center mb-6 shadow-md shadow-blue-500/20">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 mb-4 leading-snug">Seguridad y Maniobras</h3>
                        <ul class="text-slate-600 text-xs md:text-sm leading-relaxed space-y-2.5">
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">•</span>
                                <span>Cultura de seguridad industrial indispensable en cada ejecución.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">•</span>
                                <span>Proyectos de desmantelamiento industrial y renta de equipo pesado.</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección: Capacidades Integrales -->
    <section class="relative bg-slate-950 text-white py-24 overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat opacity-20"
            style="background-image: url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80');">
        </div>

        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/90 via-slate-950/95 to-slate-950 z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mb-16">
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-2.5 h-2.5 bg-blue-500 rotate-45 inline-block"></span>
                    <span class="text-blue-400 font-mono text-xs tracking-widest uppercase font-bold">
                        CAPACIDADES
                    </span>
                </div>

                <h2 class="text-3xl sm:text-5xl font-black uppercase tracking-tight text-white mb-6 leading-tight">
                    Fabricación integral de metal.<br class="hidden sm:inline">
                </h2>

                <p class="text-slate-300 text-sm sm:text-base font-light leading-relaxed">
                    Ofrecemos soluciones de fabricación completas —
                    gestionadas de principio a fin por un equipo de proyecto dedicado para cada cliente.
                </p>
            </div>

            <div class="border-t border-slate-800 divide-y divide-slate-800">
                <!-- Item 1 -->
                <div
                    class="py-6 grid grid-cols-1 md:grid-cols-12 items-center gap-4 hover:bg-slate-900/50 transition duration-300 px-2 rounded-lg">
                    <div class="md:col-span-2 flex items-center">
                        <span class="text-blue-400 font-mono text-xs font-bold tracking-wider">/CUT</span>
                    </div>
                    <div class="md:col-span-3">
                        <h3 class="text-2xl font-bold text-white tracking-tight">Corte (Láser y Plasma)</h3>
                    </div>
                    <div class="md:col-span-7">
                        <p class="text-slate-300 text-sm sm:text-base font-light">
                            Tecnología de alta precisión para corte de láminas y placas de gran calibre en acero al carbón,
                            inoxidable y aluminio con tolerancias estrictas.
                        </p>
                    </div>
                </div>


                <!-- Item 2 -->
                <div
                    class="py-6 grid grid-cols-1 md:grid-cols-12 items-center gap-4 hover:bg-slate-900/50 transition duration-300 px-2 rounded-lg">
                    <div class="md:col-span-2 flex items-center">
                        <span class="text-blue-400 font-mono text-xs font-bold tracking-wider">/WLD</span>
                    </div>
                    <div class="md:col-span-3">
                        <h3 class="text-2xl font-bold text-white tracking-tight">Soldadura Especializada</h3>
                    </div>
                    <div class="md:col-span-7">
                        <p class="text-slate-300 text-sm sm:text-base font-light">
                            Soldadura TIG, MIG, SMAW con personal certificado para recipientes y tuberías industriales.
                        </p>
                    </div>
                </div>


                <!-- Item 3 -->
                <div
                    class="py-6 grid grid-cols-1 md:grid-cols-12 items-center gap-4 hover:bg-slate-900/50 transition duration-300 px-2 rounded-lg">
                    <div class="md:col-span-2 flex items-center">
                        <span class="text-blue-400 font-mono text-xs font-bold tracking-wider">/COA</span>
                    </div>
                    <div class="md:col-span-3">
                        <h3 class="text-2xl font-bold text-white tracking-tight">Pisos Epóxicos y Loseta Antiácida</h3>
                    </div>
                    <div class="md:col-span-7">
                        <p class="text-slate-300 text-sm sm:text-base font-light">
                            Instalación especializada para industrias farmacéuticas, alimenticias y de manufactura pesada.
                        </p>
                    </div>
                </div>


                <!-- Item 4 -->
                <div
                    class="py-6 grid grid-cols-1 md:grid-cols-12 items-center gap-4 hover:bg-slate-900/50 transition duration-300 px-2 rounded-lg">
                    <div class="md:col-span-2 flex items-center">
                        <span class="text-blue-400 font-mono text-xs font-bold tracking-wider">/ENG</span>
                    </div>
                    <div class="md:col-span-3">
                        <h3 class="text-2xl font-bold text-white tracking-tight">Ingeniería y Desarrollo de Proyectos</h3>
                    </div>
                    <div class="md:col-span-7">
                        <p class="text-slate-300 text-sm sm:text-base font-light">
                            Planificación y diseño técnico con software especializado para garantizar viabilidad y
                            precisión.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sección de Clientes -->
    <section id="clientes" class="py-16 bg-white relative border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Encabezado de la Sección -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 uppercase tracking-tight mb-4">
                    Nuestos Clientes
                </h2>
                <!-- Línea decorativa azul (remplazando la verde de tu imagen para mantener la paleta) -->
                <div class="w-16 h-1.5 bg-blue-600 mx-auto rounded"></div>
            </div>

            <!-- Contenedor del Carrusel -->
            <div class="relative px-8">
                <div class="swiper clientesSwiper overflow-hidden">
                    <div class="swiper-wrapper py-4">

                        <!-- Cliente 1: Pepsico -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white border border-slate-100 rounded-lg p-6 flex items-center justify-center h-32 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)] hover:shadow-lg transition-shadow duration-300">
                                <img src="{{ asset('https://www.actinveranalisis.com/documents/d/actinveranalisis/empresa_icono_pep') }}"
                                    alt="Pepsico"
                                    class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition duration-300">
                            </div>
                        </div>

                        <!-- Cliente 2: Bachoco -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white border border-slate-100 rounded-lg p-6 flex items-center justify-center h-32 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)] hover:shadow-lg transition-shadow duration-300">
                                <img src="{{ asset('https://images.seeklogo.com/logo-png/21/1/bachoco-logo-png_seeklogo-215807.png') }}"
                                    alt="Bachoco"
                                    class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition duration-300">
                            </div>
                        </div>

                        <!-- Cliente 3: Aciarium -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white border border-slate-100 rounded-lg p-6 flex items-center justify-center h-32 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)] hover:shadow-lg transition-shadow duration-300">
                                <img src="{{ asset('https://static.wixstatic.com/media/0db0f5_a6709bac95974559a415d039f2c789e4~mv2.png/v1/crop/x_58,y_17,w_241,h_168/fill/w_337,h_226,al_c,lg_1,q_85,enc_avif,quality_auto/0db0f5_a6709bac95974559a415d039f2c789e4~mv2.png') }}"
                                    alt="Aciarium"
                                    class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition duration-300">
                            </div>
                        </div>

                        <!-- Cliente 4: INCOE -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white border border-slate-100 rounded-lg p-6 flex items-center justify-center h-32 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)] hover:shadow-lg transition-shadow duration-300">
                                <img src="{{ asset('https://static.wixstatic.com/media/0db0f5_35d2c9fbf51c4c87b1f120947068b5e6~mv2.png/v1/fill/w_420,h_218,al_c,lg_1,q_85,enc_avif,quality_auto/0db0f5_35d2c9fbf51c4c87b1f120947068b5e6~mv2.png') }}"
                                    alt="INCOE"
                                    class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition duration-300">
                            </div>
                        </div>

                        <!-- Cliente 5: NT Construcciones -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white border border-slate-100 rounded-lg p-6 flex items-center justify-center h-32 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)] hover:shadow-lg transition-shadow duration-300">
                                <img src="{{ asset('https://static.wixstatic.com/media/0db0f5_b916c59a143b435cb7a6d548e5c2670c~mv2.png/v1/crop/x_9,y_0,w_432,h_227/fill/w_476,h_252,al_c,lg_1,q_85,enc_avif,quality_auto/0db0f5_b916c59a143b435cb7a6d548e5c2670c~mv2.png') }}"
                                    alt="NT Construcciones"
                                    class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition duration-300">
                            </div>
                        </div>

                        <!-- Cliente 6: EMYCSA -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white border border-slate-100 rounded-lg p-6 flex items-center justify-center h-32 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)] hover:shadow-lg transition-shadow duration-300">
                                <img src="{{ asset('https://static.wixstatic.com/media/0db0f5_12fca0590d0c49fe97ce0a9588407566~mv2.png/v1/crop/x_0,y_52,w_370,h_120/fill/w_518,h_158,al_c,lg_1,q_85,enc_avif,quality_auto/0db0f5_12fca0590d0c49fe97ce0a9588407566~mv2.png') }}"
                                    alt="EMYCSA"
                                    class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition duration-300">
                            </div>
                        </div>

                        <!-- Cliente 7: ProyectoTerra -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white border border-slate-100 rounded-lg p-6 flex items-center justify-center h-32 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)] hover:shadow-lg transition-shadow duration-300">
                                <img src="{{ asset('https://static.wixstatic.com/media/0db0f5_b65b3f318feb416f95aba87486ad3db7~mv2.png/v1/fill/w_657,h_149,al_c,lg_1,q_85,enc_avif,quality_auto/Proyecto%20Terra.png') }}"
                                    alt="ProyectoTerra"
                                    class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition duration-300">
                            </div>
                        </div>

                        <!-- Cliente 8: YOROZO -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white border border-slate-100 rounded-lg p-6 flex items-center justify-center h-32 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)] hover:shadow-lg transition-shadow duration-300">
                                <img src="{{ asset('https://static.wixstatic.com/media/0db0f5_5158da6a56824af895eca2e87ab9a36a~mv2.png/v1/fill/w_508,h_132,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/0db0f5_5158da6a56824af895eca2e87ab9a36a~mv2.png') }}"
                                    alt="YOROZO"
                                    class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition duration-300">
                            </div>
                        </div>

                        <!-- Cliente 9: ITT -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white border border-slate-100 rounded-lg p-6 flex items-center justify-center h-32 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)] hover:shadow-lg transition-shadow duration-300">
                                <img src="{{ asset('https://static.wixstatic.com/media/0db0f5_c5c6748bc25d42188f3fad48876c9142~mv2.png/v1/fill/w_470,h_260,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/ITT-industries.png') }}"
                                    alt="ITT"
                                    class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition duration-300">
                            </div>
                        </div>

                        <!-- Cliente 10: Cooopel -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white border border-slate-100 rounded-lg p-6 flex items-center justify-center h-32 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)] hover:shadow-lg transition-shadow duration-300">
                                <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpbZM5a7J0vnW-RdVlGr8gHMlabywdm6syA3jCY8jy8Q&s=10') }}"
                                    alt="Cooopel"
                                    class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition duration-300">
                            </div>
                        </div>

                        

                        <!-- Cliente 11: SCHAFER -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white border border-slate-100 rounded-lg p-6 flex items-center justify-center h-32 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)] hover:shadow-lg transition-shadow duration-300">
                                <img src="{{ asset('https://www.ssi-schaefer.com/resource/crblob/480/a14c9a665a8272cc2b80687168a2e3d7/logo-ssi-schaefer-svg-data.svg') }}"
                                    alt="SCHAFER"
                                    class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition duration-300">
                            </div>
                        </div>

                        <!-- Cliente 12: AlphaHardin -->
                        <div class="swiper-slide">
                            <div
                                class="bg-white border border-slate-100 rounded-lg p-6 flex items-center justify-center h-32 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)] hover:shadow-lg transition-shadow duration-300">
                                <img src="{{ asset('https://www.alpha-hardin.com/wp-content/uploads/2018/07/LOGO-LOGO-300x60.png') }}"
                                    alt="AlphaHardin"
                                    class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition duration-300">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script Seguro de Inicialización -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof Swiper !== 'undefined') {

                // 1. Carrusel Original de Servicios
                new Swiper('.serviciosSwiper', {
                    slidesPerView: 1,
                    spaceBetween: 24,
                    loop: true,
                    navigation: {
                        nextEl: '.custom-next',
                        prevEl: '.custom-prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 30
                        },
                    },
                });

                // 2. NUEVO: Carrusel de Clientes
                new Swiper('.clientesSwiper', {
                    slidesPerView: 2, // Muestra 2 logos en celulares
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 2500, // Tiempo entre cada movimiento (2.5 segundos)
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        }, // 3 logos en tablets
                        768: {
                            slidesPerView: 4,
                            spaceBetween: 30
                        }, // 4 logos en pantallas medianas
                        1024: {
                            slidesPerView: 5,
                            spaceBetween: 30
                        }, // 5 logos en monitores grandes
                    },
                });

            }
        });
    </script>
@endsection
