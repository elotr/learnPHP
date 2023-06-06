<?php
use App\Models\User;

function view($viewName, $variables = []){
    extract($variables);
    require __DIR__ . "/views/$viewName.php";
}

function auth() {
    return User::auth();
}