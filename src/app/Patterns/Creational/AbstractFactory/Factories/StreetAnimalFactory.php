<?php

namespace App\Patterns\Creational\AbstractFactory\Factories;

use App\Patterns\Creational\AbstractFactory\Factories\Contracts\AnimalFactory;
use App\Patterns\Creational\AbstractFactory\Entities\Contracts\Cat;
use App\Patterns\Creational\AbstractFactory\Entities\Contracts\Dog;
use App\Patterns\Creational\AbstractFactory\Entities\StreetCat;
use App\Patterns\Creational\AbstractFactory\Entities\StreetDog;

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
