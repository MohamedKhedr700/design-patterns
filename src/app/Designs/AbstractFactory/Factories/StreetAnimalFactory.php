<?php

namespace App\Designs\AbstractFactory\Factories;

use App\Designs\AbstractFactory\Contracts\AnimalFactory;
use App\Designs\AbstractFactory\Contracts\Cat;
use App\Designs\AbstractFactory\Contracts\Dog;
use App\Designs\AbstractFactory\StreetCat;
use App\Designs\AbstractFactory\StreetDog;

class StreetAnimalFactory implements AnimalFactory
{
    public function run(): array
    {
        return [
            (new StreetCat())->run(),
            (new StreetDog())->run(),
        ];
    }
}
