<?php

namespace App\Patterns\Structural\Bridge\Bridges\Implementation\Contracts;

use App\Patterns\Structural\Bridge\Entities\Animal;

interface Formatter
{
    public function format(Animal $animal): string;
}
