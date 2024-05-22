<?php

namespace App\Designs\Structural\Bridge\Bridges\Implementation;

use App\Designs\Structural\Bridge\Bridges\Implementation\Contracts\Formatter;
use App\Designs\Structural\Bridge\Products\Cat;

class JsonFormater implements Formatter
{

    public function format(Cat $cat): string
    {
        return json_encode([
            'data' => (string) $cat,
        ]);
    }
}
