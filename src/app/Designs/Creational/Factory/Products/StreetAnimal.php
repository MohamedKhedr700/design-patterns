<?php

namespace App\Designs\Creational\Factory\Products;

use App\Designs\Creational\Factory\Products\Contracts\Animal;

class StreetAnimal implements Animal
{
    public function __toString(): string
    {
        return 'This is a street animal';
    }
}
