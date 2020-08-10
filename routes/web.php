<?php

use Illuminate\Support\Facades\Route;
use Dsimakov\Sitemap\Controllers\SitemapController;

Route::get('/sitemap.xml', [SitemapController::class, 'index']);


/*function () {
    $value = config('main.menu');
    dd($value);
    return 'package_works1!';
}
*/