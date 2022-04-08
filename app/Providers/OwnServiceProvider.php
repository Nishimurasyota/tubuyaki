<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class OwnServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind("myName",function(){
            return "syota";
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
