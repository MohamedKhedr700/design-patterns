<?php

namespace App\Designs\Prototype\Client;

use App\Designs\Prototype\Products\Cat;
use App\Http\Controllers\Controller;

class PrototypeController extends Controller
{
    public function __invoke(): void
    {
        $cat = new Cat(fake()->colorName());

        $clonedCat = clone $cat;

        echo '<pre>';

        print_r((string) $cat);

        echo '</br>';

        print_r((string) $clonedCat);

        echo '</pre>';
    }
}
