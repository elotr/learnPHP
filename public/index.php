<?php

if(preg_match('/\.(?:png|jpg|jpeg|gif|css|js|mp4)$/', $_SERVER["REQUEST_URI"])) { //kui fail l6ppeb nii, siis loeb sisse.
    return false;
}

require __DIR__ . '/../vendor/autoload.php'; // composeriga. allpool ilma composerita.   termianlis: composer dump-autoload, muudab json failis route, autoload 2ra.
require __DIR__ . '/../routes.php';
require __DIR__ . '/../helpers.php';

$router = new App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if($match){
    if(is_callable($match['action'])){
        call_user_func($match['action']);
    }
    elseif (is_array($match['action']) && isset($match['action'][0]) && isset($match['action'][1])){
        $className = $match['action'][0];
        $controller = new $className();
        $method = $match['action'][1];
        $controller->$method();
    }
    
}
else {
    view('404');
    http_response_code(404);
}