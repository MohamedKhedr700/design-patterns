<?php

namespace App\Patterns\Structural\Decorator\Decorators;

use App\Patterns\Structural\Decorator\Decorators\Contracts\Animal as AnimalContract;

class AnimalDecorator implements AnimalContract
{
    private AnimalContract $animal;

    public function __construct(AnimalContract $animal)
    {
        $this->animal = $animal;
    }

    public function getAnimal(): AnimalContract
    {
        return $this->animal;
    }


    public function render(): string
    {
        return $this->getAnimal()->render();
    }
}
