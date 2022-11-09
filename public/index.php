<?php

require_once __DIR__ . './../vendor/autoload.php';

use app\core\Router;
use app\controller\ProductController;

$router = new Router();

$router->get('/', [ProductController::class, 'index']);
$router->get('/addproduct', [ProductController::class, 'create']);
$router->post('/addproduct', [ProductController::class, 'create']);
$router->post('/delete-product', [ProductController::class, 'delete']);

$router->get('/api/read-product', [ProductController::class, 'read']);

$router->resolve();


