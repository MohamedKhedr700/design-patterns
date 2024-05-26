<?php

namespace App\Patterns\Structural\Bridge\Bridges\Implementation;

use App\Patterns\Structural\Bridge\Bridges\Implementation\Contracts\Formatter;
use App\Patterns\Structural\Bridge\Entities\Cat;

class JsonFormater implements Formatter
{
    public function format(Cat $cat): string
    {
        return json_encode([
            'data' => (string) $cat,
        ]);
    }
}
