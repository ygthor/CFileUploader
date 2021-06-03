<?php

namespace Caritech\CarilaraFileUpload;

use Illuminate\Support\ServiceProvider;

class CarilaraFileUploadServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app->bind('carilara-file-upload', function ($app) {
            return new CarilaraFileUpload();
        });
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'carilara-file-upload');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'carilara-file-upload');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('carilara-file-upload.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/carilara-file-upload'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/carilara-file-upload'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/carilara-file-upload'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'carilara-file-upload');

        // Register the main class to use with the facade
        $this->app->singleton('carilara-file-upload', function () {
            return new CarilaraFileUpload;
        });
    }
}
