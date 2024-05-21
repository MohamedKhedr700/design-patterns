<?php

namespace App\Http\Controllers;

use App\Designs\AbstractFactory\Client\AnimalHandler;
use App\Designs\AbstractFactory\Factories\HomeAnimalFactory;
use App\Designs\AbstractFactory\Factories\StreetAnimalFactory;
use Illuminate\Http\JsonResponse;

class AbstractFactoryController extends Controller
{
    public function __invoke(AnimalHandler $manager): void
    {
        $manager->setFactory(new HomeAnimalFactory());

        echo '<pre>'; print_r($manager->run()); echo '</pre>';

        $manager->setFactory(new StreetAnimalFactory());

        echo '</br>';

        echo '<pre>'; print_r($manager->run()); echo '</pre>';
    }
}
