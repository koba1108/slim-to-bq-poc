<?php
require 'vendor/autoload.php';

# [START gae_slim_front_controller]
$app = new Slim\App();
$app->get('/', function ($request, $response) {
    // Use the Null Coalesce Operator in PHP7
    // http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce
    $name = $request->getQueryParams()['name'] ?? 'World';
    return $response->getBody()->write("Hello, $name!");
});
$app->run();
