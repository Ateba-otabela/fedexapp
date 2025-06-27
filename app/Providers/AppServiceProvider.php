<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate:: define('admin_access', function($user){
             return $user->user_type == 1;
        });

        Gate:: define('show_auth', function($user){
            return $user;
        });
    }
}
