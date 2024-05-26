<?php

namespace App\Patterns\Creational\AbstractFactory\Factories;

use App\Patterns\Creational\AbstractFactory\Factories\Contracts\AnimalFactory;
use App\Patterns\Creational\AbstractFactory\Products\Contracts\Cat;
use App\Patterns\Creational\AbstractFactory\Products\Contracts\Dog;
use App\Patterns\Creational\AbstractFactory\Products\StreetCat;
use App\Patterns\Creational\AbstractFactory\Products\StreetDog;

class StreetAnimalFactory implements AnimalFactory
{
    public function createCat(): Cat
    {
        return new StreetCat();
    }

    public function createDog(): Dog
    {
        return new StreetDog();
    }
}
