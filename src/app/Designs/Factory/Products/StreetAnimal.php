<?php

namespace App\Designs\Factory\Products;

use App\Designs\Factory\Products\Contracts\Animal;

class StreetAnimal implements Animal
{
    public function run(): string
    {
        return 'Street animal is running';
    }
}
