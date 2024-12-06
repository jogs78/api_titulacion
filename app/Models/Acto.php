<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Acto extends Model
{
    protected $fillable = ['Modalidad', 'fecha', 'hora', 'lugar'];
    use HasFactory;


    public function actoDocente()
    {
        return $this->hasMany(ActoDocente::class, 'acto_id');
    }

    public function tramite ()
    {
        return $this->hasOne(Tramite::class, 'acto_id');
    }


}
