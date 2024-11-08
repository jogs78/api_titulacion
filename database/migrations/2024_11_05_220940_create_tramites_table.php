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
            $table->string('nombre');
            $table->enum('liberacion',['aceptado','rechazado','pendiente']);
            $table->enum('status',['iniciado','rechazado','pendiente']); #Si el tramite es aceptado o rechazado
            $table->enum('paso',['iniciado','rechazado','pendiente']); #verificar que colocar (que puntos del tramite hay)
            $table->string('observaciones');
            $table->enum('pago',['aceptado','pendiente']);
            $table->foreignID('egresado_id')->constrained('Egresados');
            $table->foreignId('comite_id')->constrained('comites');
            $table->foreignId('acto_id')->constrained('actos');
            $table->foreignId('titulacion_opciones-id')->constrained('titulacion_opciones');
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
