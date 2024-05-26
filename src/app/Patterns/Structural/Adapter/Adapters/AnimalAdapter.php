<?php

namespace App\Patterns\Structural\Adapter\Adapters;

use App\Patterns\Structural\Adapter\Entities\Contracts\HomeAnimal;
use App\Patterns\Structural\Adapter\Entities\Contracts\StreetAnimal;

class AnimalAdapter implements HomeAnimal
{
    private StreetAnimal $cat;

    public function __construct(StreetAnimal $cat)
    {
        $this->cat = $cat;
    }

    public function getName(): string
    {
        return $this->cat->guessName();
    }

    public function __toString()
    {
        return
            'Cat name is '.
            $this->getName();
    }
}
