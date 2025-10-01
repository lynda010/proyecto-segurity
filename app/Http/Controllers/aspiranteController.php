<?php

namespace App\Http\Controllers;

use App\Models\aspirante;
use Illuminate\Http\Request;

class aspiranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aspirantes = aspirante::paginate(10); // 10 registros por página

        return view('aspirantes.index', compact('aspirantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aspirantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'documento' => 'required|string|max:20|unique:aspirante,documento',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255|unique:aspirante,email',
        ]);

        aspirante::create($request->all());

        return redirect()->route('aspirantes.index')->with('success', 'Aspirante creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('aspirantes.show',compact('aspirante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aspirante = aspirante::findOrFail($id);
        return view('aspirantes.edit', compact('aspirante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'documento' => 'required|string|max:20|unique:aspirante,documento,' . $id,
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255|unique:aspirante,email,' . $id,
        ]);

        $aspirante = aspirante::findOrFail($id);
        $aspirante->update($request->all());

        return redirect()->route('aspirantes.index')->with('success', 'Aspirante actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aspirante = aspirante::findOrFail($id);
        $aspirante->delete();

        return redirect()->route('aspirantes.index')->with('success', 'Aspirante eliminado exitosamente.');
    }
}
