<?php
namespace App\Policies;
use App\Models\Egresado;
use App\Models\Usuario;
use Illuminate\Auth\Access\Response;
class EgresadoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Usuario $usuario): bool
    {
        return in_array($usuario->actual_type, ['App\Models\Administrativo']);
    }
    /**
     * Determine whether the user can view the model.
     */
    public function view(Usuario $usuario, Egresado $egresado): bool
    {
        $usuario = auth()->user();
            if (($usuario->actual_type === 'App\Models\Egresado') && ($usuario->actual_id === $egresado->id)) {
                return true;
            }
            // Check if the user is an administrador
            if ($usuario->actual_type === 'App\Models\Administrativo') {
                return true;
            }
            return false;

    }
    /**
     * Determine whether the user can create models.
     */
    public function create(Usuario $usuario): bool
    {
        return in_array($usuario->actual_type, ['App\Models\Administrativo', 'App\Models\Eegresado']);
    }
    /**
     * Determine whether the user can update the model.
     */
    public function update(Usuario $usuario, Egresado $egresado): bool
    {
        $usuario = auth()->user();
        if (($usuario->actual_type === 'App\Models\Egresado') && ($usuario->actual_id === $egresado->id)) {
            return true;
        }
        // Check if the user is an administrador
        if ($usuario->actual_type === 'App\Models\Administrativo') {
            return true;
        }
        return false;
    }
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Usuario $usuario, Egresado $egresado): bool
    {
        return in_array($usuario->actual_type, ['App\Models\Administrativo',]);
    }
    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Usuario $usuario, Egresado $egresado): bool
    {
        return false;
    }
    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Usuario $usuario, Egresado $egresado): bool
    {
        return false;
    }
}
