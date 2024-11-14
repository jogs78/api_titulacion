<?php
namespace App\Policies;
use App\Models\Especialidad;
use App\Models\Usuario;
use Illuminate\Auth\Access\Response;
class EspecialidadPolicy
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
    public function view(Usuario $usuario, Especilidad $especilidad): bool
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
    public function update(Usuario $usuario, Especialidad $especilidad): bool
    {
        //
    }
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Usuario $usuario, Especilidad $especilidad): bool
    {
        //
    }
    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Usuario $usuario, Especialidad $especilidad): bool
    {
        //
    }
    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Usuario $usuario, Especialidad $especilidad): bool
    {
        //
    }
}