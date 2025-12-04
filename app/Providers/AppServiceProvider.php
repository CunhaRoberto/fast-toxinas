<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

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
        Schema::defaultStringLength(191);

        RateLimiter::for('login-attempts', function (Request $request) {
            return Limit::perMinute(5)
            ->by($request->user()?->id ?: $request->ip())
            ->response(function(Request $request, array $headers){
                return back()->withInput()->with('status', 'Limite de tentativas atingido, tente novamente após 1 minuto!');
            });
        });
    }
}
