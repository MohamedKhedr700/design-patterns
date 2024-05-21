<?php

namespace App\Designs\AbstractFactory\Factories;

use App\Designs\AbstractFactory\Factories\Contracts\AnimalFactory;
use App\Designs\AbstractFactory\Products\Contracts\Cat;
use App\Designs\AbstractFactory\Products\Contracts\Dog;
use App\Designs\AbstractFactory\Products\HomeCat;
use App\Designs\AbstractFactory\Products\HomeDog;

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
