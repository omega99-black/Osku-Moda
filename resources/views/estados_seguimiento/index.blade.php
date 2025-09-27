<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estados de seguimiento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2">ID Estado</th>
                            <th class="border border-gray-300 px-4 py-2">Nombre Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($estados as $estado)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $estado->id_estado }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $estado->nombre_estado }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="border border-gray-300 px-4 py-2 text-center">
                                    No hay estados registrados
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>