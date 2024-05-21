<?php

namespace App\Designs\AbstractFactory\Factories;

use App\Designs\AbstractFactory\Factories\Contracts\AnimalFactory;
use App\Designs\AbstractFactory\Products\HomeCat;
use App\Designs\AbstractFactory\Products\HomeDog;

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
