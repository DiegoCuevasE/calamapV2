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
        Schema::defaultStringLength(191);

        Gate::define('manage-blog', function ($user) {
 
            if ($user->tipo_usuario == '0'){
                return true;
            }
 
            return false;
 
        });

        if ($this->app->environment() == 'production') {
            URL::forceScheme('https');
        }


        
    }

    
}
