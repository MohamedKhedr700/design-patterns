<?php

namespace App\Patterns\Structural\Bridge\Bridges\Implementation;

use App\Patterns\Structural\Bridge\Bridges\Implementation\Contracts\Formatter;
use App\Patterns\Structural\Bridge\Entities\Cat;

class HtmlFormater implements Formatter
{
    public function format(Cat $cat): string
    {
        return '<h3>'.((string) $cat).'</h3>';
    }
}
