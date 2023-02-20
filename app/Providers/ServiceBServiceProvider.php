<?php

namespace App\Providers;

use App\Services\ServiceB;
use Illuminate\Support\ServiceProvider;

class ServiceBServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceB::class, function ($app) {
            return new ServiceB(
                $app->make('serviceA')
            );
        });

        $this->app->alias(ServiceB::class, 'serviceB');
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
