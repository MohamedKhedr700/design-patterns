<?php

namespace App\Patterns\Structural\Adapter\Entities;

use App\Patterns\Structural\Adapter\Entities\Contracts\StreetAnimal as StreetCatContract;

class StreetAnimal implements StreetCatContract
{
    public function guessName(): string
    {
        return fake()->name();
    }
}
