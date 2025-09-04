<?php

namespace App\Providers;

use App\Models\Profile;
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
        \Carbon\Carbon::setLocale('id');

        View::composer('components.landing-panel.biodata', function ($view){
            $view->with('bio', Profile::first());
        });
    }
}
