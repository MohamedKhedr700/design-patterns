<?php

namespace App\Patterns\Creational\Factory\Entities;

use App\Patterns\Creational\Factory\Entities\Contracts\Animal;

class HomeAnimal implements Animal
{
    public function __toString(): string
    {
        return 'This is a home animal';
    }
}
