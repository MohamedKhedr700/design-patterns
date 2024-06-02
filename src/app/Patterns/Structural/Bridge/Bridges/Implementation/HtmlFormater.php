<?php

namespace App\Patterns\Structural\Bridge\Bridges\Implementation;

use App\Patterns\Structural\Bridge\Bridges\Implementation\Contracts\Formatter;
use App\Patterns\Structural\Bridge\Entities\Animal;

class HtmlFormater implements Formatter
{
    public function format(Animal $animal): string
    {
        return '<h3>'.((string) $animal).'</h3>';
    }
}
