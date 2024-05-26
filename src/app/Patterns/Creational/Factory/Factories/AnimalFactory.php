<?php

namespace App\Patterns\Creational\Factory\Factories;

use App\Patterns\Creational\Factory\Products\Contracts\Animal;

abstract class AnimalFactory
{
    abstract public function getAnimal(): Animal;

    public function createAnimal(): string
    {
        return (string) $this->getAnimal();
    }
}
