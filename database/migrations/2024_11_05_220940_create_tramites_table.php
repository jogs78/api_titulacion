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
            $table->enum('status',['iniciado','rechazado','pendiente']); #verificar que colocar en status del tramite (que puntos del tramite hay)
            $table->enum('estado',['iniciado','rechazado','pendiente']);
            $table->string('observaciones');
            $table->enum('pago',['aceptado','pendiente']);
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
