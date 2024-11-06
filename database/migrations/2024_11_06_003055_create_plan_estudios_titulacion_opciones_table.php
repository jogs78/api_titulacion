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
        Schema::create('plan_estudios_titulacion_opciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_estudios_id')->constrained('plan_estudios');
            $table->foreignId('titulacion_opcion_id')->constrained('titulacion_opciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_estudios_titulacion_opciones');
    }
};
