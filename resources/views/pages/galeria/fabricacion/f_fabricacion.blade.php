@extends('layouts.app')

@section('title', 'AGC GROUP México | Fabricación y Pailería Industrial')

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
                    Nuestra Galería de Fabricación y Pailería Industrial
                </h2>
            </div>

            <!-- Grid de Imágenes de la Galería de Fabricación -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <!-- Ítem 1: 1.jpeg -->
                <div onclick="openModal('{{ asset('images/galeria/fabricacion/1.jpeg') }}', 'Fabricación de Barandales y Estructuras Tubulares')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/fabricacion/1.jpeg') }}"
                            alt="Fabricación de Barandales y Estructuras Tubulares"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Fabricación Industrial</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Fabricación de Barandales Tubulares</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Ensamble, acoplado y soldadura especializada de protecciones y pasamanos de seguridad en acero.</p>
                    </div>
                </div>

                <!-- Ítem 2: 2.jpeg -->
                <div onclick="openModal('{{ asset('images/galeria/fabricacion/2.jpeg') }}', 'Estructuras y Bastidores Metálicos')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/fabricacion/2.jpeg') }}"
                            alt="Estructuras y Bastidores Metálicos"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Pailería Ligera</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Estructuras y Bastidores Metálicos</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Armado, alineación y aplicación de soldadura en bastidores de soporte para líneas operativas.</p>
                    </div>
                </div>

                <!-- Ítem 3: 3.jpeg -->
                <div onclick="openModal('{{ asset('images/galeria/fabricacion/3.jpeg') }}', 'Ensamble de Plataformas e Infraestructura')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/fabricacion/3.jpeg') }}"
                            alt="Ensamble de Plataformas e Infraestructura"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Estructuras de Proceso</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Plataformas y Mezzanines</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Fabricación e integración estructural de pasarelas y plataformas de acceso para personal de planta.</p>
                    </div>
                </div>

                <!-- Ítem 4: 4.jpeg -->
                <div onclick="openModal('{{ asset('images/galeria/fabricacion/4.jpeg') }}', 'Soldadura de Marquería y Soportes Pesados')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/fabricacion/4.jpeg') }}"
                            alt="Soldadura de Marquería y Soportes Pesados"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Pailería Pesada</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Marquería y Soportes Pesados</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Fabricación a medida de racks, marquerías de carga y soportes estructurales de alta resistencia.</p>
                    </div>
                </div>

                <!-- Ítem 5: 6.jpeg -->
                <div onclick="openModal('{{ asset('images/galeria/fabricacion/6.jpeg') }}', 'Montaje e Instalación de Tuberías de Proceso')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/fabricacion/6.jpeg') }}"
                            alt="Montaje e Instalación de Tuberías de Proceso"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Tubería y Montaje</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Montaje de Tuberías de Proceso</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Soldadura en sitio, ensamblaje de soportería e interconexión de líneas de tubería e instrumentación.</p>
                    </div>
                </div>

                <!-- Ítem 6: fabricacion_de_piezas.jpeg -->
                <div onclick="openModal('{{ asset('images/galeria/fabricacion/fabricacion_de_piezas.jpeg') }}', 'Fabricación y Maquinado de Piezas')"
                    class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/40 transition-all duration-500 shadow-xl cursor-pointer h-96 sm:h-[28rem]">
                    <div class="relative h-full w-full overflow-hidden">
                        <img src="{{ asset('images/galeria/fabricacion/fabricacion_de_piezas.jpeg') }}"
                            alt="Fabricación y Maquinado de Piezas"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 flex flex-col justify-end z-10">
                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider mb-1">Maquinado y Ajuste</span>
                        <h3 class="text-lg font-bold text-white group-hover:text-blue-300 transition-colors">Fabricación de Piezas Especiales</h3>
                        <p class="text-xs text-slate-300 mt-2 leading-relaxed">Maquinado técnico y acabados mecánicos de precisión para reemplazo y ensamblaje de componentes.</p>
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
