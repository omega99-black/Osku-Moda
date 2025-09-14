<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all(); // trae todos los usuarios
        return view('usuarios.index', compact('usuarios'));
    }
}
