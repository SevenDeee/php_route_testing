<?php

// route('/', 'index.controller');
// route('/about', 'about.controller');
// route('/about', 'about.controller');

if ($_SERVER['REQUEST_URI'] == '/') {
    require './controllers/index.controller.php';
} elseif ($_SERVER['REQUEST_URI'] == '/about') {
    require './controllers/about.controller.php';
} elseif ($_SERVER['REQUEST_URI'] == '/contact') {
    require './controllers/contact.controller.php';
} else {
    echo '404 Not Found';
    http_response_code(404);
    die();
}
