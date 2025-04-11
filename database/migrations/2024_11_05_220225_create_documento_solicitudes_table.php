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
        Schema::create('documento_solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('ruta');
            $table->string('nombre');
            $table->enum('validacion', ['pendiente', 'aceptado', 'rechazado'])->default('pendiente');
            $table->foreignId('plan_estudios_id')->constrained('plan_estudios');
            $table->foreignId('egresado_id')->constrained('egresados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documento_solicitudes');
    }
};
