<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanEstudio extends Model
{
    protected $fillable = ['fecha_inicio', 'numero_creditos', 'especialidad_id'];
    use HasFactory;

    public function EspecialidadPlanEstudio()
    {
        return $this->hasMany(EspecialidadPlanEstudio::class);
    }

    public function planEstudiosTitulacionOpcion()
    {
        return $this->hasOne(PlanEstudiosTitulacionOpcion::class, 'plan_estudios_id');
    }

    public function planRequisito()
    {
        return $this->hasMany(PlanRequisito::class, 'plan_estudio_id');
    }
}
