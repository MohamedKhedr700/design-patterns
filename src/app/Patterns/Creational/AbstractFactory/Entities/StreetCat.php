<?php

namespace App\Patterns\Creational\AbstractFactory\Entities;

use App\Patterns\Creational\AbstractFactory\Entities\Contracts\Cat;

class StreetCat implements Cat
{
    public function __toString(): string
    {
        return 'This is a street cat';
    }
}
