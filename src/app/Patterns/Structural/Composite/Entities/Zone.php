<?php

namespace App\Patterns\Structural\Composite\Entities;

use App\Patterns\Structural\Composite\Composites\Contracts\Renderable;
use App\Patterns\Structural\Composite\Entities\Contracts\Animal;

class Zone implements Renderable
{
    private array $animals = [];

    public function setAnimals(array $animals): void
    {
        $this->animals = $animals;
    }

    public function getAnimals(): array
    {
        return $this->animals;
    }

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function render(): string
    {
        $result = '';

        foreach ($this->getAnimals() as $animal) {
            $result .= $animal->render().PHP_EOL;
        }

        return $result;
    }
}
