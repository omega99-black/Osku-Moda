<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|unique:usuarios,email',
            'contrasena' => 'required|min:6',
            'estado' => 'required|string',
            'id_rol' => 'required|integer'
        ]);

        Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'contrasena' => bcrypt($request->contrasena), // Encriptar contraseña
            'estado' => $request->estado,
            'id_rol' => $request->id_rol
        ]);

        return redirect()->route('usuarios.index')
                        ->with('success', 'Usuario creado exitosamente');
    }

    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|unique:usuarios,email,' . $id . ',id_usuario',
            'estado' => 'required|string',
            'id_rol' => 'required|integer'
        ]);

        $usuario->update($request->only(['nombre', 'email', 'estado', 'id_rol']));
        
        return redirect()->route('usuarios.index')
                        ->with('success', 'Usuario actualizado exitosamente');
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        
        return redirect()->route('usuarios.index')
                        ->with('success', 'Usuario eliminado exitosamente');
    }
}