<?php

namespace App\Http\Controllers;

use App\Models\DetalleCompra;
use Illuminate\Http\Request;

class DetalleCompraController extends Controller
{
    public function index()
    {
        $detalles = DetalleCompra::all();
        return view('detalle_compra.index', compact('detalles'));
    }
}
