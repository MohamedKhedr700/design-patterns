<?php

namespace App\Patterns\Structural\Facade\Entities;

use App\Patterns\Structural\Facade\Entities\Contracts\Animal as AnimalContract;

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
