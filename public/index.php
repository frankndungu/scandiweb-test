<?php

require_once __DIR__ . './../vendor/autoload.php';

use app\core\Router;
use app\controller\ProductController;
use app\core\Database;

$router = new Router($database);
$database = new Database();

$router->get('/', [ProductController::class, 'index']);
$router->get('/addproduct', [ProductController::class, 'create']);
$router->post('/addproduct', [ProductController::class, 'create']);
$router->post('/delete-product', [ProductController::class, 'delete']);

$router->get('/api/read-product', [ProductController::class, 'read']);

$router->resolve();


