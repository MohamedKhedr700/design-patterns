<?php

namespace App\Designs\Singleton\Client;

use App\Designs\AbstractFactory\Client\AbstractFactoryHandler;
use App\Designs\AbstractFactory\Factories\HomeAnimalFactory;
use App\Designs\AbstractFactory\Factories\StreetAnimalFactory;
use App\Designs\Singleton\Singletons\Animal;
use App\Http\Controllers\Controller;

class SingletonController extends Controller
{
    public function __invoke(): void
    {
        $animal = Animal::getInstance();

        $animal->setAnimal('Cat');

        echo '<pre>';
        echo $animal->getAnimal();
        echo '</pre>';

        $animal->setAnimal('Dog');

        echo '<pre>';
        echo $animal->getAnimal();
        echo '</pre>';
    }
}
