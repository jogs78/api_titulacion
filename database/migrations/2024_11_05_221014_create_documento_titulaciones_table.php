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
        Schema::create('documento_titulaciones', function (Blueprint $table) {
            $table->id();
            $table->string('ruta');
            $table->enum('validacion', ['pendiente', 'aceptado', 'rechazado'])->default('pendiente'); // pendiente de revizar
            $table->foreignId('opcion_requisito_id')->constrained('opcion_requisitos');
            $table->foreignId('tramite_id')->constrained('tramites');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documento_titulaciones');
    }
};
