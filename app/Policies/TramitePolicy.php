<?php

namespace App\Policies;

use App\Models\Tramite;
use App\Models\Usuario;
use Illuminate\Auth\Access\Response;
use Illuminate\support\Facades\Log;
use PhpParser\Node\Stmt\Echo_;

class TramitePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Usuario $usuario): bool
    {

        ob_start();
        var_dump(in_array($usuario->actual_type, ['App\Models\Egresado', 'App\Models\Administrativo']));
        var_dump($usuario->nombre_usuario);
        $result = ob_get_clean();

        Log::channel('debug')->info('Usuario Autorizado '.$result);

        return in_array($usuario->actual_type, ['App\Models\Egresado', 'App\Models\Administrativo']);


    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Usuario $usuario, Tramite $tramite): bool
    {
        return in_array($usuario->actual_type, ['App\Models\Egresado', 'App\Models\Administrativo']);
        

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Usuario $usuario): bool
    {
        return in_array($usuario->actual_type, ['App\Models\Egresado', 'App\Models\Administrativo']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Usuario $usuario, Tramite $tramite): bool
    {
         return $usuario->actual_type == "App\Models\Administrativo";
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Usuario $usuario, Tramite $tramite): bool
    {
        if($usuario->actual_type=="App\Models\Administrativo") return true;
        else return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Usuario $usuario, Tramite $tramite): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Usuario $usuario, Tramite $tramite): bool
    {
        return false;
    }
}
