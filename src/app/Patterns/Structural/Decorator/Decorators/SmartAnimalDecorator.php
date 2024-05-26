<?php

namespace App\Patterns\Structural\Decorator\Decorators;

use App\Patterns\Structural\Decorator\Decorators\AnimalDecorator;
use App\Patterns\Structural\Decorator\Decorators\Contracts\Animal as AnimalContract;

class SmartAnimalDecorator extends AnimalDecorator implements AnimalContract
{
    public function render(): string
    {
        return parent::render().PHP_EOL.'Smart';
    }
}
