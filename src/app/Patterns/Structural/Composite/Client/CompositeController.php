<?php

namespace App\Patterns\Structural\Composite\Client;

use App\Http\Controllers\Controller;
use App\Patterns\Structural\Composite\Entities\HomeAnimal;
use App\Patterns\Structural\Composite\Entities\Zone;
use App\Patterns\Structural\Composite\Entities\StreetAnimal;

class CompositeController extends Controller
{
    public function __invoke(): void
    {
        $homeAnimal = new HomeAnimal(fake()->name());

        $streetAnimal = new StreetAnimal(fake()->name());

        $zone = new Zone();

        $zone->setAnimals([
            $homeAnimal,
            $streetAnimal
        ]);

        pre_output(
            $zone->render(),
        );
    }
}
