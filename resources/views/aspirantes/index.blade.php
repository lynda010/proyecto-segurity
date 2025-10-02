@extends('layouts.app')

@section('title')
Administrar Aspirantes
@endsection

@section('titleContent')
    <h1>Administrar Aspirantes</h1>
@endsection

@section('Content')
<div class="container">
    <a href="{{ route('aspirantes.create') }}" class="btn btn-primary mb-3">Crear Nuevo Aspirante</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Fecha de Nacimiento</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aspirantes as $aspirante)
            <tr>
                <td>{{ $aspirante->id }}</td>
                <td>{{ $aspirante->nombre }}</td>
                <td>{{ $aspirante->apellido }}</td>
                <td>{{ $aspirante->documento }}</td>
                <td>{{ $aspirante->fecha_nacimiento }}</td>
                <td>{{ $aspirante->telefono }}</td>
                <td>{{ $aspirante->email }}</td>
                <td>
                    <a href="{{ route('aspirantes.edit', $aspirante->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('aspirantes.destroy', $aspirante->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este aspirante?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $aspirantes->links() }}

    <!-- Botón Volver -->
    <a href="{{ route('welcome') }}" class="btn btn-secondary mt-3">⬅ Volver</a>
</div>
@endsection
