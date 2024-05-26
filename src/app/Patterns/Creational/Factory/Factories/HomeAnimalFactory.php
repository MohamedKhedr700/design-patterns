<?php

namespace App\Patterns\Creational\Factory\Factories;

use App\Patterns\Creational\Factory\Products\Contracts\Animal;
use App\Patterns\Creational\Factory\Products\HomeAnimal;

class HomeAnimalFactory extends AnimalFactory
{
    public function getAnimal(): Animal
    {
        return new HomeAnimal();
    }
}
