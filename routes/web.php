<?php

use App\Http\Controllers\aspiranteController;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\generalController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\PagoController;
use App\Models\pago;
use Illuminate\Support\Facades\Route;


Route::get('/',[generalController::class,'index'])->name('general.index');
Route::get('/welcome',[generalController::class,'welcome'])->name('welcome');


//rutas aspirantes
Route::get('/aspirantes/index',[AspiranteController::class,'index'])->name('aspirantes.index');
Route::get('/aspirantes/create',[AspiranteController::class,'create'])->name('aspirantes.create');
Route::post('/aspirantes/store',[AspiranteController::class,'store'])->name('aspirantes.store');
Route::get('/aspirantes/edit/{id}',[AspiranteController::class,'edit'])->name('aspirantes.edit');
Route::post('/aspirantes/update/{id}',[AspiranteController::class,'update'])->name('aspirantes.update');
Route::post('/aspirantes/destroy/{id}',[AspiranteController::class,'destroy'])->name('aspirantes.destroy');

//rutas instructor
// CRUD Instructores
Route::get('/instructores', [InstructorController::class, 'index'])->name('instructores.index');
Route::get('/instructores/create', [InstructorController::class, 'create'])->name('instructores.create');
Route::post('/instructores/store', [InstructorController::class, 'store'])->name('instructores.store');
Route::get('/instructores/{id}/edit', [InstructorController::class, 'edit'])->name('instructores.edit');
Route::post('/instructores/{id}/update', [InstructorController::class, 'update'])->name('instructores.update');
Route::post('/instructores/{id}/destroy', [InstructorController::class, 'destroy'])->name('instructores.destroy');

//rutas curso
Route::get('/cursos/index',[cursoController::class,'index'])->name('cursos.index');
Route::get('/cursos/create',[cursoController::class,'create'])->name('cursos.create');
Route::post('/cursos/store',[cursoController::class,'store'])->name('cursos.store');
Route::get('/cursos/edit/{id}',[cursoController::class,'edit'])->name('cursos.edit');
Route::post('/cursos/update/{id}',[cursoController::class,'update'])->name('cursos.update');
Route::post('/cursos/destroy/{id}',[cursoController::class,'destroy'])->name('cursos.destroy');

//ruta matricula
Route::get('/matriculas/index',[MatriculaController::class,'index'])->name('matriculas.index');
Route::get('/matriculas/create',[MatriculaController::class,'create'])->name('matriculas.create');
Route::post('/matriculas/store',[MatriculaController::class,'store'])->name('matriculas.store');
Route::get('/matriculas/edit/{id}',[MatriculaController::class,'edit'])->name('matriculas.edit');
Route::post('/matriculas/update/{id}',[MatriculaController::class,'update'])->name('matriculas.update');
Route::post('/matriculas/destroy/{id}',[MatriculaController::class,'destroy'])->name('matriculas.destroy');

//ruta pago
Route::get('/pagos/index',[PagoController::class,'index'])->name('pagos.index');
Route::get('/pagos/create',[PagoController::class,'create'])->name('pagos.create');
Route::post('/pagos/store',[PagoController::class,'store'])->name('pagos.store');
Route::get('/pagos/edit/{id}',[PagoController::class,'edit'])->name('pagos.edit');
Route::post('/pagos/update/{id}',[PagoController::class,'update'])->name('pagos.update');
Route::post('/pagos/destroy/{id}',[PagoController::class,'destroy'])->name('pagos.destroy');