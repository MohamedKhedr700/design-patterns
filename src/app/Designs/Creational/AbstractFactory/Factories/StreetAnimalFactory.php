<?php

namespace App\Designs\Creational\AbstractFactory\Factories;

use App\Designs\Creational\AbstractFactory\Factories\Contracts\AnimalFactory;
use App\Designs\Creational\AbstractFactory\Products\Contracts\Cat;
use App\Designs\Creational\AbstractFactory\Products\Contracts\Dog;
use App\Designs\Creational\AbstractFactory\Products\StreetCat;
use App\Designs\Creational\AbstractFactory\Products\StreetDog;

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
