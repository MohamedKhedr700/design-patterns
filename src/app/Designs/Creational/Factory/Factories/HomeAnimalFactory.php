<?php

namespace App\Designs\Creational\Factory\Factories;

use App\Designs\Creational\Factory\Products\Contracts\Animal;
use App\Designs\Creational\Factory\Products\HomeAnimal;

class HomeAnimalFactory extends AnimalFactory
{
    public function getAnimal(): Animal
    {
        return new HomeAnimal();
    }
}
