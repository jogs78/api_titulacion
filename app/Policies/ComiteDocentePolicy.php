<?php

namespace App\Policies;

use App\Models\ComiteDocente;
use App\Models\Usuario;
use Illuminate\Auth\Access\Response;

class ComiteDocentePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Usuario $usuario): bool
    {
        return in_array($usuario->actual_type, ['App\Models\Docente', 'App\Models\Administrativo']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Usuario $usuario, ComiteDocente $comiteDocente): bool
    {
        return in_array($usuario->actual_type, ['App\Models\Docente', 'App\Models\Administrativo']);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Usuario $usuario): bool
    {
        return in_array($usuario->actual_type, ['App\Models\Docente', 'App\Models\Administrativo']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Usuario $usuario, ComiteDocente $comiteDocente): bool
    {
        return in_array($usuario->actual_type, ['App\Models\Docente', 'App\Models\Administrativo']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Usuario $usuario, ComiteDocente $comiteDocente): bool
    {
        return in_array($usuario->actual_type, ['App\Models\Docente', 'App\Models\Administrativo']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Usuario $usuario, ComiteDocente $comiteDocente): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Usuario $usuario, ComiteDocente $comiteDocente): bool
    {
        return false;
    }
}
