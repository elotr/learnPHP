<?php

use App\Controllers\PostController;
use App\Controllers\PublicController;
use App\Router;

Router::get('/', [PublicController::class, 'index']); // sama mis 'App\Controllers\PublicController'. index - funtsiooni nimi
Router::get('/about', [PublicController::class, 'about']);

Router::get('/admin/posts', [PostController::class, 'index']);
Router::get('/admin/posts/create', [PostController::class, 'create']);
Router::post('/admin/posts', [PostController::class, 'store']);