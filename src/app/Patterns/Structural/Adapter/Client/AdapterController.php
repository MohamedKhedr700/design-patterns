<?php

namespace App\Patterns\Structural\Adapter\Client;

use App\Patterns\Structural\Adapter\Adapters\CatAdapter;
use App\Patterns\Structural\Adapter\Products\HomeCat;
use App\Patterns\Structural\Adapter\Products\StreetCat;
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
