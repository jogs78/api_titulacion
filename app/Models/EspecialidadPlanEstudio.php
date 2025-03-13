<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspecialidadPlanEstudio extends Model
{
    protected $table = 'especialidad_plan_estudios';
    use HasFactory;

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }

    public function planEstudio()
    {
        return $this->belongsTo(PlanEstudio::class);
    }
}
