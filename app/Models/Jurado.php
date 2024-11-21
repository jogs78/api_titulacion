<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurado extends Model
{
    protected $fillable = ['acto_id','docente_id','sinodal'];

    public function acto(){
        return $this->belongsTo(Acto::class);
    }

    public function docente(){
        return $this->belongsTo(Docente::class);
    }

   /* public function tramite(){
        return $this->hasOne(Tramite::class,'jurado_id');
    }
    use HasFactory;
    */
}
