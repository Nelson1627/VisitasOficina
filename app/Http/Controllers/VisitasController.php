<?php

namespace App\Http\Controllers;


use App\Models\visitas;
use Illuminate\Http\Request;

class VisitasController extends Controller
{
    public function index()
    {
        $visita = visitas::all();
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
            visitas::create($data);
            return redirect('/visitas/show')->with('success', 'Visita creada con éxito');
        } catch (\Exception $e) {
            return redirect('/visitas/create')->with('error', 'Error al crear visita: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $visita = visitas::findOrFail($id);
        return view('visitas.showDetail')->with(['visita' => $visita]);
    }

    public function edit($id)
    {
        $visita = visitas::findOrFail($id);
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

        $visita = visitas::findOrFail($id);
        $visita->update($data);
        return redirect('/visitas/show')->with('success', 'Visita actualizada con éxito');
    }

    public function destroy($id)
    {
        try {
            visitas::destroy($id);
            return response()->json(['res' => true]);
        } catch (\Exception $e) {
            return response()->json(['res' => false, 'message' => $e->getMessage()]);
        }
    }
}
