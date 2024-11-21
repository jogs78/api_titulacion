<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = "especialidades";
    protected $fillable = ['nombre'];
    use HasFactory;

    public function planEstudios(){
        return $this->hasMany(PlanEstudio::class, 'especialidad0_id');
    }
}
