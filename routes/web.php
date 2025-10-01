<?php

use App\Http\Controllers\aspiranteController;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//rutas aspirantes
Route::get('/aspirantes/index',[aspiranteController::class,'index'])->name('aspirantes.index');
Route::get('/aspirantes/create',[aspiranteController::class,'create'])->name('aspirantes.create');
Route::post('/aspirantes/store',[aspiranteController::class,'store'])->name('aspirantes.store');
Route::get('/aspirantes/edit/{id}',[aspiranteController::class,'edit'])->name('aspirantes.edit');
Route::post('/aspirantes/update/{id}',[aspiranteController::class,'update'])->name('aspirantes.update');
Route::post('/aspirantes/destroy/{id}',[aspiranteController::class,'destroy'])->name('aspirantes.destroy');

//rutas instructor
Route::get('/instructores/index',[InstructorController::class,'index'])->name('instructores.index');
Route::get('/instructores/create',[InstructorController::class,'create'])->name('instructores.create');
Route::post('/instructores/store',[InstructorController::class,'store'])->name('instructores.store');
Route::get('/instructores/edit/{id}',[InstructorController::class,'edit'])->name('instructores.edit');
Route::post('/instructores/update/{id}',[InstructorController::class,'update'])->name('instructores.update');
Route::post('/instructores/destroy/{id}',[InstructorController::class,'destroy'])->name('instructores.destroy');

//rutas curso
Route::get('/cursos/index',[cursoController::class,'index'])->name('cursos.index');
Route::get('/cursos/create',[cursoController::class,'create'])->name('cursos.create');
Route::post('/cursos/store',[cursoController::class,'store'])->name('cursos.store');
Route::get('/cursos/edit/{id}',[cursoController::class,'edit'])->name('cursos.edit');
Route::post('/cursos/update/{id}',[cursoController::class,'update'])->name('cursos.update');
Route::post('/cursos/destroy/{id}',[cursoController::class,'destroy'])->name('cursos.destroy');