@extends('layouts.app')

@section('title')
Administrar Instructor
        
@endsection

@section('titleContent')
        <h1>Administrar Instructor</h1>
@endsection

@section('Content')
<div class="container">
    <a href="{{ route('instructores.create') }}" class="btn btn-primary mb-3">Crear Instructor</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Especialidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instructores as $instructor)
            <tr>
                <td>{{ $instructor->id }}</td>
                <td>{{ $instructor->nombre }}</td>
                <td>{{ $instructor->apellido }}</td>
                <td>{{ $instructor->documento }}</td>
                <td>{{ $instructor->telefono }}</td>
                <td>{{ $instructor->email }}</td>
                <td>{{ $instructor->especialidad }}</td>
                <td>
                    <a href="{{ route('instructores.edit', $instructor->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('instructores.destroy', $instructor->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este instructor?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $instructores->links() }}
</div>
@endsection