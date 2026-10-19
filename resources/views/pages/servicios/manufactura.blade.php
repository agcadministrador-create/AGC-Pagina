@extends('layouts.app')

@section('title', 'Manufactura y Transformación de Metales | AGC GROUP México')

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
                <span class="text-blue-500 font-bold text-xs tracking-widest uppercase block mb-2">Servicio Especializado</span>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-tight text-white mb-4">
                    Transformación de Metales a Gran Escala
                </h1>
                <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
                    Procesamiento de placa y perfil pesado con tecnología industrial. Garantizamos la máxima precisión en corte, doblado, rolado y soldadura normativa para la industria de alta exigencia.
                </p>
            </div>
        </div>
    </section>

    <!-- DETALLE TÉCNICO Y GALERÍA -->
    <section class="bg-slate-900 py-16 px-4 sm:px-6 lg:px-8 border-b border-slate-800 text-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <!-- Columna Izquierda: Especificaciones Técnicas y Capacidades -->
            <div class="lg:col-span-7 space-y-8">

                <div class="bg-slate-950 border border-slate-800 rounded-2xl p-6 sm:p-8 shadow-xl">
                    <h2 class="text-xl font-bold uppercase tracking-wide text-white mb-6 border-b border-slate-800 pb-3">
                        Capacidades y Procesos
                    </h2>

                    <div class="space-y-6">
                        <div>
                            <h3 class="text-sm font-bold text-blue-400 uppercase tracking-wider mb-2">1. Corte y Habilitado de Placa</h3>
                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                                Habilitado de placa de gran espesor mediante pantógrafo CNC, plasma y oxicorte. Tolerancias mínimas alineadas a planos de ingeniería.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-sm font-bold text-blue-400 uppercase tracking-wider mb-2">2. Rolado y Doblado Estructural</h3>
                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                                Conformado de perfiles pesados, vigas, canales y rolado de tubería para recipientes o estructuras cilíndricas sin deformación del material.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-sm font-bold text-blue-400 uppercase tracking-wider mb-2">3. Soldadura Normativa (AWS / ASME)</h3>
                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                                Aplicación de procesos SMAW, GMAW, FCAW y GTAW por soldadores calificados bajo estrictos criterios de inspección visual y ensayos no destructivos (NDT).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de Beneficios -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-slate-950/60 border border-slate-800 rounded-xl p-5">
                        <span class="text-blue-500 font-extrabold text-lg block mb-1">AWS D1.1 / ASME</span>
                        <p class="text-xs text-slate-400 font-medium">Cumplimiento de estándares y especificaciones de soldadura estructural.</p>
                    </div>

                    <div class="bg-slate-950/60 border border-slate-800 rounded-xl p-5">
                        <span class="text-blue-500 font-extrabold text-lg block mb-1">Capacidad Pesada</span>
                        <p class="text-xs text-slate-400 font-medium">Manejo de elementos de gran volumen con maniobra segura en taller.</p>
                    </div>
                </div>

            </div>

            <!-- Columna Derecha: Galería de Muestra y Formulario CTA -->
            <div class="lg:col-span-5 space-y-6">

                <!-- Galería en Rejilla -->
                <div class="grid grid-cols-2 gap-3">
                    <div class="overflow-hidden rounded-xl border border-slate-800 aspect-square">
                        <img src="{{ asset('images/metales_de_gran_calibre.jpg') }}" alt="Corte de placa" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <div class="overflow-hidden rounded-xl border border-slate-800 aspect-square">
                        <img src="{{ asset('images/estructura.png') }}" alt="Pailería pesada" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                </div>

                <!-- Call to Action Directo a Cotización -->
                <div class="bg-gradient-to-br from-blue-900/40 via-slate-950 to-slate-950 border border-blue-500/30 rounded-2xl p-6 shadow-2xl text-center space-y-4">
                    <h3 class="text-lg font-bold text-white uppercase tracking-wide">¿Requieres cotizar esta especialidad?</h3>
                    <p class="text-xs text-slate-300">
                        Envíanos tus planos o requerimientos para evaluarlos con nuestro equipo de ingeniería.
                    </p>
                    <a href="{{ route('contacto') }}"
                       class="inline-block w-full py-3.5 bg-blue-600 hover:bg-blue-500 text-white font-extrabold text-xs uppercase tracking-widest rounded-xl transition shadow-lg shadow-blue-600/30">
                        Solicitar Cotización Directa
                    </a>
                </div>

            </div>

        </div>
    </section>

@endsection
