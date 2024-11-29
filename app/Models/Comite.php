<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    protected $fillable = ['plan_estudios_id'];
    use HasFactory;

    public function planEstudios()
    {
        return $this->belongsTo(PlanEstudio::class, 'plan_estudios_id');
    }

    public function tramite()
    {
        return $this->hasMany(Tramite::class, 'comite_id');
    }
}
