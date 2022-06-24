<?php

namespace Web\App;

use Illuminate\Support\ServiceProvider;

class WebServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes/web.php';
        include __DIR__ . '/routes/api.php';

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        //register the view
        $this->mergeConfigFrom(__DIR__ . '/config/web-app.php', 'web-app');
        $this->publishes([
            __DIR__ . '/config/web-app.php' => config_path('web-app.php'),
            __DIR__ . '/views' => resource_path('views/vendor/web/'),
        ]);



        //register the view
        $this->loadViewsFrom(resource_path('views/vendor/web/'), 'web');
    }

}
