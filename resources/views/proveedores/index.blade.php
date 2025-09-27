<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proveedores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Nombre</th>
                            <th class="border border-gray-300 px-4 py-2">Teléfono</th>
                            <th class="border border-gray-300 px-4 py-2">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($proveedores as $proveedor)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $proveedor->id_proveedor }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $proveedor->nombre }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $proveedor->telefono }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $proveedor->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>