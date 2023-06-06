<?php

namespace App;

class Router {

    static $routes = [];
    private $uri;
    private $method;
    public function __construct($uri, $method) {
        $this->uri = parse_url($uri, PHP_URL_PATH);
        $this->method = $method;
    }

    public function match() {
        foreach(self::$routes as $route) {
            if($route['path'] === $this->uri && $route['method'] === $this->method) {
                return $route;
            }
        }
        return false;
    }

    static function addRoute($method, $path, $action) {
        self::$routes[] = ['method' => $method, 'path' => $path, 'action' => $action];  // self - staatiline viide iseendale. this - viitab objecti kontekstis, dpnaamilistele parameetritele. 
    }

    static function get($path, $action) {
        self::addRoute('GET', $path, $action);
    }

    static function post($path, $action) {
        self::addRoute('POST', $path, $action);
    }

}