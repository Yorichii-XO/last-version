<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-all-gerants', function ($user) {
            return $user->role === 'super-admin' ||$user->role === 'admin' ;
        });
        
        Gate::define('ajouter-gerant', function ($user) {
            return $user->role === 'admin' || $user->role === 'super-admin';
        });
        
        Gate::define('show-gerant', function ($gerant) {
            return $gerant->role === 'gérant';
        });
        
        Gate::define('show-associe', function ($associe) {
            return $associe->role === 'associé';
        });
        
        
        Gate::define('show-societe', function ($societe) {
            return $societe->role === 'gérant' && $societe->role === 'associé';
        });
        
        Gate::define('show', function ($user) {
            return $user->role === 'gérant' || $user->role === 'associé';
        });
        
}}
