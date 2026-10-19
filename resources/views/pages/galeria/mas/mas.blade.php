@extends('layouts.app')

@section('title', 'AGC GROUP México | Galería de Proyectos')

@section('content')

    <!-- Sección Galería de Proyectos -->
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
                    Portafolio Visual
                </span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-white tracking-tight">
                    Galeria de Proyectos

                </h2>
            </div>

            <!-- Grid de Imágenes (Sin Texto) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                @for ($i = 1; $i <= 262; $i++)
                    <!-- Ítem {{ $i }} -->
                    <div onclick="openModal('{{ asset('images/todas/agc_ (' . $i . ').jpeg') }}')"
                        class="group relative bg-slate-900/50 rounded-2xl border border-slate-800/80 overflow-hidden hover:border-blue-500/50 transition-all duration-500 shadow-xl cursor-pointer aspect-4/3 sm:aspect-square">
                        <div class="relative h-full w-full overflow-hidden">
                            <img src="{{ asset('images/todas/agc_ (' . $i . ').jpeg') }}" alt="Proyecto {{ $i }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Icono y capa de interacción al pasar el cursor (Sin texto) -->
                            <div
                                class="absolute inset-0 bg-slate-950/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <div
                                    class="bg-blue-600/80 p-3 rounded-full border border-blue-400/40 text-white transform scale-75 group-hover:scale-100 transition-transform duration-300 shadow-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
    </section>

    <!-- Modal Visor de Imagen Flotante -->
    <div id="imageModal"
        class="fixed inset-0 z-50 hidden bg-slate-950/90 backdrop-blur-md flex items-center justify-center p-4">
        <div class="relative max-w-5xl w-full bg-slate-900 rounded-2xl border border-slate-800 overflow-hidden shadow-2xl">
            <!-- Botón de Cerrar -->
            <button onclick="closeModal()"
                class="absolute top-4 right-4 z-20 text-white/70 hover:text-white bg-slate-800/80 hover:bg-slate-700 p-2.5 rounded-full transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="p-2 flex items-center justify-center bg-slate-950/50">
                <img id="modalImage" src="" alt="Imagen ampliada"
                    class="max-h-[85vh] w-auto object-contain rounded-lg">
            </div>
        </div>
    </div>

    <!-- Script del Modal -->
    <script>
        function openModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
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
