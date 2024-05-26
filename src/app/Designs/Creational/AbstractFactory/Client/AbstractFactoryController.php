<?php

namespace App\Designs\Creational\AbstractFactory\Client;

use App\Designs\Creational\AbstractFactory\Factories\HomeAnimalFactory;
use App\Designs\Creational\AbstractFactory\Factories\StreetAnimalFactory;
use App\Http\Controllers\Controller;

class AbstractFactoryController extends Controller
{
    public function __invoke(): void
    {
        $manager = new AbstractFactoryManager(new HomeAnimalFactory());

        pre_output(
            $manager->create(),
        );

        $manager->setFactory(new StreetAnimalFactory());

        pre_output(
            $manager->create(),
        );
    }
}
