<?php

namespace App\Patterns\Structural\Adapter\Adapters;

use App\Patterns\Structural\Adapter\Entities\Contracts\HomeCat;
use App\Patterns\Structural\Adapter\Entities\Contracts\StreetCat;

class CatAdapter implements HomeCat
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

    public function __toString()
    {
        return
            'Cat name is '.
            $this->getName();
    }
}
