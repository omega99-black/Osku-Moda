<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle de Compras') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Detalle de Compras</h1>
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border px-4 py-2">ID Detalle</th>
                            <th class="border px-4 py-2">ID Compra</th>
                            <th class="border px-4 py-2">ID Producto</th>
                            <th class="border px-4 py-2">Cantidad</th>
                            <th class="border px-4 py-2">Precio Unitario</th>
                            <th class="border px-4 py-2">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($detalles as $detalle)
                            <tr>
                                <td class="border px-4 py-2">{{ $detalle->id_detalle_compra }}</td>
                                <td class="border px-4 py-2">{{ $detalle->id_compra }}</td>
                                <td class="border px-4 py-2">{{ $detalle->id_producto }}</td>
                                <td class="border px-4 py-2">{{ $detalle->cantidad }}</td>
                                <td class="border px-4 py-2">${{ number_format($detalle->precio_unitario, 2) }}</td>
                                <td class="border px-4 py-2">${{ number_format($detalle->subtotal, 2) }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="border px-4 py-2 text-center">No hay detalles de compra registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
