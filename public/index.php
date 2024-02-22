<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\src\Application;

$app = new Application();


$app->router->get('/', function() {
        return 'home page';
});

$app->router->get('/contact', function() {
        return 'contact page';
});

$app->run();