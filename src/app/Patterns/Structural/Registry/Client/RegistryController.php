<?php

namespace App\Patterns\Structural\Registry\Client;

use App\Http\Controllers\Controller;
use App\Patterns\Structural\Registry\Entities\CatService;
use App\Patterns\Structural\Registry\Entities\DogService;
use App\Patterns\Structural\Registry\Registries\AnimalRegistry;

class RegistryController extends Controller
{
    public function __invoke(): void
    {
        AnimalRegistry::set(AnimalRegistry::CAT, new CatService);

        $catService = AnimalRegistry::get(AnimalRegistry::CAT);

        AnimalRegistry::set(AnimalRegistry::DOG, new DogService);

        $dogService = AnimalRegistry::get(AnimalRegistry::DOG);

        pre_output(
            (string) $catService,
            '<br>',
            (string) $dogService,
        );
    }
}
