<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    public $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'cedula_profesional', 'correo', 'profesion'];
    use HasFactory;

    public function jurado()
    {
        return $this->hasMany(Jurado::class, 'docente_id');
    }

    public function comite()
    {
        return $this->hasMany(Comite::class, 'docente_id');
    }
}
