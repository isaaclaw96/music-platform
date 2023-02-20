<?php

namespace App\Providers;

use App\Services\ServiceC;
use Illuminate\Support\ServiceProvider;

class ServiceCServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceC::class, function ($app) {
            return new ServiceC(
                $app->make('serviceA')
            );
        });

        $this->app->alias(ServiceC::class, 'serviceC');
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
