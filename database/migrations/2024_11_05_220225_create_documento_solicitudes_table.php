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
            $table->enum('validacion', ['pendiente', 'aceptado', 'rechazado'])->default('pendiente'); // pendiente de revizar
            $table->foreignId('plan_estudios-id')->constrained('plan_estudios');
            $table->foreignId('egresado_id')->constrained('egresados');
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
