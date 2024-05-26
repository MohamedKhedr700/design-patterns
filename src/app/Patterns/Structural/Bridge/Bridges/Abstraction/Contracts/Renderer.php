<?php

namespace App\Patterns\Structural\Bridge\Bridges\Abstraction\Contracts;

use App\Patterns\Structural\Bridge\Bridges\Implementation\Contracts\Formatter;
use App\Patterns\Structural\Bridge\Products\Cat;

interface Renderer
{
    public function setFormater(Formatter $formatter): void;

    public function getFormater(): Formatter;

    public function render(Cat $cat): string;
}
