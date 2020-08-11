<?php

namespace Dsimakov\Sitemap\Sitemap;

use Dsimakov\Sitemap\Sitemap\Contracts\GenerateSitemapInterface;

class GenerateSitemap implements GenerateSitemapInterface
{
    public function generate(): array
    {
        $arModels = config('main.models');
        $arItems = [];
        foreach ($arModels as $model) {
            $allDataModel = $model::all();
            foreach ($allDataModel as $dataModel) {
                //подставляем название модели в урл
                $nameModel = mb_strtolower(class_basename($dataModel));
                $arItems[] = ["slug"=>$nameModel.'/'.$dataModel->slug,
                "updated_at"=>$dataModel->updated_at ];
            }
        }
        return $arItems;
    }
}