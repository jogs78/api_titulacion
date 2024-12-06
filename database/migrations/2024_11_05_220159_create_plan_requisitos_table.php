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
        Schema::create('plan_requisitos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_estudio_id')->constrained('plan_estudios');
            $table->string('documento_requerido');
            $table->text('descripcion');
            $table->enum('tipo', ['PDF', 'imagen', 'Fotografia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_requisitos');
    }
};
