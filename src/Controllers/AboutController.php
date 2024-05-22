<?php

namespace Iplague\Project\Controllers;

use Iplague\Project\Viewer;

class AboutController
{
    public function index(): void
    {
        $page = 'about';
        $title = 'About Page';
        $content = 'Hello! it`s Page';
        $info ='djjsk';
        $view = new Viewer([
            'page'=> $page,
            'title' => $title,
            'content' => $content,
            'info' => $info
        ]);

        $view->render();
    }
}
