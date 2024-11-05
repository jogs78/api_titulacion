<?php

namespace App\Policies;

use App\Models\OpcionRequisito;
use App\Models\Usuario;
use Illuminate\Auth\Access\Response;

class OpcionRequisitoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Usuario $usuario): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Usuario $usuario, OpcionRequisito $opcionRequisito): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Usuario $usuario): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Usuario $usuario, OpcionRequisito $opcionRequisito): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Usuario $usuario, OpcionRequisito $opcionRequisito): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Usuario $usuario, OpcionRequisito $opcionRequisito): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Usuario $usuario, OpcionRequisito $opcionRequisito): bool
    {
        //
    }
}
