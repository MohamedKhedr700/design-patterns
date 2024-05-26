<?php

namespace App\Patterns\Structural\Composite\Client;

use App\Patterns\Structural\Composite\Products\HomeCat;
use App\Patterns\Structural\Composite\Products\StreetCat;
use App\Patterns\Structural\Composite\Products\Radar;
use App\Http\Controllers\Controller;

class CompositeController extends Controller
{
    public function __invoke(): void
    {
        $homeCat = new HomeCat(fake()->name());

        $streetCat = new StreetCat(fake()->name());

        $radar = new Radar();

        $radar->addCat($homeCat);

        $radar->addCat($streetCat);

        pre_output(
            $radar->render(),
        );
    }
}
