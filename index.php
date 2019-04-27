<?php
require 'vendor/autoload.php';

$app = new Slim\App();
$app->get('/', function ($request, $response) {
    $name = $request->getQueryParams()['name'] ?? 'World';
    return $response->getBody()->write("Hello, $name!");
});
$app->run();
