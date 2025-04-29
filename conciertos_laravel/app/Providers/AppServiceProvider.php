<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     */
    protected $policies = [
        // Aquí puedes registrar tus políticas, si tienes
        // User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        

        Gate::define('is_admin', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('is_owner', function (User $user) {
            return $user->role === 'owner';
        });
    }
}
