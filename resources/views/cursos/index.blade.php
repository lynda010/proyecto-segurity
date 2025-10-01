@extends('layouts.app')

@section('title')
Administrar Curso
        
@endsection

@section('titleContent')
        <h1>Administrar Curso</h1>
@endsection

@section('Content')
<div class="container">
    <a href="{{ route('cursos.create') }}" class="btn btn-primary mb-3">Crear Nuevo Curso</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Duración (horas)</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->nombre }}</td>
                <td>{{ $curso->descripcion }}</td>
                <td>{{ $curso->duracion }}</td>
                <td>{{ $curso->precio }}</td>
                <td>
                    <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este curso?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $cursos->links() }}

</div>

@endsection