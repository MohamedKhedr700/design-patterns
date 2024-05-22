<?php

namespace App\Designs\Builder\Client;

use App\Designs\Builder\Builders\AnimalBuilder;
use App\Designs\Builder\Directors\CatDirector;
use App\Designs\Builder\Directors\DogDirector;
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
