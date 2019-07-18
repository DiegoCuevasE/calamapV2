<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;

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
        //$this->registerPolicies();

        Gate::define('manage-blog', function ($user) {
 
            if ($user->tipo_usuario == '1'){
                return true;
            }
 
            return false;
 
        });

        if ($this->app->environment() == 'production') {
            URL::forceScheme('https');
        }


        Schema::defaultStringLength(191);
    }

    
}
