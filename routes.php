<?php

use APP\Controllers\AuthController;
use App\Controllers\PostController;
use App\Controllers\PublicController;
use App\Router;

Router::get('/', [PublicController::class, 'index']); // sama mis 'App\Controllers\PublicController'. index - funtsiooni nimi
Router::get('/about', [PublicController::class, 'about']);

Router::get('/admin/posts', [PostController::class, 'index']);
Router::get('/admin/posts/create', [PostController::class, 'create']);
Router::post('/admin/posts', [PostController::class, 'store']);
Router::get('/admin/posts/show', [PostController::class, 'show']);
Router::get('/admin/posts/edit', [PostController::class, 'edit']);
Router::post('/admin/posts/edit', [PostController::class, 'update']);
Router::get('/admin/posts/delete', [PostController::class, 'destroy']);

Router::get('/login', [AuthController::class, 'loginForm']);
Router::post('/login', [AuthController::class, 'login']);
Router::get('/register', [AuthController::class, 'registerForm']);
Router::post('/register', [AuthController::class, 'register']);