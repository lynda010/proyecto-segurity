<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index()
    {
        $instructores = Instructor::all();
        return view('instructor.index', compact('instructores'));
    }

    public function create()
    {
        return view('instructor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'documento' => 'required|string|max:20|unique:instructores,documento',
            'telefono' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255|unique:instructores,email',
            'especialidad' => 'nullable|string|max:255',
        ]);

        Instructor::create($request->all());

        return redirect()->route('instructores.index')
            ->with('success', 'Instructor creado exitosamente.');
    }

    public function show($id)
    {
        $instructor = Instructor::findOrFail($id);
        return view('instructor.show', compact('instructor'));
    }

    public function edit($id)
    {
        $instructor = Instructor::findOrFail($id);
        return view('instructor.edit', compact('instructor'));
    }

    public function update(Request $request, $id)
    {
        $instructor = Instructor::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'documento' => 'required|string|max:20|unique:instructores,documento,' . $id,
            'telefono' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255|unique:instructores,email,' . $id,
            'especialidad' => 'nullable|string|max:255',
        ]);

        $instructor->update($request->all());

        return redirect()->route('instructores.index')
            ->with('success', 'Instructor actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $instructor = Instructor::findOrFail($id);
        $instructor->delete();

        return redirect()->route('instructores.index')
            ->with('success', 'Instructor eliminado exitosamente.');
    }
}
