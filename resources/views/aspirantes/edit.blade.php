@extends('layouts.app')

@section('title')
Editar Aspirantes

@endsection

@section('titleContent')
<h1>Editar Aspirantes</h1>
@endsection

@section('Content')
<div class="container">
    <form action="{{ route('aspirantes.update', $aspirante->id) }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $aspirante->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $aspirante->apellido }}" required>
        </div>
        <div class="mb-3">
            <label for="documento" class="form-label">Documento</label>
            <input type="text" class="form-control" id="documento" name="documento" value="{{ $aspirante->documento }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $aspirante->fecha_nacimiento }}" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $aspirante->telefono }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $aspirante->email }}" required>

<button type="submit" class="btn btn-primary">Guardar</button>
</div>

@endsection