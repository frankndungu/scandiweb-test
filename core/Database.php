<?php

namespace app\core;

use PDO;

class Database
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=products_server', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getProducts()
    {
        $statement = $this->pdo->prepare('SELECT * FROM products ORDER BY sku');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
