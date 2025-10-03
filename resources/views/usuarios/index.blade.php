<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Usuarios</h1>

                {{-- Botón para ir a create --}}
                <a href="{{ route('usuarios.create') }}" 
                   class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
                   + Nuevo Usuario
                </a>

                <table id="employees" class="display w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border px-4 py-2">ID</th>
                            <th class="border px-4 py-2">Nombre</th>
                            <th class="border px-4 py-2">Email</th>
                            <th class="border px-4 py-2">Estado</th>
                            <th class="border px-4 py-2">id_rol</th>
                                                </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td class="border px-4 py-2">{{ $usuario->id_usuario }}</td>
                                <td class="border px-4 py-2">{{ $usuario->nombre }}</td>
                                <td class="border px-4 py-2">{{ $usuario->email }}</td>
                                <td class="border px-4 py-2">{{ $usuario->estado }}</td>
                                <td class="border px-4 py-2">{{ $usuario->id_rol }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Scripts de DataTables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css"> 

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> 
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script> 
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script> 
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script> 

    <script> 
        $(function() { 
            $('#employees').DataTable({ 
                pageLength: 20, 
                dom: 'Bfrtip', 
                language: { 
                    url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json' 
                }, 
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            }); 
        }); 
    </script> 
</x-app-layout>
