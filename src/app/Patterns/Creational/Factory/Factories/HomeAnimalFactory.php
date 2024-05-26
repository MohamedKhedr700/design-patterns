<?php

namespace App\Patterns\Creational\Factory\Factories;

use App\Patterns\Creational\Factory\Entities\Contracts\Animal;
use App\Patterns\Creational\Factory\Entities\HomeAnimal;

class HomeAnimalFactory extends AnimalFactory
{
    public function getAnimal(): Animal
    {
        return new HomeAnimal();
    }
}
