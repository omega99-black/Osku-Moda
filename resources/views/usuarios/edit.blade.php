<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                <form method="POST" action="{{ route('usuarios.update', $usuario->id_usuario) }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Nombre</label>
                        <input type="text" name="nombre" value="{{ $usuario->nombre }}" 
                               class="w-full border rounded p-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" name="email" value="{{ $usuario->email }}" 
                               class="w-full border rounded p-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Estado</label>
                        <select name="estado" class="w-full border rounded p-2">
                            <option value="activo" {{ $usuario->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                            <option value="inactivo" {{ $usuario->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Rol</label>
                        <select name="id_rol" class="w-full border rounded p-2">
                            <option value="1" {{ $usuario->id_rol == 1 ? 'selected' : '' }}>Administrador</option>
                            <option value="2" {{ $usuario->id_rol == 2 ? 'selected' : '' }}>Cliente</option>
                        </select>
                    </div>

                    <div class="flex gap-3">
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                            Actualizar
                        </button>
                        <a href="{{ route('usuarios.index') }}" 
                           class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                            Cancelar
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>