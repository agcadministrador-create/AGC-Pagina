<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AGC GROUP México | Soluciones Industriales')</title>

    <!-- Ícono de la pestaña (Favicon) -->
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/png">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Directiva de Vite para cargar CSS y JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-900 text-slate-100 antialiased font-sans">

    <!-- PRELOADER / ANIMACIÓN DE CARGA GLOBAL -->
    <div id="page-loader"
        class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-slate-950 transition-opacity duration-500 ease-out">
        <div class="relative flex items-center justify-center">
            <!-- Anillo giratorio de carga -->
            <div class="w-20 h-20 border-4 border-slate-800 border-t-blue-500 rounded-full animate-spin"></div>
            <!-- Logo de AGC en el centro con pulso -->
            <img src="{{ asset('images/Logo.png') }}" alt="AGC Logo"
                class="w-10 h-10 object-contain absolute animate-pulse">
        </div>
        <!-- Texto corporativo -->
        <p class="mt-4 text-xs font-bold uppercase tracking-widest text-slate-400">
            Cargando AGC Group...
        </p>
    </div>

    {{-- Navegación --}}
    @include('components.navbar')

    {{-- Contenido Principal --}}
    <main>
        @yield('content')
    </main>

    {{-- Pie de página --}}
    @include('components.footer')

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- SCRIPT DE CONTROL DEL PRELOADER -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loader = document.getElementById('page-loader');

            // 1. Ocultar el loader cuando la página haya cargado por completo
            window.addEventListener('load', function() {
                if (loader) {
                    loader.classList.add('opacity-0', 'pointer-events-none');
                    setTimeout(() => {
                        loader.style.display = 'none';
                    }, 500);
                }
            });

            // 2. Activar el loader al hacer clic en enlaces de la navegación interna
            document.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');

                    // Validar que sea una ruta interna, no un ancla (#) ni un enlace externo/WhatsApp
                    if (href && href.startsWith('/') && !href.startsWith('#') && this.target !==
                        '_blank') {
                        if (loader) {
                            loader.style.display = 'flex';
                            setTimeout(() => {
                                loader.classList.remove('opacity-0', 'pointer-events-none');
                            }, 10);
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
