<?php

namespace App\Patterns\Structural\Facade\Product;

use App\Patterns\Structural\Facade\Product\Contracts\Animal as AnimalContract;

class Cat implements AnimalContract
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAnimal(): static
    {
        return $this;
    }

    public function __toString(): string
    {
        return 'Cat name is '.$this->name;
    }
}
