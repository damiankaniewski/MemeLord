<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('memes', 'MemeController');
Routing::get('like', 'MemeController');
Routing::get('dislike', 'MemeController');
Routing::get('users', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('addMeme', 'MemeController');
Routing::post('register', 'SecurityController');
Routing::post('search', 'MemeController');

Routing::run($path);