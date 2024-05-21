<?php

namespace App\Designs\AbstractFactory\Factories;

use App\Designs\AbstractFactory\Contracts\AnimalFactory;
use App\Designs\AbstractFactory\HomeCat;
use App\Designs\AbstractFactory\HomeDog;

class HomeAnimalFactory implements AnimalFactory
{
    public function runCat(): string
    {
        return (new HomeCat())->run();
    }

    public function runDog(): string
    {
        return (new HomeDog())->run();
    }
}
