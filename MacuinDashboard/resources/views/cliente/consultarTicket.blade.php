<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Consultar Ticket</title>
</head>
<body>
    @include('partials/navbar')

    <!-- Espacio separador entre el navbar y el buscador -->
    <div class="h-8"></div>

    <!-- Barra de búsqueda -->
    <div class="flex justify-center">
        <div class="w-1/2 bg-gray-200 p-2 rounded-md">
            <input type="text" placeholder="Buscar..." class="w-full px-3 py-1 border border-gray-300 rounded-full focus:outline-none focus:border-blue-500">
        </div>
    </div>

    <!-- Modals -->
    <!-- Modal de Cliente -->
    <div id="modalCliente" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center z-50 hidden">
        <!-- Contenido del modal de Cliente -->
        <div class="bg-white p-8 rounded-md">
            <p>Modal de Cliente</p>
        </div>
    </div>

    <!-- Modal de AdminPerfil -->
    <div id="modalAdminPerfil" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center z-50 hidden">
        <!-- Contenido del modal de AdminPerfil -->
        <div class="bg-white p-8 rounded-md">
            <p>Modal de AdminPerfil</p>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="flex justify-center mt-8">
        <header class="flex items-center justify-between mb-4">
            {{-- Aquí puedes añadir contenido adicional en el encabezado si lo necesitas --}}
        </header>
        <div class="bg-white rounded-lg p-4 shadow-md">
            <!-- Ticket Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Ticket Card 1 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <!-- Logo -->
                    <img src="imagenes/logo.jpg" alt="Logo" class="w-12 h-12 mb-4 mx-auto">
                    <!-- Fields -->
                    <div class="text-center mb-4"> <!-- Contenedor centrado -->
                        <p class="text-sm text-gray-600">No. Ticket: <span class="font-semibold">12345</span></p>
                        <p class="text-sm text-gray-600">Departamento: <span class="font-semibold">Soporte Técnico</span></p>
                    </div>
                    <!-- Button -->
                    <div class="text-center"> <!-- Contenedor centrado -->
                        <button class="px-3 py-1 bg-purple-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Abrir</button>
                    </div>
                </div>

                <!-- Ticket Card 2 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <!-- Logo -->
                    <img src="imagenes/logo.jpg" alt="Logo" class="w-12 h-12 mb-4 mx-auto">
                    <!-- Fields -->
                    <div class="text-center mb-4"> <!-- Contenedor centrado -->
                        <p class="text-sm text-gray-600">No. Ticket: <span class="font-semibold">67890</span></p>
                        <p class="text-sm text-gray-600">Departamento: <span class="font-semibold">Ventas</span></p>
                    </div>
                    <!-- Button -->
                    <div class="text-center"> <!-- Contenedor centrado -->
                        <button class="px-3 py-1 bg-purple-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Abrir</button>
                    </div>
                </div>

                <!-- Ticket Card 3 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <!-- Logo -->
                    <img src="imagenes/logo.jpg" alt="Logo" class="w-12 h-12 mb-4 mx-auto">
                    <!-- Fields -->
                    <div class="text-center mb-4"> <!-- Contenedor centrado -->
                        <p class="text-sm text-gray-600">No. Ticket: <span class="font-semibold">24680</span></p>
                        <p class="text-sm text-gray-600">Departamento: <span class="font-semibold">Recursos Humanos</span></p>
                    </div>
                    <!-- Button -->
                    <div class="text-center"> <!-- Contenedor centrado -->
                        <button class="px-3 py-1 bg-purple-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Abrir</button>
                    </div>
                </div>

                <!-- Agrega más Ticket Cards aquí si es necesario -->
                <!-- Ticket Card 4 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <!-- Logo -->
                    <img src="imagenes/logo.jpg" alt="Logo" class="w-12 h-12 mb-4 mx-auto">
                    <!-- Fields -->
                    <div class="text-center mb-4"> <!-- Contenedor centrado -->
                        <p class="text-sm text-gray-600">No. Ticket: <span class="font-semibold">13579</span></p>
                        <p class="text-sm text-gray-600">Departamento: <span class="font-semibold">Marketing</span></p>
                    </div>
                    <!-- Button -->
                    <div class="text-center"> <!-- Contenedor centrado -->
                        <button class="px-3 py-1 bg-purple-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Abrir</button>
                    </div>
                </div>

                <!-- Ticket Card 5 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <!-- Logo -->
                    <img src="imagenes/logo.jpg" alt="Logo" class="w-12 h-12 mb-4 mx-auto">
                    <!-- Fields -->
                    <div class="text-center mb-4"> <!-- Contenedor centrado -->
                        <p class="text-sm text-gray-600">No. Ticket: <span class="font-semibold">24680</span></p>
                        <p class="text-sm text-gray-600">Departamento: <span class="font-semibold">Recursos Humanos</span></p>
                    </div>
                    <!-- Button -->
                    <div class="text-center"> <!-- Contenedor centrado -->
                        <button class="px-3 py-1 bg-purple-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Abrir</button>
                    </div>
                </div>

                <!-- Ticket Card 6 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <!-- Logo -->
                    <img src="imagenes/logo.jpg" alt="Logo" class="w-12 h-12 mb-4 mx-auto">
                    <!-- Fields -->
                    <div class="text-center mb-4"> <!-- Contenedor centrado -->
                        <p class="text-sm text-gray-600">No. Ticket: <span class="font-semibold">97531</span></p>
                        <p class="text-sm text-gray-600">Departamento: <span class="font-semibold">Finanzas</span></p>
                    </div>
                    <!-- Button -->
                    <div class="text-center"> <!-- Contenedor centrado -->
                        <button class="px-3 py-1 bg-purple-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Abrir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript para mostrar/ocultar los modals -->
    <script>
        const btnToggleCliente = document.getElementById('btnToggleCliente');
        const modalCliente = document.getElementById('modalCliente');

        const btnToggleAdminPerfil = document.getElementById('btnToggleAdminPerfil');
        const modalAdminPerfil = document.getElementById('modalAdminPerfil');

        btnToggleCliente.addEventListener('click', () => {
            modalCliente.classList.toggle('hidden');
        });

        btnToggleAdminPerfil.addEventListener('click', () => {
            modalAdminPerfil.classList.toggle('hidden');
        });
    </script>
</body>
</html>
