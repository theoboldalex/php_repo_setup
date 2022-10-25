<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create(); // Static analysis isn't always perfect with installed libraries

$app->get('/', static function (Request $request, Response $response, $args) {
    $response->getBody()->write(json_encode(['message' => 'Hello']));

    return $response;
});

$app->run();
