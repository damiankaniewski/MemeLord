<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('memes', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('addMeme', 'MemeController');

Routing::run($path);