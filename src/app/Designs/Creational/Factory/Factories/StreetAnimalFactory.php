<?php

namespace App\Designs\Creational\Factory\Factories;

use App\Designs\Creational\Factory\Products\Contracts\Animal;
use App\Designs\Creational\Factory\Products\StreetAnimal;

class StreetAnimalFactory extends AnimalFactory
{
    public function getAnimal(): Animal
    {
        return new StreetAnimal();
    }
}
