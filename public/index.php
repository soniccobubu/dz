<?php

require __DIR__ . '/../vendor/autoload.php';
session_start();
$db = new \Iplague\Project\Database();

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $homeController = new Iplague\Project\Controllers\HomeController();
    $aboutController = new Iplague\Project\Controllers\AboutController();
    $contactsController = new Iplague\Project\Controllers\ContactsController();
    $footer = new Iplague\Project\Controllers\Footer();
    $catalogueController = new Iplague\Project\Controllers\CatalogueController();
    $loginController = new Iplague\Project\Controllers\LoginController();
    $authMiddleware = new \Iplague\Project\AuthMiddleware();

    $r->addRoute('GET', '/', [$homeController, 'index']);
    $r->addRoute('GET', '/home', [$homeController, 'index']);
    $r->addRoute('GET', '/about', [$aboutController, 'index']);
    $r->addRoute('GET', '/footer', [$footer, 'index']);
    $r->addRoute('GET', '/catalogue', [$catalogueController, 'index']);
    $r->addRoute('POST', '/', [$homeController, 'handleForm']);
    $r->addRoute('GET', '/home/delete', [$homeController, 'handleFormDelete']);
    $r->addRoute('GET', '/login', [$loginController, 'index']);
    $r->addRoute('POST', '/login', [$loginController, 'auth']);
    $r->addRoute('GET', '/logout', function ($vars) {
        session_destroy();
        header('Location: /login');
        exit;
    });
    $r->addRoute('GET', '/contacts', function ($vars) use ($authMiddleware, $contactsController) {
        return $authMiddleware->handle([$contactsController, 'index'], $vars);
    });
    // Remove duplicate POST route
    // $r->addRoute('POST', '/', [$homeController, 'handleForm']);
    // $r->addRoute('GET', '/home/delete', [$homeController, 'handleFormDelete']);
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        header('Location: /');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        header('Location: /');
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // ... call $handler with $vars
        call_user_func($handler, $vars);
        break;
}
