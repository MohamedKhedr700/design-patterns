<?php

namespace App\Designs\Creational\Factory\Products;

use App\Designs\Creational\Factory\Products\Contracts\Animal;

class HomeAnimal implements Animal
{
    public function run(): string
    {
        return 'Home animal is running';
    }
}
