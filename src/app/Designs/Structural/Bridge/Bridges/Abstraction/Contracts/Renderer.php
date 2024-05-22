<?php

namespace App\Designs\Structural\Bridge\Bridges\Abstraction\Contracts;

use App\Designs\Structural\Bridge\Bridges\Implementation\Contracts\Formatter;
use App\Designs\Structural\Bridge\Products\Cat;

interface Renderer
{
    public function setFormater(Formatter $formatter): void;

    public function getFormater(): Formatter;

    public function render(Cat $cat): string;
}
