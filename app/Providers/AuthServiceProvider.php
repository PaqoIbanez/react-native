<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];
    
    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        JWTAuth::factory()->setTTL(60 * 24 * 7);
    }
}
