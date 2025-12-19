<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$router = new \Bramus\Router\Router();
$router->setBasePath('/');
require_once __DIR__ . '/../Config/routes.php';
$router->run();


