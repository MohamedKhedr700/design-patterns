<?php

namespace App\Designs\Structural\Adapter\Products;

use App\Designs\Structural\Adapter\Products\Contracts\StreetCat as StreetCatContract;

class StreetCat implements StreetCatContract
{
    public function guessName(): string
    {
        return fake()->name();
    }
}
