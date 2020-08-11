<?php

namespace Dsimakov\Sitemap\Controllers;

use App\Models\Film;
use Illuminate\Support\Facades\View;
use Dsimakov\Sitemap\Sitemap\Contracts\GenerateSitemapInterface;

class SitemapController extends \Illuminate\Routing\Controller
{
    public function index(GenerateSitemapInterface $generateSitemap)
    {
        $arItems = $generateSitemap->generate();
        
        View::share([
            'items' => $arItems,
        ]);
        return response()
            ->view('DsimakovSitemap::index', $arItems, 200)
            ->header('Content-Type', 'xml');
    }
}