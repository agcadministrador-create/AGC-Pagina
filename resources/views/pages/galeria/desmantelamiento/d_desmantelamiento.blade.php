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
                    Nuestra Galería de Desmantelamiento de Lineas de Producción
                </h2>
            </div>

            <!-- Grid de Imágenes de la Galería de Desmantelamiento -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <!-- Ítem 1: desmantelamiento_1.jpeg -->
                <div onclick="openModal('{{ asset('images/galeria/desmantelamiento/desmantelamiento_1.jpeg') }}', 'Desmontaje Técnico de Equipos')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/desmantelamiento/desmantelamiento_1.jpeg') }}"
                            alt="Desmontaje Técnico de Equipos"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Desmantelamiento de
                            Líneas</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Desmontaje
                            Técnico de Equipos</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Desconexión y retiro metódico de módulos
                            operativos, transportadores y componentes mecánicos de la línea.</p>
                    </div>
                </div>

                <!-- Ítem 2: desmantelamiento_2.jpeg -->
                <div onclick="openModal('{{ asset('images/galeria/desmantelamiento/desmantelamiento_2.jpeg') }}', 'Seccionamiento y Trabajos en Altura')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/desmantelamiento/desmantelamiento_2.jpeg') }}"
                            alt="Seccionamiento y Trabajos en Altura"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Desmantelamiento de
                            Líneas</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Seccionamiento
                            y Trabajos en Altura</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Corte controlado y desmonte elevado de
                            tuberías, soportería y estructuras superiores con equipo articulado.</p>
                    </div>
                </div>

                <!-- Ítem 3: desmantelamiento_3.jpeg -->
                <div onclick="openModal('{{ asset('images/galeria/desmantelamiento/desmantelamiento_3.jpeg') }}', 'Maniobra y Extracción de Tanques')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/desmantelamiento/desmantelamiento_3.jpeg') }}"
                            alt="Maniobra y Extracción de Tanques"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Desmantelamiento de
                            Líneas</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Maniobra y
                            Extracción de Tanques</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Retiro y movilización pesada de recipientes
                            de proceso, contenedores e infraestructura de gran volumen.</p>
                    </div>
                </div>

                <!-- Ítem 4: desmantelamiento_4.jpeg -->
                <div onclick="openModal('{{ asset('images/galeria/desmantelamiento/desmantelamiento_4.jpeg') }}', 'Desmonte de Pasarelas y Bastidores')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/desmantelamiento/desmantelamiento_4.jpeg') }}"
                            alt="Desmonte de Pasarelas y Bastidores"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Desmantelamiento de
                            Líneas</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Desmonte de
                            Pasarelas y Bastidores</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Desensamble ordenado de marquería perimetral,
                            mezzanine y soportes metálicos de la línea de producción.</p>
                    </div>
                </div>

                <!-- Ítem 5: desmantelamiento_5.jpeg -->
                <div onclick="openModal('{{ asset('images/galeria/desmantelamiento/desmantelamiento_5.jpeg') }}', 'Corte en Caliente y Protocolos de Seguridad')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/desmantelamiento/desmantelamiento_5.jpeg') }}"
                            alt="Corte en Caliente y Protocolos de Seguridad"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Desmantelamiento de
                            Líneas</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Corte en
                            Caliente Bajo Protocolo</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Ejecución de trabajos de oxicorte en áreas
                            confinadas bajo estrictas medidas de seguridad y contención.</p>
                    </div>
                </div>

                <!-- Ítem 6: desmantelamiento_6.jpeg -->
                <div onclick="openModal('{{ asset('images/galeria/desmantelamiento/desmantelamiento_6.jpeg') }}', 'Liberación Final de Nave Operativa')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/desmantelamiento/desmantelamiento_6.jpeg') }}"
                            alt="Liberación Final de Nave Operativa"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Desmantelamiento de
                            Líneas</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Liberación
                            Final de Nave Operativa</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Despeje completo, acarreo de materiales
                            sobrantes y preparación del espacio para la instalación de nueva tecnología.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Modal Visor de Imagen Flotante -->
    <div id="imageModal"
        class="fixed inset-0 z-50 hidden bg-slate-950/90 backdrop-blur-md flex items-center justify-center p-4">
        <div class="relative max-w-4xl w-full bg-slate-900 rounded-2xl border border-slate-800 overflow-hidden shadow-2xl">
            <!-- Botón de Cerrar -->
            <button onclick="closeModal()"
                class="absolute top-4 right-4 z-20 text-white/70 hover:text-white bg-slate-800/80 hover:bg-slate-700 p-2 rounded-full transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="p-2">
                <img id="modalImage" src="" alt="Imagen ampliada"
                    class="w-full max-h-[80vh] object-contain rounded-lg">
            </div>
            <div class="p-4 bg-slate-900 border-t border-slate-800 text-center">
                <p id="modalTitle" class="text-sm font-semibold text-slate-200"></p>
            </div>
        </div>
    </div>

    <!-- Script del Modal -->
    <script>
        function openModal(imageSrc, title) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('imageModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('imageModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>

@endsection
