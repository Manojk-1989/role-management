<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class UserRoleBasedRouteProvier extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // No route registration here
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->configureRoutes();
    }

    /**
     * Configure the routes based on the request header.
     */
    protected function configureRoutes(): void
    {
        $this->app->booted(function () {
            $request = request();
            if ($request->header('site') === 'user') {
                Route::prefix('v2')
                    ->middleware('api-user')
                    ->group(base_path('routes/api-user.php'));
            } else {
                Route::prefix('v2')
                    ->middleware('api-admin')
                    ->group(base_path('routes/api-admin.php'));
            }
        });
    }
}
