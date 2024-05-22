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

        echo '<pre>';

        print_r((string) $director->build());

        echo '</pre>';

        $builder->reset();

        $director = new DogDirector($builder);

        echo '<pre>';

        print_r((string) $director->build());

        echo '</pre>';
    }
}
