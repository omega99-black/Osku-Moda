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
                   class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-600">
                   + Nuevo Usuario
                </a>

                <table id="employees" class="display w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border px-4 py-2">ID</th>
                            <th class="border px-4 py-2">Nombre</th>
                            <th class="border px-4 py-2">Email</th>
                            <th class="border px-4 py-2">Estado</th>
                            <th class="border px-4 py-2">Rol</th>
                            <th class="border px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td class="border px-4 py-2">{{ $usuario->id_usuario }}</td>
                                <td class="border px-4 py-2">{{ $usuario->nombre }}</td>
                                <td class="border px-4 py-2">{{ $usuario->email }}</td>
                                <td class="border px-4 py-2">
                                    <span class="px-2 py-1 text-xs rounded {{ $usuario->estado == 'activo' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ ucfirst($usuario->estado) }}
                                    </span>
                                </td>
                                <td class="border px-4 py-2">
                                    {{ $usuario->id_rol == 1 ? 'Administrador' : 'Cliente' }}
                                </td>
                                <td class="border px-4 py-2">
                                    <div class="flex gap-1 justify-center">
                                        <!-- Ver -->
                                        <a href="{{ route('usuarios.show', $usuario->id_usuario) }}" 
                                           class="px-2 py-1 bg-blue-500 text-white text-xs rounded hover:bg-blue-600"
                                           title="Ver detalles">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        
                                        <!-- Editar -->
                                        <a href="{{ route('usuarios.edit', $usuario->id_usuario) }}" 
                                           class="px-2 py-1 bg-yellow-500 text-white text-xs rounded hover:bg-yellow-600"
                                           title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        
                                        <!-- Eliminar -->
                                      <!-- Eliminar -->
                    <form method="POST" action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" 
      class="inline"
      onsubmit="return confirm('¿Estás seguro de eliminar a {{ $usuario->nombre }}?')">
    @csrf
    @method('DELETE')
    <button type="submit" 
            class="px-2 py-1 bg-red-500 text-white text-xs rounded hover:bg-red-600 inline-flex items-center justify-center"
            style="background-color: #ef4444;"
            title="Eliminar">
        <i class="fas fa-trash"></i>
    </button>
</form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Font Awesome para los iconos --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                // Evitar que DataTables intente ordenar la columna de Acciones
                columnDefs: [{
                    targets: -1,
                    orderable: false
                }]
            }); 
        }); 
    </script> 
</x-app-layout>