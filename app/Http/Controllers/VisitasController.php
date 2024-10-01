<?php

namespace App\Http\Controllers;

use App\Models\visita;
use Illuminate\Http\Request;

class VisitasController extends Controller
{
    public function index()
    {
        $visita = visita::all();
        return view('visitas.show')->with(['visitas' => $visita]);
    }

    public function create()
    {
        return view('visitas.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_visitante' => 'required',
            'fecha_hora_entrada' => 'required|date',
            'fecha_hora_salida' => 'nullable|date',
            'proposito' => 'required'
        ]);

        try {
            visita::create($data);
            return redirect('/visitas/show')->with('success', 'Visita creada con éxito');
        } catch (\Exception $e) {
            return redirect('/visitas/create')->with('error', 'Error al crear visita: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $visita = visita::findOrFail($id);
        return view('visitas.showDetail')->with(['visita' => $visita]);
    }

    public function edit($id)
    {
        $visita = visita::findOrFail($id);
        return view('visitas.update', ['visita' => $visita]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'id_visitante' => 'required',
            'fecha_hora_entrada' => 'required|date',
            'fecha_hora_salida' => 'nullable|date',
            'proposito' => 'required'
        ]);

        $visita = visita::findOrFail($id);
        $visita->update($data);
        return redirect('/visitas/show')->with('success', 'Visita actualizada con éxito');
    }

    public function destroy($id)
    {
        try {
            visita::destroy($id);
            return response()->json(['res' => true]);
        } catch (\Exception $e) {
            return response()->json(['res' => false, 'message' => $e->getMessage()]);
        }
    }
}
