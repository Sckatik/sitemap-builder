<?php
return [
    // указать полный путь откуда брать данные
    // для построения карты сайта
    // в Вашем приложений
    'models' => [
        App\Models\Film::get(),
        App\Models\Page::get()
    ]
];