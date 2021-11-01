<?php
require_once 'Router.php';
require_once 'clController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('clean', 'GET', 'clController', 'getAll');
$router->addRoute('clean/:insert', 'POST', 'clController', 'insertInto');
$router->addRoute('clean/:update/:id', 'PUT', 'clController', 'updateCl');
$router->addRoute('clean/:delete/:id', 'DELETE', 'clController', 'deleteCl');

// rutea
$router->route($_GET["cleaning"], $_SERVER['REQUEST_METHOD']);