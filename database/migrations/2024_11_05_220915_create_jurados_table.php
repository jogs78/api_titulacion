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
        Schema::create('jurados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acto_id')->constrained('actos');
            $table->foreignId('docente_id')->constrained('docentes');
            $table->enum('sinodal',['presidente','secretario','Suplente']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurados');
    }
};
