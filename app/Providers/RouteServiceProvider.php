<?php

// namespace App\Providers;

// use Illuminate\Support\ServiceProvider;

// class RouteServiceProvider extends ServiceProvider
// {
//     /**
//      * Register any application services.
//      */
//     public function register(): void
//     {
//         //
//     }

//     /**
//      * Bootstrap any application services.
//      */
// 	public function boot()
// 	{
// 	    Route::pattern('id', '[0-9]+');
// 	}
// }

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    public function boot()
	{
	    // Route::pattern('id', '[0-9]+');
	    // Route::pattern('slug', '[A-Za-z0-9]+');
	}
}
?>