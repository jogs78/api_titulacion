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
        Schema::create('validacion_solicitudes', function (Blueprint $table) {
            $table->id();
            $table->String('ruta');
            $table->enum('validacion', ['pendiente', 'aceptado', 'rechazado']);
            $table->foreignId('documento_solicitud_id')->constrained('documento_solicitudes');
            $table->foreignId('egresado_id')->constrained('egresados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validacion_solicitudes');
    }
};
