<?php

namespace app\controller;

use app\core\Database;
use app\views\productView;
use app\models\productTypes\Validation;

class ProductController
{
    public static function index()
    {
        $db = new Database();
        ProductView::renderView('list', [
            'products' => $db->getProducts()
        ]);
    }

    public static function create()
    {
        $product = new Validation([]);
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productData = [];
            foreach ($_POST as $key => $value) {
                $productData[$key] = $value;
            }

            $errors = $product->validateData();

            if (!$errors) {
                $db = new Database();
                $db->createProduct($product);
                header('Location: /');
                exit;
            }
        }

        ProductView::renderView('add', [
            'errors' => $errors,
            'product' => $product
        ]);
    }

    public static function delete()
    {
        if ($_POST) {
            $db = new Database();
            foreach ($_POST as $key => $value) {
                $db->deleteProduct($key);
            }
        }
        header('Location: /');
    }

    public static function read()
    {
    }
}
