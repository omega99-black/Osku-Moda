<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Productos</h1>
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border px-4 py-2">ID</th>
                            <th class="border px-4 py-2">Nombre</th>
                            <th class="border px-4 py-2">Descripción</th>
                            <th class="border px-4 py-2">Precio</th>
                            <th class="border px-4 py-2">Stock</th>
                            <th class="border px-4 py-2">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td class="border px-4 py-2">{{ $producto->id_producto }}</td>
                                <td class="border px-4 py-2">{{ $producto->nombre }}</td>
                                <td class="border px-4 py-2">{{ $producto->descripcion }}</td>
                                <td class="border px-4 py-2">{{ $producto->precio }}</td>
                                <td class="border px-4 py-2">{{ $producto->cantidad_stock }}</td>
                                <td class="border px-4 py-2">{{ $producto->estado }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>
