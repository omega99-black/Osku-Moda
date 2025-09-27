<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Compras') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Proveedor</th>
                            <th class="border border-gray-300 px-4 py-2">Fecha</th>
                            <th class="border border-gray-300 px-4 py-2">Total</th>
                            <th class="border border-gray-300 px-4 py-2">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($compras as $compra)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $compra->id_compra }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $compra->id_proveedor }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $compra->fecha }}</td>
                                <td class="border border-gray-300 px-4 py-2">${{ number_format($compra->total, 2) }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $compra->estado }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>