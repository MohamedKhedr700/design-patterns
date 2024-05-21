<?php

namespace App\Designs\Factory\Products;

use App\Designs\Factory\Products\Contracts\Animal;

class HomeAnimal implements Animal
{
    public function run(): string
    {
        return 'Home animal is running';
    }
}
