<?php

namespace App\Designs\Creational\AbstractFactory\Factories\Contracts;

use App\Designs\Creational\AbstractFactory\Products\Contracts\Cat;
use App\Designs\Creational\AbstractFactory\Products\Contracts\Dog;

interface AnimalFactory
{
    public function createCat(): Cat;

    public function createDog(): Dog;
}
