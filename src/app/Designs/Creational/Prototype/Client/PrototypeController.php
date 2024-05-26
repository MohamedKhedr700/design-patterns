<?php

namespace App\Designs\Creational\Prototype\Client;

use App\Designs\Creational\Prototype\Prototypes\Cat;
use App\Http\Controllers\Controller;

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
