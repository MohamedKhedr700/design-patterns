<?php

namespace App\Designs\Creational\AbstractFactory\Client;

use App\Designs\Creational\AbstractFactory\Factories\HomeAnimalFactory;
use App\Designs\Creational\AbstractFactory\Factories\StreetAnimalFactory;
use App\Http\Controllers\Controller;

class AbstractFactoryController extends Controller
{
    public function __invoke(AbstractFactoryHandler $handler): void
    {
        $handler->setFactory(new HomeAnimalFactory());

        pre_output(
            $handler->run(),
        );

        $handler->setFactory(new StreetAnimalFactory());

        pre_output(
            $handler->run(),
        );
    }
}
