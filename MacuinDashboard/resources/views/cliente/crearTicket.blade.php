<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Nuevo Ticket</title>
</head>
<body>
    @include('partials/navbar')
<!--  @include('partials/modalCliente')
    @include('partials/modalAdminPerfil') -->

    <script>
        @if(isset($mensaje))
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Ticket creado",
                showConfirmButton: false,
                timer: 1500
            });
        @endif
    </script>

    <div class="flex justify-center mt-8">
        <div class="bg-white p-8 rounded-md shadow-md w-96">
            <div class="flex justify-between mb-4">
                <div class="text-sm text-gray-600">No. Ticket: <span class="font-semibold">12345</span></div>
                <div class="text-sm text-gray-600">Fecha: <span class="font-semibold">12/03/2024</span></div>
            </div>

            <form action="/crearTicketM" class="bg-gray-100 p-6 rounded-lg w-80">
                <!-- Departamento -->
                <div class="mb-4">
                    <label for="departamento" class="block text-sm font-medium text-gray-600">Departamento:</label>
                    <select id="departamento" name="departamento" class="form-select w-full rounded-md" required>
                        <option value="soporte">Soporte Técnico</option>
                        <option value="ventas">Ventas</option>
                        <!-- Agregar más opciones según sea necesario -->
                    </select>
                </div>

                <!-- Clasificación -->
                <div class="mb-4">
                    <label for="clasificacion" class="block text-sm font-medium text-gray-600">Clasificación:</label>
                    <select id="clasificacion" name="clasificacion" class="form-select w-full rounded-md" required>
                        <option value="alta">Alta</option>
                        <option value="media">Media</option>
                        <option value="baja">Baja</option>
                        <!-- Agregar más opciones según sea necesario -->
                    </select>
                </div>

                <!-- Detalle -->
                <div class="mb-4">
                    <label for="detalle" class="block text-sm font-medium text-gray-600">Detalle:</label>
                    <textarea id="detalle" name="detalle" rows="3" class="form-textarea w-full rounded-md" required></textarea>
                </div>

                <!-- Estado/Status -->
                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-600">Status:</label>
                    <select id="status" name="status" class="form-select w-full rounded-md" required>
                        <option value="abierto">Abierto</option>
                        <option value="en_proceso">En Proceso</option>
                        <option value="cerrado">Cerrado</option>
                        <!-- Agregar más opciones según sea necesario -->
                    </select>
                </div>

                <!-- Botones Cancelar y Guardar -->
                <div class="flex justify-center">
                    <button type="submit" class="px-4 py-2 mr-2 bg-gray-300 text-gray-600 rounded-md hover:bg-gray-400 focus:outline-none focus:ring focus:border-blue-300">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-purple-500 text-white rounded-md hover:bg-purple-700 focus:outline-none focus:ring focus:border-blue-300">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
