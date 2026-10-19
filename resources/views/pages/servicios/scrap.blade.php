@extends('layouts.app')

@section('title', 'Servicio de Manejo y Disposición de Scrap | AGC GROUP México')

@section('content')

    <!-- HERO BANNER DE LA SECCIÓN -->
    <section class="relative w-full bg-slate-950 py-16 sm:py-24 border-b border-slate-800 text-white overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600/10 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Botón Regresar -->
            <a href="{{ route('servicios') }}"
               class="inline-flex items-center text-xs font-bold text-slate-400 hover:text-blue-400 uppercase tracking-widest mb-6 transition">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Volver a Servicios
            </a>

            <div class="max-w-3xl">
                <span class="text-blue-500 font-bold text-xs tracking-widest uppercase block mb-2">Manejo de Scrap</span>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-tight text-white mb-4">
                    Servicio de Manejo y Disposición de Scrap
                </h1>
                <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
                    Servicios integrales que comprenden la recolección, transporte, clasificación, reciclaje y disposición final de desperdicios e insumos industriales con estricto apego a las normas ambientales.
                </p>
            </div>
        </div>
    </section>

    <!-- DETALLE TÉCNICO Y GALERÍA -->
    <section class="bg-slate-900 py-16 px-4 sm:px-6 lg:px-8 border-b border-slate-800 text-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <!-- Columna Izquierda: Especificaciones Técnicas y Procesos -->
            <div class="lg:col-span-7 space-y-8">

                <div class="bg-slate-950 border border-slate-800 rounded-2xl p-6 sm:p-8 shadow-xl">
                    <h2 class="text-xl font-bold uppercase tracking-wide text-white mb-6 border-b border-slate-800 pb-3">
                        Proceso de Gestión y Disposición
                    </h2>

                    <div class="space-y-6">
                        <div>
                            <h3 class="text-sm font-bold text-blue-400 uppercase tracking-wider mb-2">1. Recolección y Transporte Seguro</h3>
                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                                Logística especializada para el retiro periódico de sobrantes metálicos, viruta y desecho industrial directamente en las instalaciones de tu planta.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-sm font-bold text-blue-400 uppercase tracking-wider mb-2">2. Clasificación y Procesamiento Eficiente</h3>
                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                                Segregación técnica de metales ferrosos y no ferrosos (acero, aluminio, cobre, bronce) para maximizar la valorización del material recuperado.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-sm font-bold text-blue-400 uppercase tracking-wider mb-2">3. Cumplimiento Normativo y Disposición Final</h3>
                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                                Procesos de reciclaje sustentable garantizando el manejo responsable y la emisión de manifiestos requeridos para auditorías ambientales.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de Beneficios Clave -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-slate-950/60 border border-slate-800 rounded-xl p-5">
                        <span class="text-blue-500 font-extrabold text-lg block mb-1">Acreditación Ambiental</span>
                        <p class="text-xs text-slate-400 font-medium">Cumplimiento total con las normativas locales y federales de manejo de residuos.</p>
                    </div>

                    <div class="bg-slate-950/60 border border-slate-800 rounded-xl p-5">
                        <span class="text-blue-500 font-extrabold text-lg block mb-1">Logística Flexible</span>
                        <p class="text-xs text-slate-400 font-medium">Contenedores en sitio y programación de recolecciones a la medida de tu producción.</p>
                    </div>
                </div>

            </div>

            <!-- Columna Derecha: Galería y CTA -->
            <div class="lg:col-span-5 space-y-6">

                <!-- Galería de Muestra del Servicio -->
                <div class="grid grid-cols-2 gap-3">
                    <div class="overflow-hidden rounded-xl border border-slate-800 aspect-square">
                        <img src="{{ asset('images/scrap.jpeg') }}" alt="Manejo de scrap industrial" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <div class="overflow-hidden rounded-xl border border-slate-800 aspect-square">
                        <img src="{{ asset('images/scrap_2.jpeg') }}" alt="Disposición y reciclaje" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="bg-gradient-to-br from-blue-900/40 via-slate-950 to-slate-950 border border-blue-500/30 rounded-2xl p-6 shadow-2xl text-center space-y-4">
                    <h3 class="text-lg font-bold text-white uppercase tracking-wide">¿Requieres servicio de recolección o manejo de scrap?</h3>
                    <p class="text-xs text-slate-300">
                        Contáctanos para evaluar el volumen y los materiales de tu planta.
                    </p>
                    <a href="{{ route('contacto') }}"
                       class="inline-block w-full py-3.5 bg-blue-600 hover:bg-blue-500 text-white font-extrabold text-xs uppercase tracking-widest rounded-xl transition shadow-lg shadow-blue-600/30">
                        Cotizar Este Servicio
                    </a>
                </div>

            </div>

        </div>
    </section>

@endsection
