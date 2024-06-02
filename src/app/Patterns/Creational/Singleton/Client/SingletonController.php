<?php

namespace App\Patterns\Creational\Singleton\Client;

use App\Http\Controllers\Controller;
use App\Patterns\Creational\Singleton\Singletons\Animal;

class SingletonController extends Controller
{
    public function __invoke(): void
    {
        $animal = Animal::getInstance();

        $animal->setAnimal('Cat');

        pre_output(
            (string) $animal,
        );

        $animal = Animal::getInstance();

        $animal->setAnimal('Dog');

        pre_output(
            (string) $animal,
        );
    }
}
