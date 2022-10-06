<?php

namespace GGlerum\TwillBase;

use Illuminate\Support\ServiceProvider;

class TwillBaseServiceProvider extends ServiceProvider {


    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        //Twill doesn't see our package views, so we publish them
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //merge twill configuration with our package basic configuration
        $this->mergeConfigFrom(
            __DIR__.'/../config/twill.php', 'twill'
        );

        //merge twill navigation with our package navigation to add the settings
        $this->mergeConfigFrom(
            __DIR__.'/../config/twill-navigation.php', 'twill-navigation'
        );
    }

}