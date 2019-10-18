<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('widget', function ($expression) {
            $name = trim($expression, "'");
            return "<?= resolve('App\Http\Widgets\\{$name}')->loadView(); ?>";
        });
    }
}
