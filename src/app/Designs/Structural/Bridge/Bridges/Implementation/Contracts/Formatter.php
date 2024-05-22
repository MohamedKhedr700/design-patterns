<?php

namespace App\Designs\Structural\Bridge\Bridges\Implementation\Contracts;

use App\Designs\Structural\Bridge\Products\Cat;

interface Formatter
{
    public function format(Cat $cat): string;
}
