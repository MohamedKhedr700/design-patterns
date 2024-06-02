<?php

namespace App\Patterns\Creational\AbstractFactory\Entities;

use App\Patterns\Creational\AbstractFactory\Entities\Contracts\Cat;

class HomeCat implements Cat
{
    public function __toString(): string
    {
        return 'This is a home cat';
    }
}
