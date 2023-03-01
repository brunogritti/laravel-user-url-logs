<?php

namespace Brunogritti\UserUrlLogs;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserUrlLogsServiceProvider extends ServiceProvider
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
                UserUrlLogsCommand::class
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
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
