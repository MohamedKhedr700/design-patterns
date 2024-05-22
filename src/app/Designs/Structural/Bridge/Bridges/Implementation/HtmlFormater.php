<?php

namespace App\Designs\Structural\Bridge\Bridges\Implementation;

use App\Designs\Structural\Bridge\Bridges\Implementation\Contracts\Formatter;
use App\Designs\Structural\Bridge\Products\Cat;

class HtmlFormater implements Formatter
{
    public function format(Cat $cat): string
    {
        return '<h3>'.((string) $cat).'</h3>';
    }
}
