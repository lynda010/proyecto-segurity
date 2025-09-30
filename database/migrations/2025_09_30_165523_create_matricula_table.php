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
    Schema::create('matricula', function (Blueprint $table){
        $table->id();
        $table->unsignedBigInteger('aspirante_id');
        $table->unsignedBigInteger('curso_id');
        $table->dateTime('fecha_matricula')->useCurrent();
        $table->string('estado')->default('inscrito');
        $table->decimal('nota_final', 5, 2)->nullable();

        $table->foreign('aspirante_id')->references('id')->on('aspirantes');
        $table->foreign('curso_id')->references('id')->on('cursos');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matricula');
    }
};
