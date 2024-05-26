<?php

namespace App\Patterns\Creational\AbstractFactory\Products;

use App\Patterns\Creational\AbstractFactory\Products\Contracts\Cat;

class HomeCat implements Cat
{
    public function __toString(): string
    {
        return 'This is a home cat';
    }
}
