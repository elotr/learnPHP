<?php

namespace App\Controllers;

class PublicController {
    public function index(){
        $name = 'Nimi';
        view('index', compact('name'));   
    }
    public function about(){
        view('about');   
    }
}