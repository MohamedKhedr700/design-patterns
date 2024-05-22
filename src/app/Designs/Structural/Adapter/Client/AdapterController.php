<?php

namespace App\Designs\Structural\Adapter\Client;

use App\Designs\Creational\AbstractFactory\Client\AbstractFactoryHandler;
use App\Designs\Creational\AbstractFactory\Factories\HomeAnimalFactory;
use App\Designs\Creational\AbstractFactory\Factories\StreetAnimalFactory;
use App\Designs\Structural\Adapter\Adapters\CatAdapter;
use App\Designs\Structural\Adapter\Products\HomeCat;
use App\Designs\Structural\Adapter\Products\StreetCat;
use App\Http\Controllers\Controller;

class AdapterController extends Controller
{
    public function __invoke(): void
    {
        $cat = new HomeCat(fake()->name());

        pre_output(
            (string) $cat,
        );

        $catAdapter = new CatAdapter(new StreetCat());

        pre_output(
            (string) $catAdapter,
        );
    }
}
