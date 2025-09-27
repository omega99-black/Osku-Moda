<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle de venta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2">ID Detalle</th>
                            <th class="border border-gray-300 px-4 py-2">ID Venta</th>
                            <th class="border border-gray-300 px-4 py-2">ID Producto</th>
                            <th class="border border-gray-300 px-4 py-2">Cantidad</th>
                            <th class="border border-gray-300 px-4 py-2">Precio Unitario</th>
                            <th class="border border-gray-300 px-4 py-2">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($detalles as $detalle)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $detalle->id_detalle }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $detalle->id_venta }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $detalle->id_producto }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $detalle->cantidad }}</td>
                                <td class="border border-gray-300 px-4 py-2">${{ number_format($detalle->precio_unitario, 2) }}</td>
                                <td class="border border-gray-300 px-4 py-2">${{ number_format($detalle->cantidad * $detalle->precio_unitario, 2) }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="border border-gray-300 px-4 py-2 text-center">
                                    No hay detalles de venta registrados
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>