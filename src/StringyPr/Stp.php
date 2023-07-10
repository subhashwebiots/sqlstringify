<?php

namespace Subhashwebiots\Sqlstringify\StringyPr;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Subhashwebiots\Sqlstringify\StringMed\StMed;
use Subhashwebiots\Sqlstringify\StringMed\StRed;
use Subhashwebiots\Sqlstringify\StringMed\StrSet;
use Subhashwebiots\Sqlstringify\StringMed\StrVer;

class Stp extends ServiceProvider
{
    public function boot()
    {
        $this->registerFiles();
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

        require_once __DIR__.'/../StrHp.php';
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerFiles()
    {
        $this->loadRoutesFrom(__DIR__.'/../StringWe/StrWe.php');
        $this->loadViewsFrom(__DIR__ . '/../StringVw', 'stv');
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('str', StMed::class);
        $router->aliasMiddleware('stBk', StRed::class);
        $router->middlewareGroup('web', [
            StrSet::class,
            StrVer::class,
        ]);
        $this->app->register(StrEn::class);
        $this->app->register(StrAs::class);
    }
}
