@extends('layouts.app')

@section('title', 'AGC GROUP México | Soluciones Industriales Integrales')

@section('content')

    <!-- 1. HERO SECTION -->
    <section class="relative bg-slate-950 min-h-[85vh] flex items-center overflow-hidden">
        <!-- Imagen de Fondo (Marca de agua / Personal) -->
        <div class="absolute inset-0 z-0 opacity-25 bg-center bg-no-repeat transition-all duration-700 hover:scale-105"
            style="background-image: url('{{ asset('images/Personal.jpeg') }}'); background-size: cover; background-position: center;">
        </div>

        <!-- Overlay / Gradiente multicapa para alta legibilidad -->
        <div class="absolute inset-0 bg-linear-to-r from-slate-950 via-slate-950/85 to-slate-950/50 z-0"></div>
        <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-transparent to-transparent z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-24 w-full">
            <div class="max-w-3xl">

                <!-- Título Principal -->
                <h1
                    class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-black uppercase tracking-tight leading-[0.95] mb-8 text-white drop-shadow-md">
                    <span class="text-transparent bg-clip-text bg-linear-to-r from-blue-400 via-blue-500 to-indigo-400">
                        Nosotros
                    </span>
                </h1>

                <!-- Descripción -->
                <p class="text-slate-300 text-lg md:text-xl mb-10 max-w-2xl font-light leading-relaxed">
                    Somos una empresa 100% Mexicana dedicada a Servicios de Construcción de Obras Industriales y Sistemas
                    Integrales de Mantenimiento, con el firme propósito de garantizar la máxima calidad y la satisfacción
                    total de nuestros clientes.
                </p>

                <!-- Stats Rápidos / Badges -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-6 pt-4 border-t border-slate-800/80">
                    <div>
                        <span class="block text-3xl font-black text-white">100%</span>
                        <span class="text-xs uppercase tracking-wider text-slate-400 font-medium">Empresa Mexicana</span>
                    </div>
                    <div>
                        <span class="block text-3xl font-black text-blue-400">Excelencia</span>
                        <span class="text-xs uppercase tracking-wider text-slate-400 font-medium">Operativa</span>
                    </div>
                    <div>
                        <span class="block text-3xl font-black text-white">Compromiso</span>
                        <span class="text-xs uppercase tracking-wider text-slate-400 font-medium">Garantizado</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- 2. QUIÉNES SOMOS & CAPACITACIÓN -->
    <section class="relative bg-white py-24 overflow-hidden text-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-12 items-center">

                <!-- Columna Izquierda: Información de Texto -->
                <div class="lg:col-span-5 space-y-6">

                    <!-- Subtítulo decorativo -->
                    <div class="flex items-center space-x-3">
                        <span class="w-8 h-0.5 bg-blue-500"></span>
                        <span class="text-xs font-bold uppercase tracking-widest text-blue-600">
                            Quiénes Somos
                        </span>
                    </div>

                    <!-- Título Principal -->
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-950 leading-tight">
                        Dedicados a la transformación de <span class="text-blue-600">Metales.</span>
                    </h2>

                    <!-- Bajada / Subtexto -->
                    <p class="text-slate-600 font-normal text-base sm:text-lg leading-relaxed">
                        Somos una empresa enfocada en un ecosistema integral de fabricación metálica, corte, mecanizado,
                        soldadura especializada y recubrimientos de alto rendimiento.
                    </p>

                    <!-- Tarjeta de Capacitación Constante -->
                    <div
                        class="p-6 bg-slate-50 border border-slate-100 rounded-2xl flex items-start space-x-4 shadow-sm hover:shadow-md transition-shadow">
                        <div class="shrink-0 p-3 bg-blue-600/10 text-blue-600 rounded-xl mt-1">
                            <svg class="w-6 h-6 stroke-[2.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <h3 class="text-lg font-bold text-slate-900">
                                Capacitación y Certificación Constante
                            </h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Capacitamos continuamente a nuestro personal técnico y operativo para garantizar los
                                estándares de seguridad, precisión y calidad superior en cada proyecto.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Columna Derecha: Galería Asimétrica -->
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6 items-center">
                    <div class="w-full">
                        <div class="relative group overflow-hidden rounded-3xl shadow-xl">
                            <img src="{{ asset('images/fondo_soldador_1.jpeg') }}"
                                alt="Trabajo en taller de transformación de metales"
                                class="w-full h-105 object-cover transition-transform duration-500 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-linear-to-t from-slate-950/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                <span class="text-white text-sm font-semibold">Taller y Transformación Metálica</span>
                            </div>
                        </div>
                    </div>

                    <div class="w-full sm:-mt-8">
                        <div class="relative group overflow-hidden rounded-3xl shadow-xl">
                            <img src="{{ asset('images/Soldador_1_1.jpeg') }}" alt="Estructura metálica en sitio"
                                class="w-full h-115 object-cover transition-transform duration-500 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-linear-to-t from-slate-950/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                <span class="text-white text-sm font-semibold">Montaje de Estructuras en Sitio</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- SECCIÓN DE CONTROL DE CALIDAD Y GARANTÍA -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="relative rounded-3xl bg-slate-900 border border-slate-800 overflow-hidden shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 items-center">

                <!-- Columna de Texto -->
                <div class="lg:col-span-7 p-8 sm:p-12 z-10">
                    <div
                        class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-blue-400 bg-blue-500/10 px-3 py-1.5 rounded-full mb-6 border border-blue-500/20">
                        <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        <span>Aseguramiento y Control de Calidad</span>
                    </div>

                    <h3 class="text-3xl sm:text-4xl font-black text-white mb-4 leading-tight">
                        Compromiso con los Estándares Industriales
                    </h3>

                    <p class="text-slate-300 text-base sm:text-lg mb-6 leading-relaxed">
                        Supervisamos minuciosamente cada etapa de fabricación y ensamblaje. Nuestro equipo de calidad
                        asegura que cada proceso cumpla estrictamente con las especificaciones técnicas y
                        normas de seguridad requeridas.
                    </p>

                </div>

                <!-- Columna de la Fotografía -->
                <div class="lg:col-span-5 relative h-80 sm:h-96 lg:h-full min-h-95">
                    <img src="{{ asset('images/personas/yuli_1.png') }}" alt="Supervisión de Calidad AGC"
                        class="w-full h-full object-cover object-center lg:object-top">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-slate-900 via-transparent to-transparent lg:bg-linear-to-r lg:from-slate-900 lg:via-transparent lg:to-transparent">
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- 3. NUEVA SECCIÓN: NUESTRO EQUIPO Y COMPAÑERISMO -->
    <section class="relative py-24 bg-slate-900 text-white overflow-hidden border-t border-slate-800">
        <!-- Textura gráfica de fondo -->
        <div class="absolute inset-0 opacity-5 pointer-events-none"
            style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 24px 24px;"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Encabezado de Sección -->
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <div class="flex items-center justify-center space-x-3">
                    <span class="w-8 h-0.5 bg-blue-500"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-blue-400">
                        Cultura y Capital Humano
                    </span>
                    <span class="w-8 h-0.5 bg-blue-500"></span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black tracking-tight text-white">
                    El Valor del <span class="text-blue-500">Compañerismo</span> y Trabajo en Equipo
                </h2>
                <p class="text-slate-400 text-base sm:text-lg font-light leading-relaxed">
                    Detrás de cada obra industrial, estructura y proyecto terminado, existe un equipo unido de profesionales
                    apasionados que trabajan coordinados, cuidándose mutuamente y superando cualquier reto.
                </p>
            </div>

            <!-- Bloques de Valores de Compañerismo -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Tarjeta Valor 1 -->
                <div
                    class="bg-slate-950/60 border border-slate-800 rounded-2xl p-8 hover:border-blue-500/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 bg-blue-600/20 text-blue-400 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 stroke-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Trabajo Colaborativo</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Fomentamos la ayuda mutua entre nuestros técnicos, soldadores y personal operativo, asegurando que
                        cada tarea se resuelva de manera coordinada y eficiente.
                    </p>
                </div>

                <!-- Tarjeta Valor 2 -->
                <div
                    class="bg-slate-950/60 border border-slate-800 rounded-2xl p-8 hover:border-blue-500/50 transition-all duration-300 hover:-translate-y-1">
                    <div
                        class="w-12 h-12 bg-emerald-600/20 text-emerald-400 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 stroke-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Seguridad y Cuidado Mutuo</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        En el sector industrial la seguridad es prioridad. Nos cuidamos unos a otros en el taller y en obra,
                        respetando protocolos y creando un entorno seguro.
                    </p>
                </div>

                <!-- Tarjeta Valor 3 -->
                <div
                    class="bg-slate-950/60 border border-slate-800 rounded-2xl p-8 hover:border-blue-500/50 transition-all duration-300 hover:-translate-y-1">
                    <div
                        class="w-12 h-12 bg-indigo-600/20 text-indigo-400 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 stroke-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Ambiente Laboral Humano</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Celebramos los logros de cada integrante, promoviendo el compañerismo, el respeto y el orgullo de
                        pertenecer a la gran familia AGC.
                    </p>
                </div>
            </div>

            <!-- BENTO GRID COMPLETO DE TALLER AGC (6 IMÁGENES) -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 sm:gap-6 auto-rows-62.5 sm:auto-rows-75">

                <!-- 1. Equipo Principal (Ocupa 8 columnas) -->
                <div
                    class="md:col-span-8 md:row-span-1 relative group rounded-3xl overflow-hidden border border-slate-800 shadow-lg flex items-center justify-center bg-slate-900">
                    <img src="{{ asset('images/personas/personal_taller_4.jpg') }}" alt="Fuerza y Experiencia AGC"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-transparent group-hover:bg-slate-950/70 transition-colors duration-500">
                    </div>
                    <div
                        class="absolute z-10 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <h4 class="text-white font-black text-2xl tracking-wide">Fuerza y Experiencia</h4>
                        <p class="text-blue-400 text-sm font-semibold mt-1 uppercase tracking-widest">El núcleo de nuestro
                            taller</p>
                    </div>
                </div>

                <!-- 2. Acción: Corte de Metal (Ocupa 4 columnas) -->
                <div
                    class="md:col-span-4 md:row-span-1 relative group rounded-3xl overflow-hidden border border-slate-800 shadow-lg flex items-center justify-center bg-slate-900">
                    <img src="{{ asset('images/personas/torito_corte.jpg') }}" alt="Corte de Precisión"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-transparent group-hover:bg-slate-950/70 transition-colors duration-500">
                    </div>
                    <div
                        class="absolute z-10 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 transform translate-y-4 group-hover:translate-y-0 px-4">
                        <h4 class="text-white font-black text-xl tracking-wide">Precisión</h4>
                        <p class="text-blue-400 text-sm font-semibold mt-1 uppercase tracking-widest">Cortes a medida</p>
                    </div>
                </div>

                <!-- 3. Acción: Retrato Soldador (Ocupa 4 columnas) -->
                <div
                    class="md:col-span-4 md:row-span-1 relative group rounded-3xl overflow-hidden border border-slate-800 shadow-lg flex items-center justify-center bg-slate-900">
                    <!-- object-top asegura que no se corte la cabeza por el casco -->
                    <img src="{{ asset('images/personas/juanito_soldador.jpg') }}" alt="Actitud en el Trabajo"
                        class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-transparent group-hover:bg-slate-950/70 transition-colors duration-500">
                    </div>
                    <div
                        class="absolute z-10 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 transform translate-y-4 group-hover:translate-y-0 px-4">
                        <h4 class="text-white font-black text-xl tracking-wide">Actitud</h4>
                        <p class="text-blue-400 text-sm font-semibold mt-1 uppercase tracking-widest">Compromiso Total</p>
                    </div>
                </div>

                <!-- 4. Acción: Proceso de Soldadura (Ocupa 8 columnas) -->
                <div
                    class="md:col-span-8 md:row-span-1 relative group rounded-3xl overflow-hidden border border-slate-800 shadow-lg flex items-center justify-center bg-slate-900">
                    <img src="{{ asset('images/personas/juanito_soldadura.jpg') }}" alt="Soldadura Especializada"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-transparent group-hover:bg-slate-950/70 transition-colors duration-500">
                    </div>
                    <div
                        class="absolute z-10 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 transform translate-y-4 group-hover:translate-y-0 px-4">
                        <h4 class="text-white font-black text-2xl tracking-wide">Especialización</h4>
                        <p class="text-blue-400 text-sm font-semibold mt-1 uppercase tracking-widest">Soldadura de Alta
                            Resistencia</p>
                    </div>
                </div>

                <!-- 5. Equipo Secundario 1 (Ocupa 6 columnas - Mitad de pantalla) -->
                <div
                    class="md:col-span-6 md:row-span-1 relative group rounded-3xl overflow-hidden border border-slate-800 shadow-lg flex items-center justify-center bg-slate-900">
                    <img src="{{ asset('images/personas/equipo_monterrey.jpeg') }}" alt="Colaboración en Taller"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-transparent group-hover:bg-slate-950/70 transition-colors duration-500">
                    </div>
                    <div
                        class="absolute z-10 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 transform translate-y-4 group-hover:translate-y-0 px-4">
                        <h4 class="text-white font-black text-xl tracking-wide">Colaboración</h4>
                        <p class="text-blue-400 text-sm font-semibold mt-1 uppercase tracking-widest">Nuestros equipos comprometidos en cada proeycto</p>
                    </div>
                </div>

                <!-- 6. Equipo Secundario 2 (Ocupa 6 columnas - Mitad de pantalla) -->
                <div
                    class="md:col-span-6 md:row-span-1 relative group rounded-3xl overflow-hidden border border-slate-800 shadow-lg flex items-center justify-center bg-slate-900">
                    <img src="{{ asset('images/personas/perosnal_taller3.jpg') }}" alt="Talento Humano"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-transparent group-hover:bg-slate-950/70 transition-colors duration-500">
                    </div>
                    <div
                        class="absolute z-10 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 transform translate-y-4 group-hover:translate-y-0 px-4">
                        <h4 class="text-white font-black text-xl tracking-wide">Talento Humano</h4>
                        <p class="text-blue-400 text-sm font-semibold mt-1 uppercase tracking-widest">La base de nuestro
                            éxito</p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- 4. SECCIÓN VISIÓN Y NUESTRO DIFERENCIAL -->
    <section class="relative py-24 bg-slate-950 text-white overflow-hidden">
        <!-- Imagen de fondo industrial con capa de oscurecimiento -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/barilla.png') }}" alt="Nuestra Visión AGC"
                class="w-full h-full object-cover opacity-15">
            <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/80 to-slate-950"></div>
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Encabezado Centrado -->
            <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
                <div class="flex items-center justify-center space-x-3">
                    <span class="w-8 h-0.5 bg-blue-500"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-blue-400">
                        Nuestros Pilares
                    </span>
                    <span class="w-8 h-0.5 bg-blue-500"></span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white">Estrategia e Identidad</h2>
            </div>

            <!-- Grid de Tarjetas -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">

                <!-- Tarjeta 1: Visión -->
                <div
                    class="bg-linear-to-br from-slate-900 via-slate-950 to-blue-950 border border-slate-800/80 rounded-3xl p-8 md:p-10 shadow-2xl flex flex-col justify-between">
                    <div class="space-y-4">
                        <div
                            class="w-10 h-10 rounded-lg bg-blue-500/20 text-blue-400 flex items-center justify-center mb-2">
                            <svg class="w-6 h-6 stroke-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-extrabold tracking-tight text-white">
                            Nuestra Visión
                        </h3>
                        <p class="text-slate-300 text-sm md:text-base leading-relaxed font-light">
                            Ser la empresa líder y referente indispensable en el sector industrial, reconocida nacionalmente
                            por nuestra excelencia operativa, innovación constante, seguridad y crecimiento sostenible.
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 2: Nuestro Diferencial -->
                <div
                    class="bg-linear-to-br from-slate-900 via-slate-950 to-blue-950 border border-slate-800/80 rounded-3xl p-8 md:p-10 shadow-2xl flex flex-col justify-between">
                    <div class="space-y-4">
                        <div
                            class="w-10 h-10 rounded-lg bg-blue-500/20 text-blue-400 flex items-center justify-center mb-2">
                            <svg class="w-6 h-6 stroke-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-extrabold tracking-tight text-white">
                            Nuestro Diferencial
                        </h3>
                        <p class="text-slate-300 text-sm md:text-base leading-relaxed font-light">
                            Trabajamos estrictamente comprometidos para dar a nuestros clientes una atención cercana,
                            respuesta inmediata y precios competitivos sin comprometer la calidad.
                        </p>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-3 pt-6 border-t border-slate-800/80">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-blue-400 stroke-3 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="font-semibold text-xs sm:text-sm text-slate-200">Atención al Cliente</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-blue-400 stroke-3 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="font-semibold text-xs sm:text-sm text-slate-200">Calidad Superior</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-blue-400 stroke-3 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="font-semibold text-xs sm:text-sm text-slate-200">Costo-Beneficio</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-blue-400 stroke-3 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="font-semibold text-xs sm:text-sm text-slate-200">Garantía de Servicio</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Script de Inicialización de Swiper -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof Swiper !== 'undefined') {
                if (document.querySelector('.serviciosSwiper')) {
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
                }
            }
        });
    </script>

@endsection
