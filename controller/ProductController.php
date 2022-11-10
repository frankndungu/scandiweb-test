<?php

namespace app\controller;

use app\core\Database;
use app\views\productView;
use app\models\productTypes\Validation;

class ProductController
{
    public static function index() {
        $db = new Database();
        ProductView::renderView('list_products', [
            'products' => $db->getProducts()
        ]);   
    }

    public static function create() {
        $product = new Validation([]);
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productData = [];
            foreach ($_POST as $key => $val) {
                $productData[$key] = $val;
            }

            $prodType = "app\\models\productTypes\\" . $_POST['type'];
            if (class_exists($prodType)) {
                $product = new $prodType($productData);
            } else {
                $product = new Validation($productData);
            }

            $errors = $product->validateData();

            if (!$errors) {
                $db = new Database();
                $db->createProduct($product);
                header('Location: /');
                exit;
            }

        }

        ProductView::renderView('add_products', [
            'errors' => $errors,
            'product' => $product
        ]); 
    }

    public static function delete() {}

    public static function read() {}
}
