<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new \Bramus\Router\Router();
$router->setBasePath('/');
require_once __DIR__ . '/../Config/routes.php';
$router->run();