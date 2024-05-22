<?php

namespace Iplague\Project\Controllers;
use Iplague\Project\Viewer;
class Footer
{
    public function index(): void
    {
        $page = 'footer';
        $title = 'License';
        $info = 'There is no license actually.';


        $view = new Viewer([
            'page'=> $page,
            'title' => $title,
            'info' => $info,

        ]);

        echo $view->render();

    }
}