<?php

namespace App\Designs\AbstractFactory\Factories;

use App\Designs\AbstractFactory\Contracts\AnimalFactory;
use App\Designs\AbstractFactory\Contracts\Cat;
use App\Designs\AbstractFactory\Contracts\Dog;
use App\Designs\AbstractFactory\HomeCat;
use App\Designs\AbstractFactory\HomeDog;

class HomeAnimalFactory implements AnimalFactory
{
    public function run(): array
    {
         return [
             (new HomeCat())->run(),
             (new HomeDog())->run(),
         ];
    }
}
