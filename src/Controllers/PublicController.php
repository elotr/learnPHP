<?php

namespace App\Controllers;

use App\Models\Post;


class PublicController {
    public function index(){

        $posts = Post::all();
        view('index', compact('posts'));   
    }
    public function about(){
        view('about');   
    }
}