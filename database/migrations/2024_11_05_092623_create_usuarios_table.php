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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string("actual_type"); //  de que tipo es 
            $table->unsignedBigInteger("actual_id"); // quien es
            $table->string("nombre_usuario")->unique();
            $table->string("contraseña");
            $table->string("token")->nullable()->default(null);
            $table->bigInteger('expiracion', false, true)->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
