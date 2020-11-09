<?php

namespace App\Providers;

use App\Http\View\Composers\TestComposer;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        View::share('count' , 5);
//        view()->composer('*' , function ($view){
//            $view->with('count' , 7);
//        });
        view()->composer('layouts.master' , TestComposer::class);
        //
    }
}
