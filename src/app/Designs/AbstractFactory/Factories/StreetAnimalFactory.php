<?php

namespace App\Designs\AbstractFactory\Factories;

use App\Designs\AbstractFactory\Factories\Contracts\AnimalFactory;
use App\Designs\AbstractFactory\Products\StreetCat;
use App\Designs\AbstractFactory\Products\StreetDog;

class StreetAnimalFactory implements AnimalFactory
{
    public function runCat(): string
    {
        return (new StreetCat())->run();
    }

    public function runDog(): string
    {
        return (new StreetDog())->run();
    }
}
