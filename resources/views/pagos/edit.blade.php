@extends('layouts.app')

@section('title')
Editar Pago

@endsection

@section('titleContent')
<h1>Editar Pago</h1>
@endsection

@section('Content')
<div class="container">
    <form action="{{ route('pagos.update', $pago->id) }}" method="POST">
        @csrf
        @method('OST')
        <div class="mb-3">
            <label for="monto" class="form-label">Monto</label>
            <input type="number" step="0.01" class="form-control" id="monto" name="monto" value="{{ $pago->monto }}" required>
        </div>
        <div class="mb-3">
            <label for="fecha_pago" class="form-label">Fecha de Pago</label>
            <input type="date" class="form-control" id="fecha_pago" name="fecha_pago" value="{{ $pago->fecha_pago }}" required>
        </div>
        <div class="mb-3">
            <label for="metodo_pago" class="form-label">Método de Pago</label>
            <input type="text" class="form-control" id="metodo_pago" name="metodo_pago" value="{{ $pago->metodo_pago }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection