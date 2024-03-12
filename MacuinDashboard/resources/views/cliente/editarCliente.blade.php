<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Editar Usuario</title>
</head>
<body>
    @include('partials/navbar')
    @include('partials/modalCliente')
    @include('partials/modalAdminPerfil')

    <script>
        @if(isset($mensaje))
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Usuario editado",
                showConfirmButton: false,
                timer: 1500
            });
        @endif
    </script>
    

    <div class="flex justify-center mt-8">
        <div class="bg-white p-8 rounded-md shadow-md">
            <h1 class="text-xl font-semibold text-black mb-4">Editar Usuario</h1>
            <form action="/editarClienteM" class="bg-gray-100 p-6 rounded-lg w-96">
{{--             <form action="{{ route('usuario.update', $usuario->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT') --}}

                <!-- Nombre -->
                <div class="flex items-center space-x-4">
                    <div class="w-1/4 text-right">
                        <label for="nombre" class="text-sm font-medium text-gray-600">Nombre:</label>
                    </div>
                    <div class="w-3/4">
                        <div class="relative">
                            <input type="text" id="nombre" name="nombre" {{-- value="{{ $usuario->nombre }}" --}} class="form-input w-full" required>
                            <div class="absolute right-0 top-0 mt-2 mr-2">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Correo Electrónico -->
                <div class="flex items-center space-x-4">
                    <div class="w-1/4 text-right">
                        <label for="email" class="text-sm font-medium text-gray-600">Correo Electrónico:</label>
                    </div>
                    <div class="w-3/4">
                        <div class="relative">
                            <input type="email" id="email" name="email" {{-- value="{{ $usuario->email }}"  --}}class="form-input w-full" required>
                            <div class="absolute right-0 top-0 mt-2 mr-2">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contraseña -->
                <div class="flex items-center space-x-4">
                    <div class="w-1/4 text-right">
                        <label for="password" class="text-sm font-medium text-gray-600">Contraseña:</label>
                    </div>
                    <div class="w-3/4">
                        <div class="relative">
                            <input type="password" id="password" name="password" class="form-input w-full" required>
                            <div class="absolute right-0 top-0 mt-2 mr-2">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botón Guardar Cambios -->
                <div class="mt-6">
                    <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-700 focus:outline-none focus:ring focus:border-blue-300">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>