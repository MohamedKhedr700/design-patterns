<?php

namespace App\Patterns\Creational\AbstractFactory\Entities;

use App\Patterns\Creational\AbstractFactory\Entities\Contracts\Dog;

class HomeDog implements Dog
{
    public function __toString(): string
    {
        return 'This is a home dog';
    }
}
