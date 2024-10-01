<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = usuario::all();
        return view('usuarios.show')->with(['usuarios' => $usuarios]);
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'rol' => 'required',
            'correo' => 'required|email'
        ]);

        try {
            usuario::create($data);
            return redirect('/usuarios/show')->with('success', 'Usuario creado con éxito');
        } catch (\Exception $e) {
            return redirect('/usuarios/create')->with('error', 'Error al crear usuario: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $usuario = usuario::findOrFail($id);
        return view('usuarios.showDetail')->with(['usuario' => $usuario]);
    }

    public function edit($id)
    {
        $usuario = usuario::findOrFail($id);
        return view('usuarios.update', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'rol' => 'required',
            'correo' => 'required|email'
        ]);

        $usuario = usuario::findOrFail($id);
        $usuario->update($data);
        return redirect('/usuarios/show')->with('success', 'Usuario actualizado con éxito');
    }

    public function destroy($id)
    {
        try {
            usuario::destroy($id);
            return response()->json(['res' => true]);
        } catch (\Exception $e) {
            return response()->json(['res' => false, 'message' => $e->getMessage()]);
        }
    }
}
