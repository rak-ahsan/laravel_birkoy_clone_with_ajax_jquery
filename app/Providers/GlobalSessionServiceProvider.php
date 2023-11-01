<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GlobalSessionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        session(['global_key' => 'global_value']);
    }
}
