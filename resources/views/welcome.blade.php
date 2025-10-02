@extends('layouts.app')

@section('title')
Dashboard
@endsection

@section('titleContent')
<h1 class="text-center my-4 fw-bold">
    <img src="{{ asset('images/logoseguridad.jpeg') }}" alt="" width="60" class="me-2">
    SECURITY ACADEMY
</h1>

<p class="text-muted text-center">Accede rápidamente a los módulos principales del sistema</p>
@endsection

@section('Content')
<div class="container mt-4">
    <div class="row g-4 justify-content-center">

        {{-- Aspirantes --}}
        <div class="col-md-3">
            <div class="card shadow-lg border-0 h-100">
                <div class="card-body text-center">
                    <div class="mb-3 fs-1">🧑</div>
                    <h5 class="card-title fw-bold">Aspirantes</h5>
                    <p class="card-text text-muted">Administra los aspirantes registrados en el sistema.</p>
                    <a href="{{ route('aspirantes.index') }}" class="btn btn-outline-primary rounded-pill px-4">Ver Aspirantes</a>
                </div>
            </div>
        </div>

        {{-- Instructores --}}
        <div class="col-md-3">
            <div class="card shadow-lg border-0 h-100">
                <div class="card-body text-center">
                    <div class="mb-3 fs-1">🧑‍🏫</div>
                    <h5 class="card-title fw-bold">Instructores</h5>
                    <p class="card-text text-muted">Consulta los instructores disponibles.</p>
                    <a href="{{ route('instructores.index') }}" class="btn btn-outline-success rounded-pill px-4">Ver Instructores</a>
                </div>
            </div>
        </div>

        {{-- Cursos --}}
        <div class="col-md-3">
            <div class="card shadow-lg border-0 h-100">
                <div class="card-body text-center">
                    <div class="mb-3 fs-1">📚</div>
                    <h5 class="card-title fw-bold">Cursos</h5>
                    <p class="card-text text-muted">Revisa los cursos de los usuarios.</p>
                    <a href="{{ route('cursos.index') }}" class="btn btn-outline-warning rounded-pill px-4">Ver Cursos</a>
                </div>
            </div>
        </div>

        {{-- Matrículas --}}
        <div class="col-md-3">
            <div class="card shadow-lg border-0 h-100">
                <div class="card-body text-center">
                    <div class="mb-3 fs-1">📝</div>
                    <h5 class="card-title fw-bold">Matrículas</h5>
                    <p class="card-text text-muted">Revisa los usuarios matriculados.</p>
                    <a href="{{ route('matriculas.index') }}" class="btn btn-outline-info rounded-pill px-4">Ver Matrículas</a>
                </div>
            </div>
        </div>

        {{-- Pagos --}}
        <div class="col-md-3">
            <div class="card shadow-lg border-0 h-100">
                <div class="card-body text-center">
                    <div class="mb-3 fs-1">💰</div>
                    <h5 class="card-title fw-bold">Pagos</h5>
                    <p class="card-text text-muted">Revisa los pagos realizados.</p>
                    <a href="{{ route('pagos.index') }}" class="btn btn-outline-danger rounded-pill px-4">Ver Pagos</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection