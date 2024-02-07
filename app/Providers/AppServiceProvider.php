<?php

namespace App\Providers;

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
        // 強制的にhttps(保護された通信)にする→CSS反映、「保護されていない通信」が出なくなる
        if (\App::environment(['production']) || \App::environment(['develop']))
        {
            \URL::forceScheme('https');
        }
    }
}
