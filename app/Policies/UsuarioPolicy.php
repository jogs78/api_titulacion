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
        return in_array($usuario->actual_type, ['App\Models\Administrativo']);
    }
    /**
     * Determine whether the user can view the model.
     */
    public function view(usuario $usuario, Usuario $model): bool
    {
        return in_array($usuario->actual_type, ['App\Models\Docente', 'App\Models\Administrativo', 'App\Models\Egresado']);
    }
    /**
     * Determine whether the user can create models.
     */
    public function create(usuario $usuario): bool
    {
        return true;
    }
    
    /**
     * Determine whether the user can update the model.
     */
    public function update(usuario $usuario, Usuario $usuario2): bool
    {
        return in_array($usuario->actual_type, ['App\Models\Administrativo']);
    }
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(usuario $usuario, Usuario $usuario2): bool
    {
        return in_array($usuario->actual_type, ['App\Models\Administrativo']);
    }
    /**
     * Determine whether the user can restore the model.
     */
    public function restore(usuario $usuario, Usuario $usuario2): bool
    {
        return false;
    }
    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(usuario $usuario, Usuario $usuario2): bool
    {
        return false;
    }
}
