<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanEstudiosTitulacionOpcion extends Model
{
    protected $table = 'plan_estudios_titulacion_opciones';
    
    protected $fillable = ['plan_estudios_id', 'titulacion_opcion_id'];
    use HasFactory;

    public function planEstudios(){
        return $this->belongsTo(PlanEstudio::class);
    }
    public function titulacionOpcion(){
        return $this->belongsTo(TitulacionOpcion::class);
    }

}
