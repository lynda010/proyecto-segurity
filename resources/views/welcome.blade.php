@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('titleContent')
    <h1>📊 Panel Principal</h1>
@endsection

@section('Content')
<div class="container mt-4">
    <div class="row g-4">

        {{--Aspirantes --}}
        <div class="col-md-3">
            <div class="card shadow-sm text-center h-100">
                <div class="card-body">
                    <h5 class="card-title">🧑Aspirantes</h5>
                    <p class="card-text">Administra los aspirantes registrados en el sistema.</p>
                    <a href="{{route ('aspirantes.index')}}" class="btn btn-primary">Ver Aspirantes</a>
                </div>
            </div>
        </div>

        {{-- instructor--}}
        <div class="col-md-3">
            <div class="card shadow-sm text-center h-100">
                <div class="card-body">
                    <h5 class="card-title">🧑‍🏫instructor</h5>
                    <p class="card-text">Consulta instructor </p>
                    <a href="{{route ('instructores.index')}}" class="btn btn-primary">Ver Instructor</a>
                </div>
            </div>
        </div>

        {{-- curso --}}
        <div class="col-md-3">
            <div class="card shadow-sm text-center h-100">
                <div class="card-body">
                    <h5 class="card-title">📚curso</h5>
                    <p class="card-text">Revisa los curso de los usuarios.</p>
                    <a href="{{route ('cursos.index')}}" class="btn btn-primary">Ver Curso</a>
                </div>
            </div>


            
        </div>

    

    </div>
</div>
@endsection