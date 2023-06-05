<?php

// var_dump($_SERVER);

// require_once __DIR__ . '../src/Router.php';



require __DIR__ . '/../vendor/autoload.php'; // composeriga. allpool ilma composerita.   termianlis: composer dump-autoload, muudab json failis route, autoload 2ra.
// spl_autoload_register(function($class) {
//     //var_dump($class);
//     $class = substr($class, strlen('App\\')); // ignoreerib nelja esimest t2hte, App\
//     //var_dump($class);
//     require_once __DIR__ . "/../src/$class.php";
// });


//use App\Controllers\PublicController as Controller; // saab pika nime teha lyhikeseks. hea, kui tihti vaja kasutada.

$router = new App\Router($_SERVER['REQUEST_URI']);

// $dog = new App\Dog();
// $controller = new Controller; // App\Controllers\PublicController; <- t2ispikk nimi
//dump($__SERVER); // t6mmatud package symfony var-dumper kasutamine (kui vendor autoload on juba kuskil kasutuses , vt yles required)

// switch($_SERVER['REQUEST_URI']) {
//     case '/':
//         $name = 'Nimi';
//         require 'views/index.php';
//         break;
//     case '/about';
//         require 'views/about.php';
//         break;
//     default:
//         echo '404';
//         break;
// }