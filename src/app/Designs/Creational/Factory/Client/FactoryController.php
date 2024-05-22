<?php

namespace App\Designs\Creational\Factory\Client;

use App\Designs\Creational\Factory\Factories\HomeAnimalFactory;
use App\Designs\Creational\Factory\Factories\StreetAnimalFactory;
use App\Http\Controllers\Controller;

class FactoryController extends Controller
{
    public function __invoke(FactoryHandler $handler): void
    {
        $handler->setFactory(new HomeAnimalFactory());

        pre_output(
            $handler->runAnimal(),
        );

        $handler->setFactory(new StreetAnimalFactory());

        pre_output(
            $handler->runAnimal(),
        );
    }
}
