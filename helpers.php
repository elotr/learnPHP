<?php

function view($viewName, $variables = []){
    extract($variables);
    require __DIR__ . "/views/$viewName.php";
}