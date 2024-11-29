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
        Schema::create('comite_docentes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comite_id')->constrained('comites');
            $table->foreignId('docente_id')->constrained('docentes');
            $table->enum('cargo', ['asesor', 'revisor'])->default('asesor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comite_docentes');
    }
};
