<?php

namespace App\Designs\Structural\Adapter\Products;

use App\Designs\Structural\Adapter\Products\Contracts\HomeCat as HomeCatContract;

abstract class Cat implements HomeCatContract
{
    abstract public function getName(): string;

    public function __toString()
    {
        return
        'Cat name is '.
        $this->getName();
    }
}
