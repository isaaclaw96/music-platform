<?php

namespace App\Providers;

use App\Services\ServiceA;
use Illuminate\Support\ServiceProvider;

class ServiceAServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceA::class, function ($app) {
            return new ServiceA();
        });

        $this->app->alias(ServiceA::class, 'serviceA');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
