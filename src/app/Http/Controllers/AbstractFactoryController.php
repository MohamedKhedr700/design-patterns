<?php

namespace App\Http\Controllers;

use App\Designs\AbstractFactory\Contracts\AnimalFactory;
use App\Designs\AbstractFactory\Factories\AbstractAnimalFactory;
use App\Designs\AbstractFactory\Factories\HomeAnimalFactory;
use App\Designs\AbstractFactory\Factories\StreetAnimalFactory;
use Illuminate\Http\JsonResponse;

class AbstractFactoryController extends Controller
{
    public function __invoke(AbstractAnimalFactory $factory): JsonResponse
    {
        return response()->json($factory->run());
    }
}
