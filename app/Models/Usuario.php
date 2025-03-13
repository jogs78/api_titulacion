<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios';
    protected $fillable = ['actual_type', 'actual_id', 'nombre_usuario', 'contraseña', 'token', 'expiracion'];
    use HasFactory;
    public function actual(){
        return $this->morphTo();
    }



}
