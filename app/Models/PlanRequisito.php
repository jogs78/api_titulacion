<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanRequisito extends Model
{
    protected $fillable = ['plan_estudios_id', 'Docuemnto_requerido', 'descripcion', 'tipo'];
    use HasFactory;

    public function planEstudio()
    {
        return $this->belongsTo(PlanEstudio::class);
    }
}
