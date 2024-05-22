<?php

namespace Iplague\Project;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Viewer
{
    private array $data = [];
    public function __construct(array $data=[]){
    $this->data = [...$data];
    }

    public function render(): void
    {

        $loader = new FilesystemLoader(__DIR__.'/../views');
        $twig = new Environment($loader, [
            'cache' => __DIR__.'/../views/cache',
        ]);

        echo $twig->render('index.twig', $this->data);
    }
    //private array $data = [];
    //public function __construct(array $data=[]){
       // $this->data = [...$data];
    //}
    //public function render(): void
    //{
        //$loader = new FilesystemLoader(__DIR__.'/../views');
       // $twig = new Environment($loader, [
           // 'cache' => __DIR__.'/../views/cache',
        //]);

        //$twig->render('index.twig', $this->data);
        //$latte = new Twig\Engine;
       // extract($this->data);
        //ob_start();
       // include('../views/index.twig');
       // return ob_get_clean();
        //$latte->setTempDirectory(__DIR__.'/../views/cache');
        //
        //$params = $this->data;
        //$latte->render(__DIR__ . '/../views/index.twig', $params);

}