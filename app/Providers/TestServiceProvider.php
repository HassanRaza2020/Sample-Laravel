<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
    

        $this->app->singleton('test', function ($app) {
            return "Hey Lisa";
        });

      
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
