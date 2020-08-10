<?php

namespace Dsimakov\Sitemap\Controllers;

use App\Models\Film;
use Illuminate\Support\Facades\View;

class SitemapController extends \Illuminate\Routing\Controller
{
    public function index()
    {
        //получаем модели из конфигурации;
        $arModels = config('main.models');
        //$film = $arModels['film_model'];
        //dd($film::all());
        $arItems = [];
        foreach ($arModels as $model) {
            $allDataModel = $model::all();
            foreach ($allDataModel as $dataModel) {
                $arItems[] = ["slug"=>$dataModel->slug,
                "updated_at"=>$dataModel->updated_at ];
            }
        }
        View::share([
            'items' => $arItems,
        ]);
        return response()
            ->view('DsimakovSitemap::index', $arItems, 200)
            ->header('Content-Type', 'xml');
    }
}