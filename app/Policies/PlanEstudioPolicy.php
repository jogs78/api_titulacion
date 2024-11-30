<?php

namespace App\Policies;

use App\Models\PlanEstudio;
use App\Models\Usuario;
use Illuminate\Auth\Access\Response;

class PlanEstudioPolicy
{
    /**
     * Determine whether the Usuario can view any models.
     */
    public function viewAny(Usuario $usuario): bool
    {
        return true;
    }

    /**
     * Determine whether the Usuario can view the model.
     */
    public function view(Usuario $usuario, PlanEstudio $planEstudio): bool
    {
/*
        if($usuario->carrera == $planEstudio->carrera) return true;
        else return false;
*/
        return true;
    }

    /**
     * Determine whether the Usuario can create models.
     */
    public function create(Usuario $usuario): bool
    {
        if($usuario->actual_type=="App\Models\Administrativo") return true;
        else return false;
    }

    /**
     * Determine whether the Usuario can update the model.
     */
    public function update(Usuario $usuario, PlanEstudio $planEstudio): bool
    {
        if($usuario->actual_type=="App\Models\Administrativo") return true;
        else return false;
        //checar que sea administrativos
        //checar que este activo
        //checar que tenga los permisos
    }

    /**
     * Determine whether the Usuario can delete the model.
     */
    public function delete(Usuario $usuario, PlanEstudio $planEstudio): bool
    {
        //
        if($usuario->actual_type=="App\Models\Administrativo") return true;
        else return false;
    }

    /**
     * Determine whether the Usuario can restore the model.
     */
    public function restore(Usuario $usuario, PlanEstudio $planEstudio): bool
    {
        return false;
    }

    /**
     * Determine whether the Usuario can permanently delete the model.
     */
    public function forceDelete(Usuario $usuario, PlanEstudio $planEstudio): bool
    {
        return false;
    }
}
