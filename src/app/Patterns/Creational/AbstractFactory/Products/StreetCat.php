<?php

namespace App\Patterns\Creational\AbstractFactory\Products;

use App\Patterns\Creational\AbstractFactory\Products\Contracts\Cat;

class StreetCat implements Cat
{
    public function __toString(): string
    {
        return 'This is a street cat';
    }
}
