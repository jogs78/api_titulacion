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
        Schema::create('opcion_requisitos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opcion_titulacion_id')->constrained('titulacion_opciones');
            $table->string('documento_requerido');
            $table->string('descripcion');
            $table->enum('tipo', ['PDF', 'imagen', 'Fotografia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opcion_requisitos');
    }
};
