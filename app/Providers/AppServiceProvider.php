<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Managers\ApiManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         $this->app->singleton('QuotesApi', function ($app) {
            return new ApiManager($app);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
