<?php

namespace Dsimakov\Sitemap;

use Dsimakov\Sitemap\Sitemap\GenerateSitemap;
use Dsimakov\Sitemap\Sitemap\Contracts\GenerateSitemapInterface;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->bind(GenerateSitemapInterface::class, GenerateSitemap::class);
    }
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views/', 'DsimakovSitemap');
        $this->publishes([
            __DIR__.'/../config/main.php' => config_path('main.php'),
        ]);
    }
}