<?php

namespace App;

class Router {

    static $routes = [];
    private $uri;
    public function __construct($uri) {
        $this->uri = $uri;
    }

    public function match() {
        foreach(self::$routes as $route) {
            if($route['path'] === $this->uri) {
                return $route;
            }
        }
        return false;
    }

    static function addROute($path, $action) {
        self::$routes[] = ['path' => $path, 'action' => $action];  // self - staatiline viide iseendale. this - viitab objecti kontekstis, dpnaamilistele parameetritele. 
    }

}