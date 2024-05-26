<?php

namespace App\Patterns\Creational\AbstractFactory\Factories;

use App\Patterns\Creational\AbstractFactory\Factories\Contracts\AnimalFactory;
use App\Patterns\Creational\AbstractFactory\Products\Contracts\Cat;
use App\Patterns\Creational\AbstractFactory\Products\Contracts\Dog;
use App\Patterns\Creational\AbstractFactory\Products\HomeCat;
use App\Patterns\Creational\AbstractFactory\Products\HomeDog;

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
