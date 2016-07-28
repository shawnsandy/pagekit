<?php

namespace ShawnSandy\PageKit;

use Illuminate\Support\ServiceProvider;

class PageKitServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'page');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/page'),
            __DIR__.'/resources/assets' => resource_path('assets/pagekit'),
        ]);

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
