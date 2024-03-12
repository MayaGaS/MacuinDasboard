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
    @include('partials/modalCliente')
    @include('partials/modalAdminPerfil')
    <div class="flex justify-center mt-8">
        <header class="flex items-center justify-between mb-4"> {{-- w-full p-4 bg-white rounded-lg shadow-md --}}
        </header>
        <div class="bg-white rounded-lg p-4 shadow-md">
            <h1 class="text-xl font-semibold text-black">Consultar Ticket</h1>
            <div class="mb-4">
                <input type="text" placeholder="Buscar" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
                <button class="ml-2 px-4 py-2 bg-purple-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Buscar</button>
            </div>
            <div class="space-y-4">
                <!-- Ticket Card 1 -->
                <div class="bg-gray-100 p-4 rounded-md">
                    <!-- Logo -->
                    <img src="imagenes/logo.jpg" alt="Logo" class="w-12 h-12 mb-2">
                    <!-- Fields -->
                    <p class="text-sm text-gray-600">No. Ticket: <span class="font-semibold">12345</span></p>
                    <p class="text-sm text-gray-600">Departamento: <span class="font-semibold">Soporte Técnico</span></p>
                    <!-- ... Other fields ... -->
                    <!-- Button -->
                    <button class="mt-2 px-4 py-2 bg-purple-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Abrir</button>
                </div>
                <!-- Ticket Card 2 (similar structure) -->
                <!-- ... -->
            </div>
        </div>
    </div>
</body>
</html>
