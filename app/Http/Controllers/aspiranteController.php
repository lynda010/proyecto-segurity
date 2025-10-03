<?php

namespace App\Http\Controllers;

use App\Models\Aspirante;
use Illuminate\Http\Request;

class AspiranteController extends Controller
{
    // Mostrar todos los aspirantes
    public function index()
    {
        $aspirantes = Aspirante::all();
        return view('aspirantes.index', compact('aspirantes'));
    }

    // Formulario para crear
    public function create()
    {
        return view('aspirantes.create');
    }

    // Guardar un nuevo aspirante
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'documento' => 'required|string|unique:aspirantes,documento',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|unique:aspirantes,email',
        ]);

        Aspirante::create($request->all());

        return redirect()->route('aspirantes.index')->with('success', 'Aspirante creado correctamente.');
    }

    // Formulario para editar
    public function edit($id)
    {
        $aspirante = Aspirante::findOrFail($id);
        return view('aspirantes.edit', compact('aspirante'));
    }

    // Actualizar aspirante
    public function update(Request $request, $id)
    {
        $aspirante = Aspirante::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'documento' => 'required|string|unique:aspirantes,documento,' . $id,
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|unique:aspirantes,email,' . $id,
        ]);

        $aspirante->update($request->all());

        return redirect()->route('aspirantes.index')->with('success', 'Aspirante actualizado correctamente.');
    }

    // Eliminar aspirante
    public function destroy($id)
    {
        $aspirante = Aspirante::findOrFail($id);
        $aspirante->delete();

        return redirect()->route('aspirantes.index')->with('success', 'Aspirante eliminado correctamente.');
    }
}
