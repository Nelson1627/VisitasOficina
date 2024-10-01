<?php

namespace App\Http\Controllers;

use App\Models\tramite;
use Illuminate\Http\Request;

class TramitesController extends Controller
{
    public function index()
    {
        $tramites = tramite::all();
        return view('tramites.show')->with(['tramites' => $tramites]);
    }

    public function create()
    {
        return view('tramites.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_visita' => 'required',
            'id_usuario' => 'required',
            'descripcion' => 'required',
            'estado' => 'required',
            'fecha_creacion' => 'required|date'
        ]);

        try {
            tramite::create($data);
            return redirect('/tramites/show')->with('success', 'Trámite creado con éxito');
        } catch (\Exception $e) {
            return redirect('/tramites/create')->with('error', 'Error al crear trámite: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $tramite = tramite::findOrFail($id);
        return view('tramites.showDetail')->with(['tramite' => $tramite]);
    }

    public function edit($id)
    {
        $tramite = tramite::findOrFail($id);
        return view('tramites.update', ['tramite' => $tramite]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'id_visita' => 'required',
            'id_usuario' => 'required',
            'descripcion' => 'required',
            'estado' => 'required',
            'fecha_creacion' => 'required|date'
        ]);

        $tramite = tramite::findOrFail($id);
        $tramite->update($data);
        return redirect('/tramites/show')->with('success', 'Trámite actualizado con éxito');
    }

    public function destroy($id)
    {
        try {
            tramite::destroy($id);
            return response()->json(['res' => true]);
        } catch (\Exception $e) {
            return response()->json(['res' => false, 'message' => $e->getMessage()]);
        }
    }
}
