<?php

namespace App\Designs\Structural\Adapter\Adapters;

use App\Designs\Structural\Adapter\Products\Cat;
use App\Designs\Structural\Adapter\Products\Contracts\HomeCat;
use App\Designs\Structural\Adapter\Products\Contracts\StreetCat;

class CatAdapter extends Cat implements HomeCat
{
    private StreetCat $cat;

    public function __construct(StreetCat $cat)
    {
        $this->cat = $cat;
    }

    public function getName(): string
    {
        return $this->cat->guessName();
    }
}
