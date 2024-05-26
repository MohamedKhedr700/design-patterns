<?php

namespace App\Patterns\Structural\Bridge\Bridges\Implementation\Contracts;

use App\Patterns\Structural\Bridge\Products\Cat;

interface Formatter
{
    public function format(Cat $cat): string;
}
