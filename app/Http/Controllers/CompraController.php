<?php
namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        $compras = Compra::orderBy('id_compra', 'asc')->get();
        return view('compras.index', compact('compras'));
    }
}