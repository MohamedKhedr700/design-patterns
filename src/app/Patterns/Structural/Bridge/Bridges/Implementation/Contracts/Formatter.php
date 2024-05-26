<?php

namespace App\Patterns\Structural\Bridge\Bridges\Implementation\Contracts;

use App\Patterns\Structural\Bridge\Entities\Cat;

interface Formatter
{
    public function format(Cat $cat): string;
}
