<?php

namespace App\Designs\Factory\Factories;

use App\Designs\Factory\Products\Contracts\Animal;

abstract class AnimalFactory
{
    abstract public function getAnimal(): Animal;

    public function runAnimal(): string
    {
        return $this->getAnimal()->run();
    }
}
