<?php

namespace App\Designs\AbstractFactory\Client;

use App\Designs\AbstractFactory\Factories\HomeAnimalFactory;
use App\Designs\AbstractFactory\Factories\StreetAnimalFactory;
use App\Http\Controllers\Controller;

class AbstractFactoryController extends Controller
{
    public function __invoke(AbstractFactoryHandler $handler): void
    {
        $handler->setFactory(new HomeAnimalFactory());

        echo '<pre>';

        print_r($handler->run());

        echo '</pre>';

        $handler->setFactory(new StreetAnimalFactory());

        echo '</br>';

        echo '<pre>';

        print_r($handler->run());

        echo '</pre>';
    }
}
