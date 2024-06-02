<?php

namespace App\Patterns\Creational\Prototype\Client;

use App\Http\Controllers\Controller;
use App\Patterns\Creational\Prototype\Prototypes\Cat;

class PrototypeController extends Controller
{
    public function __invoke(): void
    {
        $cat = new Cat(fake()->colorName());

        $clonedCat = clone $cat;

        pre_output(
            (string) $cat,
            '<br>',
            (string) $clonedCat,
        );
    }
}
