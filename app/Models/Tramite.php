<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    protected $fillable = ['egresado_id', 'titulacion_opciones_id', 'nombre_proyecto', 'liberacion', 'status', 'paso', 'observaciones', 'observaciones', 'pago', 'comite_id', 'acto_id'];
    use HasFactory;

    public function egresado()
    {
        return $this->belongsTo(Egresado::class);
    }

        public function titulacionOpciones() {
            return $this->belongsTo(TitulacionOpcion::class, 'titulacion_opciones_id');
        }

        public function comite() {
            return $this->belongsTo(Comite::class, 'comite_id');
        }

        public function acto() {
            return $this->belongsTo(Acto::class, 'acto_id');
        }

        
}
