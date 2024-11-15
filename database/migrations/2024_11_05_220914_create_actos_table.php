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
        Schema::create('actos', function (Blueprint $table) {
            $table->id();
            #$table->foreignId('jurado_id')->constrained('jurados');
            $table->enum('modalidad', ['virtual','Presencial']);
            $table->date('fecha');
            $table->time('hora');
            $table->string('lugar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actos');
    }
};
