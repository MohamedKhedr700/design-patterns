<?php

namespace App\Patterns\Structural\Adapter\Client;

use App\Http\Controllers\Controller;
use App\Patterns\Structural\Adapter\Adapters\AnimalAdapter;
use App\Patterns\Structural\Adapter\Entities\HomeAnimal;
use App\Patterns\Structural\Adapter\Entities\StreetAnimal;

class AdapterController extends Controller
{
    public function __invoke(): void
    {
        $homeAnimal = new HomeAnimal(fake()->name());

        pre_output(
            (string) $homeAnimal,
        );

        $streetAnimal = new StreetAnimal();

        $adapter = new AnimalAdapter($streetAnimal);

        pre_output(
            (string) $adapter,
        );
    }
}
