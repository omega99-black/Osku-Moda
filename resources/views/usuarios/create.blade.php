<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('usuarios.store') }}" id="formUsuario">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Nombre</label>
                        <input type="text" name="nombre" class="w-full border rounded p-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" name="email" class="w-full border rounded p-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Contraseña</label>
                        <input type="password" name="contrasena" id="contrasena" class="w-full border rounded p-2" required minlength="6">
                        <small class="text-gray-500">Mínimo 8 caracteres</small>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Confirmar Contraseña</label>
                        <input type="password" name="contrasena_confirmacion" id="contrasena_confirmacion" class="w-full border rounded p-2" required>
                        <small id="mensaje-error" class="text-red-500 hidden">Las contraseñas no coinciden</small>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Estado</label>
                        <select name="estado" class="w-full border rounded p-2">
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Rol</label>
                        <select name="id_rol" class="w-full border rounded p-2" required>
                            <option value="">Seleccione un rol</option>
                            <option value="1">Administrador</option>
                            <option value="2">Cliente</option>
                        </select>
                    </div>

                    <div class="flex gap-3">
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                            Guardar
                        </button>
                        <a href="{{ route('usuarios.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Validación de contraseñas
        document.getElementById('formUsuario').addEventListener('submit', function(e) {
            const contrasena = document.getElementById('contrasena').value;
            const confirmacion = document.getElementById('contrasena_confirmacion').value;
            const mensajeError = document.getElementById('mensaje-error');

            if (contrasena !== confirmacion) {
                e.preventDefault();
                mensajeError.classList.remove('hidden');
                document.getElementById('contrasena_confirmacion').classList.add('border-red-500');
                return false;
            }
        });

        // Ocultar mensaje de error cuando el usuario escribe
        document.getElementById('contrasena_confirmacion').addEventListener('input', function() {
            document.getElementById('mensaje-error').classList.add('hidden');
            this.classList.remove('border-red-500');
        });
    </script>
</x-app-layout>