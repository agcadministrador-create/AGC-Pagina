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
                    Nuestra Galería de Proyectos de Recubrimientos
                </h2>
            </div>

            <!-- Grid de Imágenes de la Galería -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <!-- Ítem de Galería 1 -->
                <div onclick="openModal('{{ asset('images/galeria/recubrimientos/loseta_1.jpeg') }}', 'Recubrimiento cerámico antiácido industrial')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/recubrimientos/loseta_1.jpeg') }}"
                            alt="Desmantelamiento Industrial"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <!-- Superposición gradiente ajustada para legibilidad -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- Detalle textual sobre la imagen -->
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Instalación de Loseta Antiacida</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Recubrimiento cerámico antiácido industrial</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Instalación de loseta de alta resistencia química y térmica en áreas de proceso, garantizando protección continua contra derrames agresivos.</p>
                    </div>
                </div>

                <!-- Ítem de Galería 2 -->
                <div onclick="openModal('{{ asset('images/galeria/recubrimientos/loseta_2.jpeg') }}', 'Pisos industriales para alto tráfico')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/recubrimientos/loseta_2.jpeg') }}" alt="Tanques Industriales"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Instalación de Loseta Antiacida</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Pisos industriales para alto tráfico</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Sistema de piso cerámico industrial diseñado para soporte de carga pesada, tráfico de montacargas y fácil limpieza en naves operativas.</p>
                    </div>
                </div>

                <!-- Ítem de Galería 3 -->
                <div onclick="openModal('{{ asset('images/galeria/recubrimientos/loseta_3.jpeg') }}', 'Aplicación de boquilla y sellado antiácido')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/recubrimientos/loseta_3.jpeg') }}" alt="Mecanizado y Piezas"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Instalación de Loseta Antiacida</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Aplicación de boquilla y sellado antiácido</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Junteo con resinas epóxicas/resinas furánicas de alta durabilidad, asegurando impermeabilidad total y resistencia a la corrosión química.</p>
                    </div>
                </div>

                <!-- Ítem de Galería 4 -->
                <div onclick="openModal('{{ asset('images/galeria/recubrimientos/loseta_4.jpeg') }}', 'Piso cerámico en área de producción sanitaria')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/recubrimientos/loseta_4.jpeg') }}" alt="Mecanizado y Piezas"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Instalación de Loseta Antiacida</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Piso cerámico en área de producción sanitaria</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Revestimiento anticorrosivo en áreas abiertas de procesamiento, cumpliendo con estándares de higiene para la industria alimentaria y química.</p>
                    </div>
                </div>

                <!-- Ítem de Galería 5 -->
                <div onclick="openModal('{{ asset('images/galeria/recubrimientos/loseta_5.jpeg') }}', 'Integración alrededor de maquinaria pesada')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/recubrimientos/loseta_5.jpeg') }}" alt="Mecanizado y Piezas"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Instalación de Loseta Antiacida</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Integración alrededor de maquinaria pesada</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Detallado e instalación de precisión alrededor de soportes estructurales y tolvas industriales sin interrupción de la protección antiácida.</p>
                    </div>
                </div>

                <!-- Ítem de Galería 6 -->
                <div onclick="openModal('{{ asset('images/galeria/recubrimientos/loseta_6.jpeg') }}', 'Solución integral para áreas de procesamiento')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/recubrimientos/loseta_6.jpeg') }}" alt="Mecanizado y Piezas"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Instalación de Loseta Antiacida</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Solución integral para áreas de procesamiento</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Piso antiácido de alta exigencia instalado bajo líneas de producción y tuberías de proceso, resistente a choque térmico y corrosión.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Modal Visor de Imagen Flotante -->
    <div id="imageModal" class="fixed inset-0 z-50 hidden bg-slate-950/90 backdrop-blur-md flex items-center justify-center p-4">
        <div class="relative max-w-4xl w-full bg-slate-900 rounded-2xl border border-slate-800 overflow-hidden shadow-2xl">
            <!-- Botón de Cerrar -->
            <button onclick="closeModal()" class="absolute top-4 right-4 z-20 text-white/70 hover:text-white bg-slate-800/80 hover:bg-slate-700 p-2 rounded-full transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <div class="p-2">
                <img id="modalImage" src="" alt="Imagen ampliada" class="w-full max-h-[80vh] object-contain rounded-lg">
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
