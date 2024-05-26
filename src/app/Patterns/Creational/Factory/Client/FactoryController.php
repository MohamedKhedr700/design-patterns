<?php

namespace App\Patterns\Creational\Factory\Client;

use App\Http\Controllers\Controller;
use App\Patterns\Creational\Factory\Factories\HomeAnimalFactory;
use App\Patterns\Creational\Factory\Factories\StreetAnimalFactory;

class FactoryController extends Controller
{
    public function __invoke(): void
    {
        $manager = new FactoryManager(new HomeAnimalFactory());

        pre_output(
            $manager->create(),
        );

        $manager->setFactory(new StreetAnimalFactory());

        pre_output(
            $manager->create(),
        );
    }
}
