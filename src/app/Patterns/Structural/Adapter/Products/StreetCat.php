<?php

namespace App\Patterns\Structural\Adapter\Products;

use App\Patterns\Structural\Adapter\Products\Contracts\StreetCat as StreetCatContract;

class StreetCat implements StreetCatContract
{
    public function guessName(): string
    {
        return fake()->name();
    }
}
