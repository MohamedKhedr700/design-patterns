<?php

namespace App\Designs\AbstractFactory\Factories;

use App\Designs\AbstractFactory\Factories\Contracts\AnimalFactory;
use App\Designs\AbstractFactory\Products\Contracts\Cat;
use App\Designs\AbstractFactory\Products\Contracts\Dog;
use App\Designs\AbstractFactory\Products\StreetCat;
use App\Designs\AbstractFactory\Products\StreetDog;

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
