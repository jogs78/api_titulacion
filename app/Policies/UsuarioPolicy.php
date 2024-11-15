<?php

namespace App\Policies;
use App\Models\Usuario;

use Illuminate\Auth\Access\Response;
class UsuarioPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(usuario $usuario): bool
    {
        //
    }
    /**
     * Determine whether the user can view the model.
     */
    public function view(usuario $usuario, Usuario $model): bool
    {
        //
    }
    /**
     * Determine whether the user can create models.
     */
    public function create(usuario $usuario): bool
    {
        //
    }
    /**
     * Determine whether the user can update the model.
     */
    public function update(usuario $usuario, Usuario $usuario2): bool
    {
        //
    }
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(usuario $usuario, Usuario $usuario2): bool
    {
        //
    }
    /**
     * Determine whether the user can restore the model.
     */
    public function restore(usuario $usuario, Usuario $usuario2): bool
    {
        //
    }
    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(usuario $usuario, Usuario $usuario2): bool
    {
        //
    }
}