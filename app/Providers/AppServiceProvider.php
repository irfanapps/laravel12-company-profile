<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::defaultView('vendor.pagination.tailwind'); // Gunakan view custom
        Paginator::defaultSimpleView('vendor.pagination.simple-tailwind');

        // Atau gunakan view default dengan modifikasi
        Paginator::useTailwind();
    }
}
