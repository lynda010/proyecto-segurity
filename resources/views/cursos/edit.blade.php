@extends('layouts.app')

@section('title')
Editar Curso

@endsection

@section('titleContent')
<h1>Editar Curso</h1>
@endsection

@section('Content')
<div class="container">
    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $curso->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $curso->descripcion }}</textarea>
        </div>
        <div class="mb-3">
            <label for="duracion" class="form-label">Duración (en horas)</label>
            <input type="number" class="form-control" id="duracion" name="duracion" value="{{ $curso->duracion }}" required>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $curso->precio }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

</div>

@endsection