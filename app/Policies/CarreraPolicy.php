<?php

namespace App\Policies;

use App\Models\Carrera;
use App\Models\Usuario;
use Illuminate\Auth\Access\Response;

class CarreraPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Usuario $usuario): bool
    {
        return in_array($usuario->actual_type, [ 'App\Models\Administrativo', 'App\Models\Egresado', 'App\Models\Docente' ]);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Usuario $usuario, Carrera $carrera): bool
    {
        return in_array($usuario->actual_type, [ 'App\Models\Administrativo', 'App\Models\Egresado', 'App\Models\Docente' ]);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Usuario $usuario): bool
    {
        return in_array($usuario->actual_type, [ 'App\Models\Administrativo']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Usuario $usuario, Carrera $carrera): bool
    {
        return in_array($usuario->actual_type, [ 'App\Models\Administrativo']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Usuario $usuario, Carrera $carrera): bool
    {
        return in_array($usuario->actual_type, [ 'App\Models\Administrativo']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Usuario $usuario, Carrera $carrera): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Usuario $usuario, Carrera $carrera): bool
    {
        return false;
    }
}
