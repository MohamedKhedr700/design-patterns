<?php

namespace App\Patterns\Structural\Bridge\Bridges\Abstraction\Contracts;

use App\Patterns\Structural\Bridge\Bridges\Implementation\Contracts\Formatter;
use App\Patterns\Structural\Bridge\Entities\Animal;

interface Renderer
{
    public function setFormater(Formatter $formatter): void;

    public function getFormater(): Formatter;

    public function render(Animal $animal): string;
}
