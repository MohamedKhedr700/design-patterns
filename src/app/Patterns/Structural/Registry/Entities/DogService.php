<?php

namespace App\Patterns\Structural\Registry\Entities;

use App\Patterns\Structural\Registry\Entities\Contracts\Service;

class DogService implements Service
{
    public function __toString(): string
    {
        return 'I am a dog';
    }
}
