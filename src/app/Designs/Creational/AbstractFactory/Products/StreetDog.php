<?php

namespace App\Designs\Creational\AbstractFactory\Products;

use App\Designs\Creational\AbstractFactory\Products\Contracts\Dog;

class StreetDog implements Dog
{
    public function __toString(): string
    {
        return 'This is a street dog';
    }
}
