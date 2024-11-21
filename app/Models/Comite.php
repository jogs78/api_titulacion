<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    protected $fillable = ['docente_id', 'plan_estudios_id', 'cargo'];
    use HasFactory;

    Public function comite()
    {
    return $this->belongsTo(Comite::class, 'comite_id');
    }

    public function tramite()
    {
        return $this->hasMany(Tramite::class, 'comite_id');
    }
}
