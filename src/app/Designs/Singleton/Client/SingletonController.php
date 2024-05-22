<?php

namespace App\Designs\Singleton\Client;

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

        echo '</br>';

        $animal = Animal::getInstance();

        $animal->setAnimal('Dog');

        echo $animal->getAnimal();

        echo '</pre>';
    }
}
