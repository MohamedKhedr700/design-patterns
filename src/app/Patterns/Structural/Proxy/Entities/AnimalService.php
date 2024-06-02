<?php

namespace App\Patterns\Structural\Proxy\Entities;

use App\Patterns\Structural\Proxy\Entities\Contracts\Animal;

class AnimalService implements Animal
{
    public function list(): array
    {
        return [
            'cat',
            'dog',
        ];
    }
}
