<?php

namespace App\Providers;

use App\Contracts\AuthContract;
use App\Contracts\MovieContract;
use App\Services\AuthService;
use App\Services\MovieService;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
{
    $this->app->bind(
        AuthContract::class,
        AuthService::class
    );

    $this->app->bind(
        MovieContract::class,
        MovieService::class
    );
}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
