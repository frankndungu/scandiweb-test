<?php

namespace app\models\productTypes;

use app\models\Product;

class Validation extends Product
{
    protected function validateValue()
    {
        return "Product input was invalid please try again";
    }
}
