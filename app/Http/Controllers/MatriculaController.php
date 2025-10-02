<?php

namespace App\Http\Controllers;

use App\Models\matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matriculas = matricula::all();
        return view('matricula.index', compact('matricula'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matricula.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'aspirante_id' => 'required|exists:aspirantes,id',
            'curso_id' => 'required|exists:cursos,id',
            'fecha_matricula' => 'required|date',
            'estado' => 'required|string|max:50',
        ]);

        matricula::create($request->all());

        return redirect()->route('matriculas.index')
                        ->with('success', 'Matrícula creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('matricula.show', compact('matricula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $matriculas = matricula::findorFail($id);
        return view('matricula.edit', compact('matricula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,matricula $matricula, string $id)
    {
        $request->validate([
            'aspirante_id' => 'required|exists:aspirantes,id',
            'curso_id' => 'required|exists:cursos,id',
            'fecha_matricula' => 'required|date',
            'estado' => 'required|string|max:50',
        ]);
        $matriculas = matricula::findorFail($id);
        $matriculas->update($request->all());

        return redirect()->route('matriculas.index')
                        ->with('success', 'Matrícula actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(matricula $matricula,string $id)
    {
        $matriculas = matricula::findorFail($id);
        $matriculas->delete();
        return redirect()->route('matriculas.index')
                        ->with('success', 'Matrícula eliminada exitosamente.');
    }
}
