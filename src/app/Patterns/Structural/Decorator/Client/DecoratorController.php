<?php

namespace App\Patterns\Structural\Decorator\Client;

use App\Http\Controllers\Controller;
use App\Patterns\Structural\Decorator\Decorators\FastAnimalDecorator;
use App\Patterns\Structural\Decorator\Decorators\SmartAnimalDecorator;
use App\Patterns\Structural\Decorator\Entities\Animal;

class DecoratorController extends Controller
{
    public function __invoke(): void
    {
        $animal = new Animal();

        $decorator = new FastAnimalDecorator($animal);

        $decorator = new SmartAnimalDecorator($decorator);

        pre_output(
            $decorator->render()
        );
    }
}
