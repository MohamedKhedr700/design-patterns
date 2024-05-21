<?php

namespace App\Designs\Factory\Factories;

use App\Designs\Factory\Products\Contracts\Animal;
use App\Designs\Factory\Products\HomeCat;

class HomeAnimalFactory extends AnimalFactory
{
    public function getAnimal(): Animal
    {
        return new HomeCat();
    }
}
