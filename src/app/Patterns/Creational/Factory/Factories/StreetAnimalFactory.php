<?php

namespace App\Patterns\Creational\Factory\Factories;

use App\Patterns\Creational\Factory\Products\Contracts\Animal;
use App\Patterns\Creational\Factory\Products\StreetAnimal;

class StreetAnimalFactory extends AnimalFactory
{
    public function getAnimal(): Animal
    {
        return new StreetAnimal();
    }
}
