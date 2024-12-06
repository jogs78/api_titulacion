<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoSolicitud extends Model
{
    use HasFactory;
    protected $table = 'documento_solicitudes';

    public function planEstudios()
    {
        return $this->belongsTo(PlanEstudio::class, 'plan_estudios_id');
    }

    public function egresado()
    {
        return $this->belongsTo(Egresado::class, 'egresado_id');
    }
    
}
