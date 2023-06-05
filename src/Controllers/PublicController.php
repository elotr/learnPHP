<?php

namespace App\Controllers;

use App\Models\Post;


class PublicController {
    public function index(){

        $result = Post::all();
        dd($result); // dump() die() koos
        $name = 'Nimi';
        view('index', compact('name'));   
    }
    public function about(){
        view('about');   
    }
}