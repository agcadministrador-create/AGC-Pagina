@extends('layouts.app')

@section('title', 'AGC GROUP México | Soluciones Industriales Integrales')

@section('content')

    <!-- Sección de Proyectos -->
    <section id="proyectos" class="py-24 bg-slate-950 text-white relative overflow-hidden">
        <!-- Resplandor de fondo decorativo -->
        <div class="absolute top-1/4 -left-32 w-96 h-96 bg-blue-600/10 blur-[120px] rounded-full pointer-events-none"></div>
        <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-blue-500/10 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Encabezado de Sección -->
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-blue-500 font-semibold text-xs sm:text-sm tracking-widest uppercase bg-blue-500/10 px-3 py-1 rounded-full border border-blue-500/20 inline-block">
                    Portafolio de Soluciones
                </span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-tight text-white">
                    Nuestros Proyectos
                </h2>
                <p class="text-slate-400 text-base md:text-lg leading-relaxed">
                    Ejecución técnica de alta precisión, garantizando seguridad, calidad y continuidad operativa en el sector industrial.
                </p>
            </div>

            <!-- Grid de Proyectos (3 columnas para 9 elementos perfectos) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

                <!-- Tarjeta 1 -->
                <article class="bg-slate-900/90 border border-slate-800/80 rounded-2xl overflow-hidden hover:border-blue-500/60 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/10 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-52 sm:h-56 w-full overflow-hidden bg-slate-800">
                            <span class="absolute top-3 left-3 z-10 bg-slate-950/80 backdrop-blur-md text-blue-400 text-xs font-semibold px-2.5 py-1 rounded-md border border-slate-700/60">
                                Pailería & Estructuras
                            </span>
                            <img src="{{ asset('images/estructura.png') }}" alt="Diseño y Fabricación de estructuras Metálicas"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2 tracking-tight group-hover:text-blue-400 transition-colors">
                                Diseño y Fabricación de Estructuras Metálicas
                            </h3>
                            <p class="text-slate-400 text-sm leading-relaxed">
                                Desarrollo de plataformas, mezanines y componentes industriales bajo estrictos estándares internacionales de fabricación.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Tarjeta 2 -->
                <article class="bg-slate-900/90 border border-slate-800/80 rounded-2xl overflow-hidden hover:border-blue-500/60 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/10 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-52 sm:h-56 w-full overflow-hidden bg-slate-800">
                            <span class="absolute top-3 left-3 z-10 bg-slate-950/80 backdrop-blur-md text-blue-400 text-xs font-semibold px-2.5 py-1 rounded-md border border-slate-700/60">
                                Control de Flujos
                            </span>
                            <img src="{{ asset('images/instalacion_tuberia.jpg') }}" alt="Ingeniería e instalación en control de flujos"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2 tracking-tight group-hover:text-blue-400 transition-colors">
                                Ingeniería e Instalación en Control de Flujos
                            </h3>
                            <p class="text-slate-400 text-sm leading-relaxed">
                                Suministro, tendido y montaje de sistemas de tubería de proceso, valvulería y componentes mecánicos.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Tarjeta 3 -->
                <article class="bg-slate-900/90 border border-slate-800/80 rounded-2xl overflow-hidden hover:border-blue-500/60 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/10 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-52 sm:h-56 w-full overflow-hidden bg-slate-800">
                            <span class="absolute top-3 left-3 z-10 bg-slate-950/80 backdrop-blur-md text-blue-400 text-xs font-semibold px-2.5 py-1 rounded-md border border-slate-700/60">
                                Recubrimientos
                            </span>
                            <img src="{{ asset('images/instalacion_loseta.jpg') }}" alt="Recubrimientos Especializados"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2 tracking-tight group-hover:text-blue-400 transition-colors">
                                Recubrimientos Especializados
                            </h3>
                            <p class="text-slate-400 text-sm leading-relaxed">
                                Aplicación de loseta antiácida de alta resistencia química y sistemas epóxicos de grado industrial para ambientes críticos.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Tarjeta 4 -->
                <article class="bg-slate-900/90 border border-slate-800/80 rounded-2xl overflow-hidden hover:border-blue-500/60 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/10 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-52 sm:h-56 w-full overflow-hidden bg-slate-800">
                            <span class="absolute top-3 left-3 z-10 bg-slate-950/80 backdrop-blur-md text-blue-400 text-xs font-semibold px-2.5 py-1 rounded-md border border-slate-700/60">
                                Maniobras
                            </span>
                            <img src="{{ asset('images/desmantelamiento_industrial.jpg') }}" alt="Desmantelamiento industrial"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2 tracking-tight group-hover:text-blue-400 transition-colors">
                                Desmantelamiento Industrial
                            </h3>
                            <p class="text-slate-400 text-sm leading-relaxed">
                                Desmontaje, seccionado y retiro controlado de naves, estructuras y maquinaria mediante maniobras pesadas de alta seguridad.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Tarjeta 5 -->
                <article class="bg-slate-900/90 border border-slate-800/80 rounded-2xl overflow-hidden hover:border-blue-500/60 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/10 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-52 sm:h-56 w-full overflow-hidden bg-slate-800">
                            <span class="absolute top-3 left-3 z-10 bg-slate-950/80 backdrop-blur-md text-blue-400 text-xs font-semibold px-2.5 py-1 rounded-md border border-slate-700/60">
                                Electromecánica
                            </span>
                            <img src="{{ asset('images/integracion_equipos.jpeg') }}" alt="Integración de equipos"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2 tracking-tight group-hover:text-blue-400 transition-colors">
                                Integración de Equipos
                            </h3>
                            <p class="text-slate-400 text-sm leading-relaxed">
                                Conexión e interconexión de sistemas electromecánicos, tableros de control y puesta en marcha de procesos de producción.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Tarjeta 6 -->
                <article class="bg-slate-900/90 border border-slate-800/80 rounded-2xl overflow-hidden hover:border-blue-500/60 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/10 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-52 sm:h-56 w-full overflow-hidden bg-slate-800">
                            <span class="absolute top-3 left-3 z-10 bg-slate-950/80 backdrop-blur-md text-blue-400 text-xs font-semibold px-2.5 py-1 rounded-md border border-slate-700/60">
                                Renta de Maquinaria
                            </span>
                            <img src="{{ asset('images/renta_equipos.jpg') }}" alt="Renta de equipos de carga y elevación"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2 tracking-tight group-hover:text-blue-400 transition-colors">
                                Equipos de Carga y Elevación
                            </h3>
                            <p class="text-slate-400 text-sm leading-relaxed">
                                Renta de plataformas articulated/scissor, montacargas y grúas certificadas para maniobras y trabajo en altura.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Tarjeta 7 -->
                <article class="bg-slate-900/90 border border-slate-800/80 rounded-2xl overflow-hidden hover:border-blue-500/60 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/10 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-52 sm:h-56 w-full overflow-hidden bg-slate-800">
                            <span class="absolute top-3 left-3 z-10 bg-slate-950/80 backdrop-blur-md text-blue-400 text-xs font-semibold px-2.5 py-1 rounded-md border border-slate-700/60">
                                Proceso Productivo
                            </span>
                            <img src="{{ asset('images/instalacion_linea.jpg') }}" alt="Montaje de líneas de producción"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2 tracking-tight group-hover:text-blue-400 transition-colors">
                                Montaje de Líneas de Producción
                            </h3>
                            <p class="text-slate-400 text-sm leading-relaxed">
                                Posicionamiento, nivelación óptica y alineación óptica/láser de maquinaria pesada para líneas continuas de manufactura.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Tarjeta 8 -->
                <article class="bg-slate-900/90 border border-slate-800/80 rounded-2xl overflow-hidden hover:border-blue-500/60 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/10 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-52 sm:h-56 w-full overflow-hidden bg-slate-800">
                            <span class="absolute top-3 left-3 z-10 bg-slate-950/80 backdrop-blur-md text-blue-400 text-xs font-semibold px-2.5 py-1 rounded-md border border-slate-700/60">
                                Servicios Industriales
                            </span>
                            <img src="{{ asset('images/limpieza.jpg') }}" alt="Servicio de limpieza técnica"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2 tracking-tight group-hover:text-blue-400 transition-colors">
                                Limpieza Técnica Especializada
                            </h3>
                            <p class="text-slate-400 text-sm leading-relaxed">
                                Servicios de limpieza profunda, acondicionamiento y sanitización para plantas industriales, almacenes y áreas corporativas.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Tarjeta 9 -->
                <article class="bg-slate-900/90 border border-slate-800/80 rounded-2xl overflow-hidden hover:border-blue-500/60 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/10 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-52 sm:h-56 w-full overflow-hidden bg-slate-800">
                            <span class="absolute top-3 left-3 z-10 bg-slate-950/80 backdrop-blur-md text-blue-400 text-xs font-semibold px-2.5 py-1 rounded-md border border-slate-700/60">
                                Mantenimiento
                            </span>
                            <img src="{{ asset('images/mantenimiento_1.jpg') }}" alt="Mantenimiento industrial integral"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-60"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2 tracking-tight group-hover:text-blue-400 transition-colors">
                                Mantenimiento Industrial Integral
                            </h3>
                            <p class="text-slate-400 text-sm leading-relaxed">
                                Planes preventivos y correctivos bajo normativas de inocuidad y calidad para maximizar el tiempo operativo de las plantas.
                            </p>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

@endsection
