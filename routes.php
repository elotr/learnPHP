<?php

use App\Controllers\PublicController;
use App\Router;

Router::addRoute('/', [PublicController::class, 'index']); // sama mis 'App\Controllers\PublicController'. index - funtsiooni nimi
Router::addRoute('/about', [PublicController::class, 'about']);