<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ItemModelServiceProvider extends ServiceProvider
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
        //
        \App\Item::observe(\App\Observers\ItemObserver::class);
    }
}
