<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BaseRepoProvider extends ServiceProvider
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
        $this->app->bind('user', function () {
            return;
        });
    }
}
