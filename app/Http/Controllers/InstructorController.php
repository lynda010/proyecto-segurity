<?php

namespace App\Http\Controllers;

use App\Models\instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructores = instructor::all();
        return view('instructor.index', compact('instructor'));
    }


    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'documento' => 'required|string|max:20|unique:instructor,documento',
            'telefono' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255|unique:instructor,email',
            'especialidad' => 'nullable|string|max:255',
        ]);

        instructor::create($request->all());

        return redirect()->route('instructores.index')->with('success', 'Instructor creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(instructor $instructor)
    {
        return view('instructor.show',compact('instructor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $instructor = instructor::findOrFail($id);
        return view('instructor.edit', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, instructor $instructor)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'documento' => 'required|string|max:20|unique:instructor,documento,'.$instructor->id,
            'telefono' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255|unique:instructor,email,'.$instructor->id,
            'especialidad' => 'nullable|string|max:255',
        ]);

        $instructor->update($request->all());

        return redirect()->route('instructores.index')->with('success', 'Instructor actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(instructor $instructor)
    {
        
    }
}
