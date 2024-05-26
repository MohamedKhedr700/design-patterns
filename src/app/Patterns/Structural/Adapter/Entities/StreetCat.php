<?php

namespace App\Patterns\Structural\Adapter\Entities;

use App\Patterns\Structural\Adapter\Entities\Contracts\StreetCat as StreetCatContract;

class StreetCat implements StreetCatContract
{
    public function guessName(): string
    {
        return fake()->name();
    }
}
