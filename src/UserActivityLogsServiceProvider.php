<?php

namespace Brunogritti\UserActivityLogs;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserActivityLogsServiceProvider extends ServiceProvider
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
                UserActivityLogsCommand::class
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
