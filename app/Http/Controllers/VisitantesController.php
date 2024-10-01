<?php

namespace App\Http\Controllers;

use App\Models\Visitantes;
use Illuminate\Http\Request;

class VisitantesController extends Controller
{
    public function index()
    {
        $visitantes = Visitantes::all(); 
        return view('visitantes.show')->with(['visitantes' => $visitantes]); 
    }

    public function create()
    {
        return view('visitantes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'documento_id' => 'required',
            'telefono' => 'nullable',
            'correo' => 'nullable|email'
        ]);

        try {
            Visitantes::create($data);
            return redirect('/visitantes/show')->with('success', 'Visitante creado con éxito');
        } catch (\Exception $e) {
            return redirect('/visitantes/create')->with('error', 'Error al crear Visitantes: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $visitante = Visitantes::findOrFail($id);
        return view('visitantes.showDetail')->with(['visitante' => $visitante]);
    }

    public function edit($id)
    {
        $visitante = Visitantes::findOrFail($id);
        return view('visitantes.update', ['visitante' => $visitante]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'documento_id' => 'required',
            'telefono' => 'nullable',
            'correo' => 'nullable|email'
        ]);

        $visitante = Visitantes::findOrFail($id);
        $visitante->update($data);
        return redirect('/visitantes/show')->with('success', 'Visitante actualizado con éxito');
    }

    public function destroy($id)
    {
        try {
            Visitantes::destroy($id);
            return response()->json(['res' => true]);
        } catch (\Exception $e) {
            return response()->json(['res' => false, 'message' => $e->getMessage()]);
        }
    }
}
