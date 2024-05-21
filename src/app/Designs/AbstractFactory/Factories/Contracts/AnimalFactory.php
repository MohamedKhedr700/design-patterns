<?php

namespace App\Designs\AbstractFactory\Factories\Contracts;

use App\Designs\AbstractFactory\Products\Contracts\Cat;
use App\Designs\AbstractFactory\Products\Contracts\Dog;

interface AnimalFactory
{
    public function createCat(): Cat;

    public function createDog(): Dog;
}
