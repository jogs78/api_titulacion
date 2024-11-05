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
        Schema::create('titulacion_opciones', function (Blueprint $table) {
            $table->id();
            $table->string('descriopcion');
            $table->string('docuemtacion');
            $table->foreignId('plan_estudios_id')->constrained('plan_estudios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titulacion_opciones');
    }
};
