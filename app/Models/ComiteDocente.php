<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComiteDocente extends Model
{
    public $protected = ['comite_id', 'docente_id'];

    public function comite()
    {
        return $this->belongsTo(Comite::class, 'comite_id');
    }

    public function docente()
    {
        return $this->belongsTo(Docente::class, 'docente_id');
    }

    use HasFactory;
}
