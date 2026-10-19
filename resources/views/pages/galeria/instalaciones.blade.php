@extends('layouts.app')

@section('title', 'AGC GROUP México | Soluciones Industriales Integrales')

@section('content')

    <!-- Sección Galería de Proyectos / Trabajos -->
    <section id="galeria" class="py-24 bg-slate-950 text-white relative">

        <!-- Fondo sutil con resplandor azul industrial -->
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-blue-600/10 blur-[140px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Encabezado de la Sección -->
            <div class="text-center space-y-4 max-w-3xl mx-auto mb-12">
                <span
                    class="text-blue-400 font-extrabold text-xs sm:text-sm uppercase tracking-widest bg-blue-500/10 border border-blue-500/20 px-4 py-1.5 rounded-full inline-block">
                    Portafolio de Trabajo
                </span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-white tracking-tight">
                    Nuestra <span
                        class="bg-gradient-to-r from-blue-400 via-blue-400 to-blue-400 bg-clip-text text-transparent">Galería</span>
                    de Proyectos
                </h2>
                <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
                    Explora algunos de nuestros trabajos en desmantelamiento industrial, fabricación metálica, corte y
                    recubrimientos.
                </p>
            </div>

            <!-- Botones de Filtro -->
            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-12">
                <button type="button"
                    class="px-5 py-2 rounded-full text-xs sm:text-sm font-bold bg-blue-600 text-white shadow-lg shadow-blue-600/30 transition-all duration-300">
                    Todos
                </button>
                <a href="{{ route('galeria.desmantelamiento') }}"
                    class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold bg-blue-900/80 hover:bg-slate-800 text-slate-300 border border-slate-800 hover:border-slate-700 transition-all duration-300 inline-block text-center">
                    Desmantelamiento
                </a>
                <a href="{{ route('galeria.fabricacion') }}"
                    class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold bg-blue-900/80 hover:bg-slate-800 text-slate-300 border border-slate-800 hover:border-slate-700 transition-all duration-300">
                    Fabricación
                </a>
                <a href="{{ route('galeria.recubrimientos') }}"
                    class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold bg-blue-900/80 hover:bg-slate-800 text-slate-300 border border-slate-800 hover:border-slate-700 transition-all duration-300 inline-block text-center">
                    Recubrimientos
                </a>
                <a href="{{ route('galeria.mas') }}"
                    class="px-5 py-2 rounded-full text-xs sm:text-sm font-bold bg-blue-600 text-white shadow-lg shadow-blue-600/30 transition-all duration-300">
                    Mas
                </a>
            </div>

            <!-- Grid de Imágenes de la Galería -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <!-- Ítem de Galería 1 -->
                <div
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl">
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/proyectos/marcos_estructurales.jpeg') }}" alt="Desmantelamiento Industrial"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <!-- Superposición gradiente al hacer Hover -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Detalle textual sobre la imagen -->
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Corte y Soldadura</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Estructura
                            Metálica Pesada</h3>
                        <p class="text-xs text-slate-400 mt-1 line-clamp-2">Fabricación e instalación de marcos
                            estructurales de alta resistencia.</p>
                    </div>
                </div>

                <!-- Ítem de Galería 2 -->
                <div
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl">
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/desmantelamiento/desmantelamiento_1.jpeg') }}" alt="Desmantelamiento de Estructuras"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end">

                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Desmantelamiento</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Desmantelamiento de Estructuras</h3>
                        <p class="text-xs text-slate-400 mt-1 line-clamp-2">Desmonte seguro de instalaciones operativas, despeje de naves y corte especializado.</p>
                    </div>
                </div>

                <!-- Ítem de Galería 3 -->
                <div
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl">
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/proyectos/fabricacion_estructura_industrial.jpeg') }}" alt="Soldadura en Sitio"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Soldadura en Sitio</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Modificaciones Estructurales</h3>
                        <p class="text-xs text-slate-400 mt-1 line-clamp-2">Trabajos de pailería, adecuación de estructuras y soldadura especializada directamente en las instalaciones.</p>
                    </div>
                </div>


                <!-- Ítem de Galería 4 -->
                <div
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl">
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/recubrimientos/Loseta_7.jpeg') }}" alt="Nombre del Proyecto"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Recubrimientos</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Instalación de Recubrimientos Especiales</h3>
                        <p class="text-xs text-slate-400 mt-1 line-clamp-2">Aplicación de recubrimientos protectores y funcionales de alta performance.</p>
                    </div>
                </div>


                <!-- Ítem de Galería 5 -->
                <div
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl">
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/fabricacion/fabricacion_de_piezas.jpeg') }}" alt="fabricación de Piezas"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Fabricación</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Fabricación de Piezas</h3>
                        <p class="text-xs text-slate-400 mt-1 line-clamp-2">Maquinado y acabados técnicos de alta exigencia.</p>
                    </div>
                </div>

                <!-- Ítem de Galería 6 -->
                <div
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl">
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/proyectos/Soldadura_1.jpeg') }}" alt="Soldador Industrial"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">MONTAJE ESTRUCTURAL</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Montaje e Instalación de Tuberías de Proceso</h3>
                        <p class="text-xs text-slate-400 mt-1 line-clamp-2">Soldadura en altura, ensamblaje de soportería e interconexión de líneas de tubería.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
