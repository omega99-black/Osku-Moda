<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function show($id)
    {    
        $clientes = Cliente::find($id);
        return view('clientes.show', compact('cliente'));
    }    

    public function store (Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }
}
