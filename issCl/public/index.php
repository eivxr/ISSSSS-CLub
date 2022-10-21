<?php

require_once __DIR__ .'/../includes/app.php';

use Controllers\cotizar;
use MVC\Router;
$router = new Router();

//cotizar
$router->get('/',[cotizar::class, 'cotiza']);


$router->comprobarRutas();