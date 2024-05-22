<?php

namespace App\Designs\Structural\Bridge\Client;

use App\Designs\Structural\Adapter\Adapters\CatAdapter;
use App\Designs\Structural\Adapter\Products\HomeCat;
use App\Designs\Structural\Adapter\Products\StreetCat;
use App\Designs\Structural\Bridge\Bridges\Abstraction\Renderer;
use App\Designs\Structural\Bridge\Bridges\Implementation\HtmlFormater;
use App\Designs\Structural\Bridge\Bridges\Implementation\JsonFormater;
use App\Designs\Structural\Bridge\Products\Cat;
use App\Http\Controllers\Controller;

class BridgeController extends Controller
{
    public function __invoke(): void
    {
        $cat = new Cat(
            fake()->name(),
            fake()->colorName(),
        );

        $formater = new HtmlFormater();

        $bridge = new Renderer($formater);

        pre_output(
            $bridge->render($cat),
        );


        $formater = new JsonFormater();

        $bridge->setFormater($formater);

        pre_output(
            $bridge->render($cat),
        );
    }
}
