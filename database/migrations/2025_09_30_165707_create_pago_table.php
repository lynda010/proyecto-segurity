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
    Schema::create('pago', function (Blueprint $table){
        $table->id();
        $table->unsignedBigInteger('matricula_id');
        $table->decimal('monto', 10, 2);
        $table->dateTime('fecha_pago')->useCurrent();
        $table->string('metodo_pago')->nullable();
        $table->string('referencia')->nullable();
        $table->string('estado_pago')->default('completado');

        $table->foreign('matricula_id')->references('id')->on('matriculas')->onDelete('cascade');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};
