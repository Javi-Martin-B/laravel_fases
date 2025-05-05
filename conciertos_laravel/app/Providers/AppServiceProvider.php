<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Define la ruta de inicio después de la autenticación.
     */


    /**
     * Mapeo de modelos a políticas.
     *
     * @var array
     */
    protected $policies = [
        // Aquí puedes registrar tus políticas, si tienes
        // User::class => UserPolicy::class,
    ];

    /**
     * Registra los servicios de autenticación y autorización.
     */
    public function boot(): void
    {
        $this->registerPolicies(); // Asegurar que las políticas se registran correctamente.

        Gate::define('is_admin', fn(User $user) => $user->role === 'admin');

        Gate::define('is_owner', fn(User $user) => $user->role === 'owner');
    }
}
