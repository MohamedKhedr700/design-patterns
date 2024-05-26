<?php

namespace App\Designs\Structural\Composite\Client;

use App\Designs\Structural\Composite\Products\HomeCat;
use App\Designs\Structural\Composite\Products\StreetCat;
use App\Designs\Structural\Composite\Products\Radar;
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
