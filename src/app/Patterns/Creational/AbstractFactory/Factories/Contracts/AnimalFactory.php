<?php

namespace App\Patterns\Creational\AbstractFactory\Factories\Contracts;

use App\Patterns\Creational\AbstractFactory\Entities\Contracts\Cat;
use App\Patterns\Creational\AbstractFactory\Entities\Contracts\Dog;

interface AnimalFactory
{
    public function createCat(): Cat;

    public function createDog(): Dog;
}
