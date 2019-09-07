<?php

namespace Random\Hash;


use Illuminate\Support\ServiceProvider;

class HashServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Register Our Package routes
        include __DIR__.'/routes.php';

        // Let Laravel Ioc Container know about our Controller
        $this->app->make('Random\Hash\HashController');

    }
}
