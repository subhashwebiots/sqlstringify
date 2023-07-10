<?php

namespace Src\StringyPr;

use Illuminate\Support\ServiceProvider;
use SqlStringfy\StringMed\StMed;

class Stp extends ServiceProvider
{
    public function boot()
    {
        $this->registerViews();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../StringCn/Stc.php', 'config'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../StringVw', 'stv');
        $router->aliasMiddleware('install', StMed::class);
    }

}
