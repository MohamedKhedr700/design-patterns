<?php

namespace App\Http\Controllers;

use App\Designs\AbstractFactory\Client\AnimalManager;
use Illuminate\Http\JsonResponse;

class AbstractFactoryController extends Controller
{
    public function __invoke(AnimalManager $manager): JsonResponse
    {
        return response()->json($manager->run());
    }
}
