<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Gate;
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
    }
}
