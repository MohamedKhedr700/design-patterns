<?php

namespace App\Designs\AbstractFactory\Factories;

use App\Designs\AbstractFactory\Factories\Contracts\AnimalFactory;
use App\Designs\AbstractFactory\Products\StreetCat;

class StreetAnimalFactory implements AnimalFactory
{
    public function runCat(): string
    {
        return (new StreetCat())->run();
    }

    public function runDog(): string
    {
        return (new StreetCat())->run();
    }
}
