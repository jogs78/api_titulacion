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
        Schema::create('administrativos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("apellido_paterno");
            $table->string("apellido_materno");
            $table->string("cedula_profesional");
            $table->string("correo");
            $table->string("profesion");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrativos');
    }
};
