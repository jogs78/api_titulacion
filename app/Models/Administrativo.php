<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    protected $fillable = ['nombre', 'apellido_paterno','apellido_materno', 'correo','puesto'];
    use HasFactory;

}
