<?php

namespace App\Designs\Factory\Client;

use App\Designs\Factory\Factories\HomeAnimalFactory;
use App\Designs\Factory\Factories\StreetAnimalFactory;
use App\Http\Controllers\Controller;

class FactoryController extends Controller
{
    public function __invoke(FactoryHandler $handler): void
    {
        $handler->setFactory(new HomeAnimalFactory());

        echo '<pre>';
        print_r($handler->runAnimal());
        echo '</pre>';

        $handler->setFactory(new StreetAnimalFactory());

        echo '</br>';

        echo '<pre>';
        print_r($handler->runAnimal());
        echo '</pre>';
    }
}
