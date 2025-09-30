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
    Schema::create('certificado', function (Blueprint $table){
        $table->id();
        $table->unsignedBigInteger('matricula_id')->unique();
        $table->string('numero_certificado')->unique();
        $table->dateTime('fecha_emision')->useCurrent();
        $table->text('descripcion')->nullable();
        $table->string('ruta_archivo')->nullable();

        $table->foreign('matricula_id')->references('id')->on('matriculas')->onDelete('cascade');
        $table->timestamps();
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
