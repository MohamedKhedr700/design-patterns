<?php

namespace App\Designs\Creational\AbstractFactory\Factories;

use App\Designs\Creational\AbstractFactory\Factories\Contracts\AnimalFactory;
use App\Designs\Creational\AbstractFactory\Products\Contracts\Cat;
use App\Designs\Creational\AbstractFactory\Products\Contracts\Dog;
use App\Designs\Creational\AbstractFactory\Products\HomeCat;
use App\Designs\Creational\AbstractFactory\Products\HomeDog;

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
