<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle del Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                <div class="mb-6">
                    <a href="{{ route('usuarios.index') }}" 
                       class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                        ← Volver
                    </a>
                </div>

                <table class="w-full">
                    <tr class="border-b">
                        <td class="font-bold py-3 px-4 bg-gray-100 w-1/3">ID:</td>
                        <td class="py-3 px-4">{{ $usuario->id_usuario }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="font-bold py-3 px-4 bg-gray-100">Nombre:</td>
                        <td class="py-3 px-4">{{ $usuario->nombre }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="font-bold py-3 px-4 bg-gray-100">Email:</td>
                        <td class="py-3 px-4">{{ $usuario->email }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="font-bold py-3 px-4 bg-gray-100">Estado:</td>
                        <td class="py-3 px-4">
                            <span class="px-3 py-1 rounded {{ $usuario->estado == 'activo' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ ucfirst($usuario->estado) }}
                            </span>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="font-bold py-3 px-4 bg-gray-100">Rol:</td>
                        <td class="py-3 px-4">{{ $usuario->id_rol == 1 ? 'Administrador' : 'Cliente' }}</td>
                    </tr>
                </table>

<div class="mt-6 flex gap-3">
    <a href="{{ route('usuarios.edit', $usuario->id_usuario) }}" 
       class="inline-flex items-center justify-center bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
        <i class="fas fa-edit mr-2"></i> Editar
    </a>
    
    <form method="POST" action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" 
          class="inline m-0"
          onsubmit="return confirm('¿Estás seguro de eliminar este usuario?')">
        @csrf
        @method('DELETE')
        <button type="submit" 
                class="inline-flex items-center justify-center bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600"
                style="background-color: #ef4444;">
            <i class="fas fa-trash mr-2"></i> Eliminar
        </button>
    </form>
</div>

            </div>
        </div>
    </div>
</x-app-layout>