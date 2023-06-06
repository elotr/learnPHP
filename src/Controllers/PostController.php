<?php

namespace App\Controllers;

use App\Models\Post;


class PostController {
    public function index(){

        $posts = Post::all();
        view('posts/index', compact('posts'));   
    }

    public function create() {
        view('posts/create');
    }

    public function store() {
        //dump($_GET);
        //dump($_POST);
        //dump($_REQUEST); // get ja post korraga n2ha. pole turvaline. 
        //dump($_SERVER);

        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
    }
}