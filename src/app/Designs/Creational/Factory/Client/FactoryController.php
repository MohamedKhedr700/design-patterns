<?php

namespace App\Designs\Creational\Factory\Client;

use App\Designs\Creational\Factory\Factories\HomeAnimalFactory;
use App\Designs\Creational\Factory\Factories\StreetAnimalFactory;
use App\Http\Controllers\Controller;

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
