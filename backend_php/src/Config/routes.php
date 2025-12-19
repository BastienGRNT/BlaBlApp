<?php

use App\Controllers\ControllerBase;
use Bramus\Router\Router;

/** @var Router $router */

$router->mount('/api/v1', function() use ($router)
{

});


$router->get('/', function() use ($router) {
    (new ControllerBase())->succes("Bienvenues sur l'API BlaBlApp");});

$router->set404(function() {
    (new ControllerBase())->error("Route non trouvée", 404);
});


