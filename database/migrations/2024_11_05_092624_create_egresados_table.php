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
        Schema::create('egresados', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("apellido_paterno");
            $table->string("apellido_materno");
            $table->string("numero_control");
            $table->string("correo");
            $table->string("telefono");
            $table->foreignId("carrera_id")->constrained("carreras");
            $table->foreignId("plan_estudio_id")->constrained("plan_estudios");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egresados');
    }
};
