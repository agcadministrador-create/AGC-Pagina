@extends('layouts.app')

@section('title', 'AGC GROUP México | Soluciones Industriales Integrales')

@section('content')


    <!-- 1. HERO BANNER SUPERIOR -->
    <section
        class="relative w-full overflow-hidden bg-gradient-to-r from-slate-950 via-slate-900 to-blue-950 border-b border-slate-800/80 pt-16 sm:pt-20 md:pt-24 pb-0 text-white">
        <!-- Resplandor Azul Industrial de Fondo -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600/15 blur-[120px] rounded-full pointer-events-none"></div>

        <!-- Marca de Agua / Forma SVG (Fondo Derecho) -->

        <div
            class="absolute -right-10 -bottom-10 w-full md:w-1/2 h-full pointer-events-none z-0 flex justify-end items-end opacity-10">

            <svg class="h-[130%] w-auto text-blue-500 fill-current" viewBox="0 0 24 24">

                <path
                    d="M12 15.5A3.5 3.5 0 0 1 8.5 12A3.5 3.5 0 0 1 12 8.5a3.5 3.5 0 0 1 3.5 3.5a3.5 3.5 0 0 1-3.5 3.5m7.43-2.53c.04-.32.07-.64.07-.97c0-.33-.03-.66-.07-1l2.11-1.63c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.31-.61-.22l-2.49 1c-.52-.39-1.06-.73-1.69-.98l-.37-2.65A.506.506 0 0 0 14 2h-4c-.25 0-.46.18-.5.42l-.37 2.65c-.63.25-1.17.59-1.69.98l-2.49-1c-.22-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64L4.57 11c-.04.34-.07.67-.07 1c0 .33.03.65.07.97l-2.11 1.66c-.19.15-.25.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.06.74 1.69.99l.37 2.65c.04.24.25.42.5.42h4c.25 0 .46-.18.5-.42l.37-2.65c.63-.26 1.17-.59 1.69-.99l2.49 1c.22.08.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.66Z" />

            </svg>

        </div>



        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-end">
                <!-- Textos (conserva padding inferior para mantener el balance del layout) -->
                <div class="md:col-span-7 space-y-5 text-center md:text-left pb-16 sm:pb-20 md:pb-24">
                    <h1
                        class="text-3xl sm:text-4xl md:text-5xl font-black tracking-tight leading-[1.1] uppercase text-white">
                        FORJANDO EL FUTURO<br class="hidden sm:inline"> DE LA INFRAESTRUCTURA<br class="hidden sm:inline">
                        INDUSTRIAL.
                    </h1>
                    <p class="text-base sm:text-lg text-slate-300 font-medium max-w-xl leading-relaxed">
                        Desarrollamos soluciones integrales de pailería, montaje e infraestructura con los más altos
                        estándares de precisión y seguridad.
                    </p>
                </div>

                <!-- Personaje / Mascota Superior (Anclado al borde sin margen negativo) -->
                <div class="md:col-span-5 flex justify-center md:justify-end items-end relative">
                    <img src="{{ asset('images/personas/mari_david.png') }}" alt="Personal AGC"
                        class="h-80 sm:h-96 md:h-[28rem] object-contain object-bottom relative z-10 drop-shadow-[0_20px_30px_rgba(0,0,0,0.8)]">
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FRANJA INTERMEDIA (Doble Tarjeta) -->
    <section class="w-full bg-slate-950 py-8 border-b border-slate-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-stretch">

                <!-- Tarjeta Izquierda: Identidad/Logo -->
                <div
                    class="md:col-span-5 bg-slate-900 border border-slate-800 rounded-2xl p-6 flex items-center justify-center sm:justify-start space-x-4 shadow-xl">
                    <!-- Logotipo sin contenedor ni bordes -->
                    <img src="{{ asset('images/logo.png') }}" alt="Logo AGC" class="h-40 w-40 shrink-0 object-contain">

                    <div>
                        <h3 class="text-xl font-extrabold text-blue-500 tracking-wide">GRUPO AGC</h3>
                        <p class="text-xs text-slate-400 font-medium tracking-wider">MÉXICO</p>
                    </div>
                </div>

                <!-- Tarjeta Derecha: Mensaje de Innovación -->
                <div
                    class="md:col-span-7 bg-slate-900/80 border border-slate-800 rounded-2xl p-6 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-xl text-center sm:text-left">
                    <div>
                        <p class="text-sm sm:text-base font-medium text-slate-300">
                            Transformamos tus proyectos en realidad a través de <strong
                                class="text-white font-bold">servicios integrales de fabricación, pailería y montaje
                                especializado</strong>.
                        </p>
                    </div>
                    <span
                        class="shrink-0 bg-slate-950 text-blue-400 border border-blue-500/30 text-xs font-black uppercase tracking-widest px-4 py-2.5 rounded-xl shadow-inner">
                        Solidez Garantizada
                    </span>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. BANNER INFERIOR -->
    <section class="relative w-full overflow-hidden bg-slate-950 py-12 sm:py-16 text-white">
        <!-- Resplandor Inferior Verde WhatsApp -->
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-emerald-600/10 blur-[130px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Se ajustó el padding: pt y px normales, pero pb-0 para que la imagen toque el borde inferior -->
            <div
                class="bg-gradient-to-r from-slate-900 via-slate-900/90 to-emerald-950/30 rounded-3xl border border-slate-800 pt-8 sm:pt-12 px-8 sm:px-12 pb-0 relative overflow-hidden shadow-2xl">

                <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center">

                    <!-- Textos + Botón WhatsApp CTA (con padding inferior propio para conservar espacio de lectura) -->
                    <div class="md:col-span-7 space-y-6 text-center md:text-left pb-8 sm:pb-12">
                        <span
                            class="inline-block px-3.5 py-1 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-bold uppercase tracking-widest rounded-full">
                            Atención Directa e Inmediata
                        </span>

                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white leading-snug">
                            ¿Tienes un proyecto en mente? Agenda una consulta con nuestros especialistas.
                        </h2>

                        <p class="text-slate-400 text-sm sm:text-base">
                            Cotiza alguno de nuestros servicios directamente por chat.
                        </p>

                        <div>
                            <a href="https://wa.me/5210000000000?text=Hola,%20me%20gustaría%20agendar%20una%20cotización%20para%20un%20proyecto."
                                target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center justify-center gap-3 px-6 py-3.5 bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-extrabold rounded-xl transition-all duration-300 shadow-lg shadow-emerald-500/20 transform hover:-translate-y-0.5">
                                <!-- Ícono de WhatsApp -->
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l.999 1.59-1.036 3.78 3.78-1.003.999.6z" />
                                </svg>
                                <span>Agendar por WhatsApp</span>
                            </a>
                        </div>
                    </div>

                    <!-- Imagen del Personal (Alineada al fondo sin espacios vacíos debajo) -->
                    <div class="md:col-span-5 flex justify-center md:justify-end items-end h-full relative">
                        <img src="{{ asset('images/personas/persona.png') }}" alt="Personal AGC"
                            class="h-72 sm:h-80 md:h-96 object-contain object-bottom relative z-10 drop-shadow-[0_20px_25px_rgba(0,0,0,0.9)]">
                    </div>

                </div>

            </div>
        </div>
    </section>




    <!-- 2. SECCIÓN PRINCIPAL: FORMULARIO + TARJETAS DE INFORMACIÓN -->
    <section class="w-full bg-slate-950 py-16 border-b border-slate-800/80 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

                <!-- INFORMACIÓN DE CONTACTO DIRECTA -->
                <div class="lg:col-span-5 space-y-6">
                    <div>
                        <h2 class="text-2xl font-extrabold text-white tracking-wide">Módulos de Atención</h2>
                        <p class="text-slate-400 text-sm mt-1">Comunícate directamente a través de nuestros canales
                            oficiales.</p>
                    </div>

                    <!-- Tarjetas de datos -->
                    <div class="space-y-4">
                        <!-- Teléfono / WhatsApp -->
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-5 flex items-center space-x-4">
                            <div class="p-3 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 rounded-xl">
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xs uppercase text-slate-400 font-bold tracking-wider">Atención WhatsApp</h4>
                                <a href="https://wa.me/5214610000000?text=Hola,%20requiero%20información" target="_blank"
                                    class="text-white font-bold hover:text-emerald-400 transition-colors">
                                    +52 (461) 000-0000
                                </a>
                            </div>
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-5 flex items-center space-x-4">
                            <div class="p-3 bg-blue-500/10 border border-blue-500/30 text-blue-400 rounded-xl">
                                <svg class="w-6 h-6 stroke-current fill-none" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xs uppercase text-slate-400 font-bold tracking-wider">Correo Corporativo
                                </h4>
                                <a href="mailto:agc@agcmexico.com.mx"
                                    class="text-white font-bold hover:text-blue-400 transition-colors">
                                    agc@agcmexico.com.mx
                                </a>
                            </div>
                        </div>

                        <!-- Redes Sociales -->
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-5">
                            <h4 class="text-xs uppercase text-slate-400 font-bold tracking-wider mb-3">Síguenos en Redes
                            </h4>
                            <div class="flex items-center gap-3">
                                <a href="https://facebook.com" target="_blank"
                                    class="p-3 bg-slate-800 hover:bg-blue-600 text-white rounded-xl transition-all"><svg
                                        class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg></a>
                                <a href="https://instagram.com" target="_blank"
                                    class="p-3 bg-slate-800 hover:bg-rose-600 text-white rounded-xl transition-all"><svg
                                        class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                    </svg></a>
                                <a href="https://youtube.com" target="_blank"
                                    class="p-3 bg-slate-800 hover:bg-red-600 text-white rounded-xl transition-all"><svg
                                        class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FORMULARIO DE CONTACTO -->
                <div class="lg:col-span-7 bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 shadow-2xl">
                    <h3 class="text-xl font-bold text-white mb-6">Envíanos un mensaje</h3>

                    <!-- ALERTA DE ÉXITO O ERRORES -->
                    @if (session('success'))
                        <div
                            class="mb-6 p-4 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 rounded-xl text-sm font-semibold">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-6 p-4 bg-rose-500/10 border border-rose-500/30 text-rose-400 rounded-xl text-sm">
                            <ul class="list-disc list-inside space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- FORMULARIO -->
                    <form action="{{ route('contacto.enviar') }}" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">Nombre
                                    Completo</label>
                                <input type="text" name="nombre" required placeholder="Ej. Ing. Juan Pérez"
                                    class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 text-sm">
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">Empresa</label>
                                <input type="text" name="empresa" placeholder="Nombre de tu empresa"
                                    class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">Correo
                                    Electrónico</label>
                                <input type="email" name="email" required placeholder="correo@ejemplo.com"
                                    class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 text-sm">
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">Teléfono
                                    de Contacto</label>
                                <input type="tel" name="telefono" placeholder="(461) 000-0000"
                                    class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 text-sm">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">Detalles
                                del Proyecto / Mensaje</label>
                            <textarea name="mensaje" rows="4" required
                                placeholder="Describe brevemente tus requerimientos o el servicio que deseas cotizar..."
                                class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 text-sm"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full py-4 bg-blue-600 hover:bg-blue-500 text-white font-extrabold rounded-xl transition-all duration-300 shadow-lg shadow-blue-600/30">
                            Enviar Solicitud
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección Call to Action: Contacto Directo WhatsApp -->
    <section class="relative py-24 bg-slate-950 text-white overflow-hidden">

        <!-- Imagen de fondo industrial con capa de oscurecimiento (Overlay) -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/soldador.jpeg') }}" alt="Fondo taller AGC México"
                class="w-full h-full object-cover opacity-25">
            <!-- Overlay oscuro para dar contraste al texto -->
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/80 to-slate-950/60"></div>
        </div>


        <!-- Contenido frontal -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl space-y-6">
                <!-- Título Principal -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-white leading-tight tracking-tight">
                    Conoce más en nuestros canales de comunicación.
                </h2>

                <!-- Bajada de texto -->
                <p class="text-slate-300 text-sm sm:text-base font-normal leading-relaxed max-w-xl">
                    Haz clic en el siguientes enlaces.
                </p>

                <!-- Botones de Redes Sociales y WhatsApp -->
                <div class="pt-2 flex flex-wrap items-center gap-4">

                    <!-- WhatsApp -->
                    <a href="https://wa.me/5214610000000?text=Hola,%20me%20gustaría%20solicitar%20información%20sobre%20sus%20servicios"
                        target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp"
                        class="inline-flex items-center justify-center bg-emerald-500 hover:bg-emerald-400 text-white p-4 rounded-full shadow-lg shadow-emerald-500/30 transition-all duration-300 hover:scale-110 group">
                        <!-- Logo SVG Oficial de WhatsApp -->
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                    </a>

                    <!-- Facebook -->
                    <a href="https://facebook.com/tu_pagina" target="_blank" rel="noopener noreferrer"
                        aria-label="Visitar Facebook"
                        class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-500 text-white p-4 rounded-full shadow-lg shadow-blue-600/30 transition-all duration-300 hover:scale-110 group">
                        <!-- Logo SVG Oficial de Facebook -->
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="https://instagram.com/tu_usuario" target="_blank" rel="noopener noreferrer"
                        aria-label="Visitar Instagram"
                        class="inline-flex items-center justify-center bg-gradient-to-tr from-amber-500 via-rose-500 to-purple-600 hover:opacity-90 text-white p-4 rounded-full shadow-lg shadow-rose-500/30 transition-all duration-300 hover:scale-110 group">
                        <!-- Logo SVG Oficial de Instagram -->
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>

                    <!-- YouTube -->
                    <a href="https://youtube.com/@tu_canal" target="_blank" rel="noopener noreferrer"
                        aria-label="Visitar YouTube"
                        class="inline-flex items-center justify-center bg-red-600 hover:bg-red-500 text-white p-4 rounded-full shadow-lg shadow-red-600/30 transition-all duration-300 hover:scale-110 group">
                        <!-- Logo SVG Oficial de YouTube -->
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>

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
