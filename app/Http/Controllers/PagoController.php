<?php

namespace App\Http\Controllers;

use App\Models\pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagos = pago::all();
        return view('pago.index', compact('pago'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pago.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricula_id' => 'required|exists:matriculas,id',
            'monto' => 'required|numeric',
            'fecha_pago' => 'required|date',
            'metodo_pago' => 'required|string|max:50',
        ]);

        pago::create($request->all());

        return redirect()->route('pagos.index')
                        ->with('success', 'Pago registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pago.show', compact('pago'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pagos = pago::findorFail($id);
        return view('pago.edit', compact('pago'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'matricula_id' => 'required|exists:matriculas,id',
            'monto' => 'required|numeric',
            'fecha_pago' => 'required|date',
            'metodo_pago' => 'required|string|max:50',
        ]);

        $pagos = pago::findorFail($id);
        $pagos->update($request->all());

        return redirect()->route('pagos.index')
                        ->with('success', 'Pago actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
