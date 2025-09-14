<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Relación Categorías - Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Categorías de Productos</h1>
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border px-4 py-2">ID Producto</th>
                            <th class="border px-4 py-2">ID Categoría</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($relaciones as $relacion)
                            <tr>
                                <td class="border px-4 py-2">{{ $relacion->id_producto }}</td>
                                <td class="border px-4 py-2">{{ $relacion->id_categoria }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="border px-4 py-2 text-center">No hay relaciones registradas</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>