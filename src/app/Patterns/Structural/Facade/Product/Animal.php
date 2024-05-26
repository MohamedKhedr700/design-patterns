<?php

namespace App\Patterns\Structural\Facade\Product;

use App\Patterns\Structural\Facade\Product\Contracts\Animal as AnimalContract;

class Animal
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
        return 'Animal Details'.PHP_EOL.((string) $this->getAnimal());
    }
}
