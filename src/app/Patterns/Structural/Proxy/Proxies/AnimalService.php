<?php

namespace App\Patterns\Structural\Proxy\Proxies;

use App\Patterns\Structural\Proxy\Proxies\Contracts\Animal;

class AnimalService implements Animal
{

    public function list(): array
    {
        return [
            'cat',
            'dog',
            'fish',
        ];
    }
}
