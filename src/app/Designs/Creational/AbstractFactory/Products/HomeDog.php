<?php

namespace App\Designs\Creational\AbstractFactory\Products;

use App\Designs\Creational\AbstractFactory\Products\Contracts\Dog;

class HomeDog implements Dog
{
    public function __toString(): string
    {
        return 'This is a home dog';
    }
}
