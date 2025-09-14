<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProducto;
use Illuminate\Http\Request;

class CategoriaProductoController extends Controller
{
    public function index()
    {
        $relaciones = CategoriaProducto::all();

        return view('categoriaproducto.index', compact('relaciones'));
    }
}
