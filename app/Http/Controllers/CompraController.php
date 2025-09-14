<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        $usuarios = Compra::all();
        return view('compras.index', compact('compras'));
    }
}