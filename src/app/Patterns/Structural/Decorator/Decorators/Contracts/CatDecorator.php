<?php

namespace App\Patterns\Structural\Decorator\Decorators\Contracts;

use App\Patterns\Structural\Decorator\Decorators\AnimalDecorator;
use App\Patterns\Structural\Decorator\Decorators\Contracts\Animal as AnimalContract;

class CatDecorator extends AnimalDecorator implements AnimalContract
{
    public function render(): void
    {
        echo $this->getAnimal()->render();
    }
}
