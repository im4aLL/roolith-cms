<?php
use App\Core\RouterFactory;
use Roolith\Configuration\Config;

$router = RouterFactory::getInstance();

try {
    $router->setBaseUrl(Config::get('baseUrl'));
    $router->setViewDir(APP_VIEW_ROOT);
} catch (\Roolith\Configuration\Exception\InvalidArgumentException $e) {
    echo $e->getMessage();
}

$router->get('/', \App\Controllers\WelcomeController::class . '@index');

return $router;
