<?php

namespace App\Patterns\Structural\Decorator\Entities;

use App\Patterns\Structural\Decorator\Decorators\Contracts\Animal as AnimalContract;

class Animal implements AnimalContract
{
    public function render(): string
    {
        return 'Animal Specifications: '.PHP_EOL;
    }
}
