<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
    protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'numero_control', 'correo', 'telefono', 'carrera_id','plan_estudio_id'];
    use HasFactory;

    public function tramite(){
        return $this->hasOne(Tramite::class, 'egresado_id');
    }

    public function carrera(){
        return $this->belongsTo(Carrera::class, 'carrera_id');
    }

    public function planEstudio(){
        return $this->belongsTo(PlanEstudio::class, 'plan_estudio_id');
    }
}
