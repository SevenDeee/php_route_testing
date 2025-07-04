<?php

function dd($value)
{

    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function navActive($uri, $activeClass, $inactiveClass)
{
    $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $class = ($currentPath == $uri) ? $activeClass : $inactiveClass;

    return 'href="' . $uri . '" class="' . $class . '"';
}

function title($title)
{
    return (isset($title)) ? $title : 'Document';
}

function route($uri, $controller)
{
    if ($_SERVER['REQUEST_URI'] == $uri) {
        require './controllers/' . $controller . '.php';
        die();
    } else {
        echo '404 Not Founds';
        http_response_code(404);
        die();
    }
}
