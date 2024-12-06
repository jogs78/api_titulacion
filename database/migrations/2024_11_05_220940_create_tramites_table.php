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
        Schema::create('tramites', function (Blueprint $table) {
            $table->id();
            $table->foreignID('egresado_id')->constrained('Egresados');
            $table->foreignId('titulacion_opciones_id')->constrained('titulacion_opciones');
            $table->string('nombre_proyecto');
            $table->enum('liberacion',['aceptado','rechazado','pendiente'])->default('pendiente'); #Si el proyecto es aceptado o rechazado
            $table->enum('status',['iniciado','rechazado','pendiente'])->default('iniciado'); #Si el tramite es aceptado o rechazado
            $table->enum('paso',['iniciado','rechazado','pendiente'])->default('iniciado'); #verificar que colocar (que puntos del tramite hay)
            $table->string('observaciones')->default('pendiente');
            $table->enum('pago',['aceptado','pendiente'])->default('pendiente');
            $table->foreignId('comite_id')->nullable()->constrained('comites')->default('null');
            $table->foreignId('acto_id')->nullable()->constrained('actos')->default('null');
            #$table->foreignId('jurado_id')->constrained('jurados');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tramites');
    }
};
