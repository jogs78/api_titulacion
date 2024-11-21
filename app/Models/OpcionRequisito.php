<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcionRequisito extends Model
{
    protected $fillable = ['opcion_titulacion_id','documento_requerido','descripcion','tipo'];
    use HasFactory;

    public function titulacionOpcion(){
        return $this->belongsTo(TitulacionOpcion::class);
    }

}
