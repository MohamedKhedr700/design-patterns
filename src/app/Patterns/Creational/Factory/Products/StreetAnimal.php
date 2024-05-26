<?php

namespace App\Patterns\Creational\Factory\Products;

use App\Patterns\Creational\Factory\Products\Contracts\Animal;

class StreetAnimal implements Animal
{
    public function __toString(): string
    {
        return 'This is a street animal';
    }
}
