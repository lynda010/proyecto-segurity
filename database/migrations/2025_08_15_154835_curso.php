<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('cursos', function (Blueprint $table){
        $table->id();
        $table->string('codigo')->unique();
        $table->string('nombre');
        $table->text('descripcion')->nullable();
        $table->integer('duracion_horas');
        $table->decimal('precio', 10, 2);
        $table->date('fecha_inicio')->nullable();
        $table->date('fecha_fin')->nullable();
        $table->unsignedBigInteger('instructor_id');
        $table->foreign('instructor_id')->references('id')->on('instructores');
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
