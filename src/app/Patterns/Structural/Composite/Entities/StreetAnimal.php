<?php

namespace App\Patterns\Structural\Composite\Entities;

use App\Patterns\Structural\Composite\Composites\Contracts\Renderable;
use App\Patterns\Structural\Composite\Entities\Contracts\Animal;

class StreetAnimal implements Animal, Renderable
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

    public function render(): string
    {
        return 'Animal '.$this->getName().' in the street.';
    }
}
