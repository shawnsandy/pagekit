<?php

namespace ShawnSandy\PageKit;

use Illuminate\Support\ServiceProvider;


class PageKitServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return null
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/routes.php';
        }

        $this->loadViewsFrom(__DIR__ . '/resources/views/pagekit', 'page');

        $this->publishes(
            [__DIR__ . '/resources/views/pagekit' => resource_path('views/vendor/page'),
                __DIR__ . '/resources/assets' => resource_path('assets/sass/pagekit')],
            'views'
        );

        $this->publishes(
            [__DIR__ . '/public/css/pagekit' => public_path('css/pagekit'),
                __DIR__ . '/public/vendor' => public_path('vendor')], 'public'
        );

        $this->publishes(
            [__DIR__ . '/public/icons/entypo' => public_path('icons/entypo'),
                __DIR__ . '/public/icons/social' => public_path('icons/social')],
            'icons'
        );

        $this->publishes(
            [__DIR__ . '/public/icons/material' => public_path('icons/material')],
            'material_icons'
        );

        $this->publishes(
            [__DIR__ . '/config/pagekit.php' => config_path('pagekit.php')],
            'config'
        );

    }


    /**
     * Register any package services.
     *
     * @return null
     */
    public function register()
    {
        //
    }


}
