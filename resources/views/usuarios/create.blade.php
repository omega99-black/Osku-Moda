<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('usuarios.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700">Nombre</label>
                        <input type="text" name="nombre" class="w-full border rounded p-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Email</label>
                        <input type="email" name="email" class="w-full border rounded p-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Contraseña</label>
                        <input type="password" name="contrasena" class="w-full border rounded p-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Estado</label>
                        <select name="estado" class="w-full border rounded p-2">
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Rol</label>
                        <input type="number" name="id_rol" class="w-full border rounded p-2" required>
                    </div>

                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
