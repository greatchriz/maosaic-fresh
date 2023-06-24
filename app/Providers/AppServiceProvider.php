<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
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


     public function boot(Guard $auth)
     {
            Schema::defaultStringLength(191);


         // Using Closure based composers...
         View::composer('*', function ($view) use ($auth) {
             $view->with('loggedUser', $auth->user());
         });
     }
}

