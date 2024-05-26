<?php

namespace App\Patterns\Creational\AbstractFactory\Factories;

use App\Patterns\Creational\AbstractFactory\Entities\Contracts\Cat;
use App\Patterns\Creational\AbstractFactory\Entities\Contracts\Dog;
use App\Patterns\Creational\AbstractFactory\Entities\HomeCat;
use App\Patterns\Creational\AbstractFactory\Entities\HomeDog;
use App\Patterns\Creational\AbstractFactory\Factories\Contracts\AnimalFactory;

class HomeAnimalFactory implements AnimalFactory
{
    public function createCat(): Cat
    {
        return new HomeCat();
    }

    public function createDog(): Dog
    {
        return new HomeDog();
    }
}
