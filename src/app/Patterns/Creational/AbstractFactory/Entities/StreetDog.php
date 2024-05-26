<?php

namespace App\Patterns\Creational\AbstractFactory\Entities;

use App\Patterns\Creational\AbstractFactory\Entities\Contracts\Dog;

class StreetDog implements Dog
{
    public function __toString(): string
    {
        return 'This is a street dog';
    }
}
