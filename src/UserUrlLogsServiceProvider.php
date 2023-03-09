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
        app('router')->aliasMiddleware('log-user-url', \Brunogritti\UserUrlLogs\Middleware\LogURL::class);
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
