<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitulacionOpcion extends Model
{
    protected $table = 'titulacion_opciones';
    protected $fillable = ['nombre', 'descripcion', 'tiempo_maximo'];
    use HasFactory;

    public function planEstudiosTitulacionOpcion()
    {
        return $this->hasMany(PlanEstudiosTitulacionOpcion::class, 'plan_estudios_id');
    }

}
