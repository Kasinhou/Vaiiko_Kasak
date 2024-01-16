<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //zdielanie dat s navbarom
        View::composer('navbar', function ($view) {
            $view->with('cousines', \App\Models\Cousine::all());
        });
    }
}
