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
    Schema::create('certificado', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('matricula_id')->unique();
        $table->unsignedBigInteger('aspirante_id');
        $table->unsignedBigInteger('curso_id');
        $table->unsignedBigInteger('pago_id')->nullable();

        $table->string('numero_certificado')->unique();
        $table->string('nombre_estudiante');
        $table->string('documento');
        $table->string('lugar');
        $table->date('fecha_inicio');
        $table->date('fecha_fin');
        $table->integer('duracion_horas');
        $table->string('responsable_general')->nullable();
        $table->string('responsable_academico')->nullable();
        $table->dateTime('fecha_emision')->useCurrent();
        $table->text('descripcion')->nullable();
        $table->timestamps();

        // Relaciones
        $table->foreign('matricula_id')->references('id')->on('matriculas')->onDelete('cascade');
        $table->foreign('aspirante_id')->references('id')->on('aspirantes')->onDelete('cascade');
        $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
        $table->foreign('pago_id')->references('id')->on('pagos')->onDelete('set null');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificado');
    }
};
