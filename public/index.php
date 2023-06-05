<?php

// require_once __DIR__ . '../src/Router.php';

require __DIR__ . '/../vendor/autoload.php'; // composeriga. allpool ilma composerita.   termianlis: composer dump-autoload, muudab json failis route, autoload 2ra.
require __DIR__ . '/../routes.php';
require __DIR__ . '/../helpers.php';

$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match){
    if(is_callable($match['action'])){
        call_user_func($match['action']);
    }
    elseif (is_array($match['action']) && isset($match['action'][0]) && isset($match['action'][1])){
        $class = $match['action'][0];
        $controller = new $className();
        $method = $match['action'][1];
        $controller->$method();
    }
    
}
else {
    echo '404';
}