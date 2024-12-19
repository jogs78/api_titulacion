<?php

namespace App\Providers;

use App\Models\PlanEstudio;
use App\Policies\PlanEstudioPolicy;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\PlanEstudio' => 'App\Policies\PlanEstudioPolicy',
        'App\Models\Tramite' => 'App\Policies\TramitePolicy',
        'App\Models\Usuario' => 'App\Policies\UsuarioPolicy',
        'App\Models\Acto' => 'App\Policies\ActoPolicy',
        'App\Models\ActoDocente' => 'App\Policies\ActoDocentePolicy',
        'App\Models\Comite' => 'App\Policies\ComitePolicy',
        'App\Models\ComiteDocente' => 'App\Policies\ComiteDocentePolicy',
        'APP\Models\Administrativo' => 'App\Policies\AdministrativoPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        //
    }
}
