<?php

namespace App\Patterns\Creational\AbstractFactory\Factories\Contracts;

use App\Patterns\Creational\AbstractFactory\Products\Contracts\Cat;
use App\Patterns\Creational\AbstractFactory\Products\Contracts\Dog;

interface AnimalFactory
{
    public function createCat(): Cat;

    public function createDog(): Dog;
}
