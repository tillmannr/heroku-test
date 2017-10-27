<?php

require "vendor/autoload.php";

$app = new Silex\Application();

$app->get('/', function() use($app) {
    return 'Hello World';
});

$app->run();