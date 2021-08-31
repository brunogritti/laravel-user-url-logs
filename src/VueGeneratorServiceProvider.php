<?php

namespace Brunogritti\CreateVueCommand;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class VueGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register the package services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                VueMakeCommand::class
            ]);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::mixin(new AuthRouteMethods);
    }
}
