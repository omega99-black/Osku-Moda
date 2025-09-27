<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaProductoController;
use App\Http\Controllers\MetodoPagoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\DetalleCompraController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\EstadoSeguimientoController;

Route::get('/', function () {
    return view('Inicio');
})->name('Inicio');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::middleware(['auth'])->group(function () {
    Route::get('/tablas', function () {
        return view('navigation-menu'); // aquí cargas tus tablas
    })->name('tablas');
});

Route::get('/registro', function () {
    return view('auth.registro');
})->name('registro'); 

Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos');

Route::get('/error404', function () {
    return view('error404');
})->name('error404');

// 🔹 Tus rutas actuales (no las borro)
 Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/usuarios', [UsuarioController::class, 'index'])
    ->name('usuarios.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/clientes', [ClienteController::class, 'index'])
    ->name('clientes.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/categorias', [CategoriaController::class, 'index'])
    ->name('categorias.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/productos', [ProductoController::class, 'index'])
    ->name('productos.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/categorias_productos', [CategoriaProductoController::class, 'index'])
    ->name('categorias_productos.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/metodos_pago', [MetodoPagoController::class, 'index'])
    ->name('metodos_pago.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/proveedores', [ProveedorController::class, 'index'])
    ->name('proveedores.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/compras', [CompraController::class, 'index'])
    ->name('compras.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/detalles_compra', [DetalleCompraController::class, 'index'])
    ->name('detalles_compra.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/ventas', [VentaController::class, 'index'])
    ->name('ventas.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/detalles_venta', [DetalleVentaController::class, 'index'])
    ->name('detalles_venta.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/estados_seguimiento', [EstadoSeguimientoController::class, 'index'])
    ->name('estados_seguimiento.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/formulario', function () {
        return view('formulario.formulario');
    })->name('formulario.index');

//  Grupo protegido
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/Inicio', function () {
            return view('Inicio');
        })->name('Inicio');
    });

// 🔹 Nuevos resource() para que existan create, store, edit, etc.
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('productos', ProductoController::class);
    Route::resource('categorias_productos', CategoriaProductoController::class);
    Route::resource('metodos_pago', MetodoPagoController::class);
    Route::resource('proveedores', ProveedorController::class);
    Route::resource('compras', CompraController::class);
    Route::resource('detalles_compra', DetalleCompraController::class);
    Route::resource('ventas', VentaController::class);
    Route::resource('detalles_venta', DetalleVentaController::class);
    Route::resource('estados_seguimiento', EstadoSeguimientoController::class);
});
