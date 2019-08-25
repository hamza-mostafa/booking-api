<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiZeroOneRoutes();

        $this->mapApiZeroTwoRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api v-0.1" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiZeroOneRoutes()
    {
        Route::prefix('api-v-0.1')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api-v-0.1.php'));
    }

    /**
     * Define the "api v-0.2" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiZeroTwoRoutes()
    {
        Route::prefix('api-v-0.2')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api-v-0.2.php'));
    }
}
