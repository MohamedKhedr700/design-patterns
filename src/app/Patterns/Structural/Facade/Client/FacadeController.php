<?php

namespace App\Patterns\Structural\Facade\Client;

use App\Http\Controllers\Controller;
use App\Patterns\Structural\Facade\Entities\Cat;
use App\Patterns\Structural\Facade\Facades\AnimalFacade;

class FacadeController extends Controller
{
    public function __construct()
    {
        AnimalFacade::setAnimal(Cat::class);
    }

    public function __invoke(): void
    {
        pre_output(
            AnimalFacade::render(),
        );
    }
}
