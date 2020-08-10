<?php

namespace Dsimakov\Sitemap;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views/', 'DsimakovSitemap');
        $this->publishes([
            __DIR__.'/../config/main.php' => config_path('main.php'),
        ]);
    }
}