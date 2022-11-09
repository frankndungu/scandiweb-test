<?php

namespace app\controller;

use app\core\Database;
use app\views\productView;

class ProductController
{
    public static function index() {
        $db = new Database();
        ProductView::renderView('list_products', [
            'products' => $db->getProducts()
        ]);
        
    }

    public static function create() {
        ProductView::renderView('add_products', [
        ]); 
    }

    public static function delete() {}

    public static function read() {}
}
