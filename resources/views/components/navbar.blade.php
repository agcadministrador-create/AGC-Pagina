<header class="bg-slate-950/95 backdrop-blur border-b border-slate-800 text-white sticky top-0 z-50">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-28 flex items-center justify-between">

        <!-- 1. Logo de Marca -->
        <div class="w-1/4 flex items-center justify-start">
            <a href="{{ route('home') }}" class="relative z-20">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo AGC"
                    class="h-24 md:h-28 w-auto object-contain drop-shadow-[0_10px_15px_rgba(0,0,0,0.8)]">
            </a>
        </div>

        <!-- 2. Menú de Navegación Dinámico -->
        <nav
            class="hidden md:flex flex-1 justify-center space-x-6 lg:space-x-8 font-semibold text-[11px] lg:text-xs uppercase tracking-[0.2em] items-center">

            <!-- Inicio -->
            <a href="{{ route('home') }}"
                class="pb-1 transition-all duration-300 {{ request()->routeIs('home') ? 'text-blue-500 border-b-2 border-blue-500 shadow-[0_4px_12px_rgba(59,130,246,0.4)]' : 'text-slate-300 hover:text-white' }}">
                Inicio
            </a>

            <!-- Servicios -->
            <a href="{{ route('servicios') }}"
                class="pb-1 transition-all duration-300 {{ request()->routeIs('servicios') ? 'text-blue-500 border-b-2 border-blue-500 shadow-[0_4px_12px_rgba(59,130,246,0.4)]' : 'text-slate-300 hover:text-white' }}">
                Servicios
            </a>

            <!-- Galería con Menú Desplegable (Dropdown) -->
            <div class="relative group py-8">
                <!-- Botón Principal -->
                <a href="{{ route('galeria.instalaciones') }}"
                    class="pb-1 transition-all duration-300 inline-flex items-center space-x-1 cursor-pointer {{ request()->routeIs('galeria*') ? 'text-blue-500 border-b-2 border-blue-500 shadow-[0_4px_12px_rgba(59,130,246,0.4)]' : 'text-slate-300 hover:text-white' }}">
                    <span>Galería</span>
                    <svg class="w-4 h-4 ml-1 stroke-current transition-transform duration-200 group-hover:rotate-180"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <!-- Submenú Desplegable -->
                <div
                    class="absolute left-0 top-full -mt-2 w-56 bg-slate-900 border border-slate-800 rounded-lg shadow-2xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 z-50">

                    <!-- Opción: Ver Todas / Instalaciones -->
                    <a href="{{ route('galeria.instalaciones') }}"
                        class="block px-4 py-2.5 text-[11px] text-slate-300 hover:text-white hover:bg-blue-600/20 transition-colors duration-200 border-b border-slate-800/50">
                        Todas las Opciones
                    </a>

                    <!-- Opción: Desmantelamiento -->
                    <a href="{{ route('galeria.desmantelamiento') }}"
                        class="block px-4 py-2.5 text-[11px] text-slate-300 hover:text-white hover:bg-blue-600/20 transition-colors duration-200">
                        Desmantelamiento
                    </a>

                    <!-- Opción: Fabricación -->
                    <a href="{{ route('galeria.fabricacion') }}"
                        class="block px-4 py-2.5 text-[11px] text-slate-300 hover:text-white hover:bg-blue-600/20 transition-colors duration-200">
                        Fabricación
                    </a>

                    <!-- Opción: Recubrimientos -->
                    <a href="{{ route('galeria.recubrimientos') }}"
                        class="block px-4 py-2.5 text-[11px] text-slate-300 hover:text-white hover:bg-blue-600/20 transition-colors duration-200">
                        Recubrimientos
                    </a>

                    <!-- Opción: Más -->
                    <a href="{{ route('galeria.mas') }}"
                        class="block px-4 py-2.5 text-[11px] text-slate-300 hover:text-white hover:bg-blue-600/20 transition-colors duration-200 border-t border-slate-800/50">
                        Más
                    </a>
                </div>
            </div>

            <!-- Proyectos -->
            <a href="{{ route('proyectos') }}"
                class="pb-1 transition-all duration-300 {{ request()->routeIs('proyectos') ? 'text-blue-500 border-b-2 border-blue-500 shadow-[0_4px_12px_rgba(59,130,246,0.4)]' : 'text-slate-300 hover:text-white' }}">
                Proyectos
            </a>

            <!-- Nosotros -->
            <a href="{{ route('nosotros') }}"
                class="pb-1 transition-all duration-300 {{ request()->routeIs('nosotros') ? 'text-blue-500 border-b-2 border-blue-500 shadow-[0_4px_12px_rgba(59,130,246,0.4)]' : 'text-slate-300 hover:text-white' }}">
                Nosotros
            </a>

            <!-- Contacto -->
            <a href="{{ route('contacto') }}"
                class="pb-1 transition-all duration-300 {{ request()->routeIs('contacto') ? 'text-blue-500 border-b-2 border-blue-500 shadow-[0_4px_12px_rgba(59,130,246,0.4)]' : 'text-slate-300 hover:text-white' }}">
                Contacto
            </a>

        </nav>

        <!-- 3. Botón azul de la parte superior derecha -->
        <div class="hidden md:flex w-1/4 justify-end">
            <a href="{{ route('contacto') }}"
                class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2.5 px-6 rounded-sm uppercase tracking-widest text-[11px] transition shadow-[0_0_15px_rgba(37,99,235,0.4)]">
                Contactarnos
            </a>
        </div>

        <!-- 4. Botón Menú Móvil -->
        <div class="md:hidden flex items-center justify-end w-1/4">
            <button class="text-slate-300 hover:text-white focus:outline-none">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

    </div>
</header>
