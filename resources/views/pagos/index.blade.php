@extends('layouts.app')

@section('title')
Administrar Pagos
        
@endsection

@section('titleContent')
        <h1>Administrar Pagos</h1>
@endsection

@section('Content')
<div class="container">
    <a href="{{route('pagos.create') }}" class="btn btn-primary mb-3">Crear Nuevo Pago</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Monto</th>
                <th>Fecha de Pago</th>
                <th>Método de Pago</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pagos as $pago)
            <tr>
                <td>{{ $pago->id }}</td>
                <td>{{ $pago->monto }}</td>
                <td>{{ $pago->fecha_pago }}</td>
                <td>{{ $pago->metodo_pago }}</td>
                <td>
                    <a href="{{ route('pagos.edit', $pago->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este pago?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        {{ $pagos->links() }}

    </table>



</div>
@endsection