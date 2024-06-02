<?php

namespace App\Patterns\Structural\Bridge\Client;

use App\Http\Controllers\Controller;
use App\Patterns\Structural\Bridge\Bridges\Abstraction\Renderer;
use App\Patterns\Structural\Bridge\Bridges\Implementation\HtmlFormater;
use App\Patterns\Structural\Bridge\Bridges\Implementation\JsonFormater;
use App\Patterns\Structural\Bridge\Entities\Animal;

class BridgeController extends Controller
{
    public function __invoke(): void
    {
        $animal = new Animal(
            fake()->name(),
            fake()->colorName(),
        );

        $formater = new HtmlFormater();

        $bridge = new Renderer($formater);

        pre_output(
            $bridge->render($animal),
        );

        $formater = new JsonFormater();

        $bridge->setFormater($formater);

        pre_output(
            $bridge->render($animal),
        );
    }
}
