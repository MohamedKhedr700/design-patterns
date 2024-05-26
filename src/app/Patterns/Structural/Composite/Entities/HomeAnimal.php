<?php

namespace App\Patterns\Structural\Composite\Entities;

use App\Patterns\Structural\Composite\Composites\Contracts\Renderable;
use App\Patterns\Structural\Composite\Entities\Contracts\Animal;

class HomeAnimal implements Animal, Renderable
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
        return 'Cat '.$this->getName().' in the house';
    }
}
