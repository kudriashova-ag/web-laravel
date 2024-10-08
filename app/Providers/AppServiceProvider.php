<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::directive('admin', function ($expression) {
            return "<?php if(auth()->check() && auth()->user()->role === 'admin'): ?>";
        });

        Blade::directive('endadmin', function ($expression) {
            return "<?php endif; ?>";
        });

        View::share('categoriesShare', \App\Models\Category::all());

    }
}
