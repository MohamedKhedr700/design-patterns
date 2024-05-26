<?php

namespace App\Patterns\Creational\Builder\Client;

use App\Patterns\Creational\Builder\Builders\AnimalBuilder;
use App\Patterns\Creational\Builder\Directors\CatDirector;
use App\Patterns\Creational\Builder\Directors\DogDirector;
use App\Http\Controllers\Controller;

class BuilderController extends Controller
{
    public function __invoke(): void
    {
        $builder = new AnimalBuilder();

        $director = new CatDirector($builder);

        pre_output(
            (string) $director->build(),
        );

        $builder->reset();

        $director = new DogDirector($builder);

        pre_output(
            (string) $director->build(),
        );
    }
}
