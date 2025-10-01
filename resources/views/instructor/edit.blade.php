@extends('layouts.app')

@section('title')
Editar Instructor

@endsection

@section('titleContent')
<h1>Editar Instructor</h1>
@endsection

@section('Content')
<div class="container">
    <form action="{{ route('instructores.update', $aspirante->id) }}" method="POST">
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
            <label for="telefono" class="form-label">telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $aspirante->telefono }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $aspirante->email }}" required>
        </div>
        <div class="mb-3">
            <label for="especialidad" class="form-label">especialidad</label>
            <input type="text" class="form-control" id="especialidad" name="especialidad" value="{{ $aspirante->especialidad }}" required>
        </div>

<button type="submit" class="btn btn-primary">Guardar</button>
</form>

</div>
@endsection