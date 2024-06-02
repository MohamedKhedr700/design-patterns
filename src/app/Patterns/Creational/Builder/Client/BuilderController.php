<?php

namespace App\Patterns\Creational\Builder\Client;

use App\Http\Controllers\Controller;
use App\Patterns\Creational\Builder\Builders\AnimalBuilder;
use App\Patterns\Creational\Builder\Directors\CatDirector;
use App\Patterns\Creational\Builder\Directors\DogDirector;

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
