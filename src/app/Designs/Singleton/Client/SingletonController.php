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
