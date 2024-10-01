<?php

namespace App\Http\Controllers;

use App\Models\informe;
use Illuminate\Http\Request;

class InformesController extends Controller
{
    public function index()
    {
        $informes = informe::all();
        return view('informes.show')->with(['informes' => $informes]);
    }

    public function create()
    {
        return view('informes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_visita' => 'required',
            'id_usuario' => 'required',
            'fecha_informe' => 'required|date',
            'contenido' => 'required'
        ]);

        try {
            informe::create($data);
            return redirect('/informes/show')->with('success', 'Informe creado con éxito');
        } catch (\Exception $e) {
            return redirect('/informes/create')->with('error', 'Error al crear informe: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $informe = informe::findOrFail($id);
        return view('informes.showDetail')->with(['informe' => $informe]);
    }

    public function edit($id)
    {
        $informe = informe::findOrFail($id);
        return view('informes.update', ['informe' => $informe]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'id_visita' => 'required',
            'id_usuario' => 'required',
            'fecha_informe' => 'required|date',
            'contenido' => 'required'
        ]);

        $informe = informe::findOrFail($id);
        $informe->update($data);
        return redirect('/informes/show')->with('success', 'Informe actualizado con éxito');
    }

    public function destroy($id)
    {
        try {
            informe::destroy($id);
            return response()->json(['res' => true]);
        } catch (\Exception $e) {
            return response()->json(['res' => false, 'message' => $e->getMessage()]);
        }
    }
}
