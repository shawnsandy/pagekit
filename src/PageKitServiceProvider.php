<?php

namespace ShawnSandy\PageKit;

use Illuminate\Support\ServiceProvider;

class PageKitServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }

        $this->loadViewsFrom(__DIR__.'/resources/views/pagekit', 'page');

        $this->publishes([
          __DIR__.'/resources/views/pagekit' => resource_path('views/vendor/page'),
          __DIR__.'/resources/assets' => resource_path('assets/sass/pagekit'),

      ], 'views');

        $this->publishes([
          __DIR__.'/public/css/pagekit' => public_path('css/pagekit'),
      ], 'public');
    }

    /**
     * Register any package services.
     */
    public function register()
    {
        //
    }
}
