<nav class="bg-purple-500 p-4">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="#" class="text-white font-bold text-lg">
            <img src="imagenes/logo.jpg" alt="Logo" class="h-10 inline-block mr-2">
            Macuin DashBoards
        </a>

        <!-- Menú de navegación (hamburguesa) -->
        <button class="text-white p-2 md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6">
                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Elementos del navbar -->
        <div class="hidden md:flex space-x-4">
            <!-- Perfil de usuario -->
            <div class="relative group">
                <button class="text-white">
                    <i class="fas fa-user"></i>
                </button>
                <div class="absolute hidden group-hover:block bg-white text-purple-500 p-2 rounded shadow-md right-0 mt-2">
                    Cliente [Nombre]
                </div>
            </div>
        </div>
    </div>
</nav>
