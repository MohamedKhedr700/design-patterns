<?php

namespace App\Designs\Creational\Factory\Products;

use App\Designs\Creational\Factory\Products\Contracts\Animal;

class StreetAnimal implements Animal
{
    public function run(): string
    {
        return 'Street animal is running';
    }
}
