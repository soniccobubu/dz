<?php

namespace Iplague\Project\Controllers;
use Iplague\Project\Viewer;

class CatalogueController
{

    public function index(): void
    {
        $page = 'catalogue';
        $title = 'Fruits at the market';
        $array_fruits = ['banana','apple','strawberry'];
        //$image = './image.png';
        $view = new Viewer([
            'page' => $page,
            'title' => $title,
            //'image' => $image,
            'array_fruits' => $array_fruits
        ]);
        echo $view->render();
    }
}