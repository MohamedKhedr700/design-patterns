<?php

namespace App\Patterns\Structural\Bridge\Bridges\Implementation;

use App\Patterns\Structural\Bridge\Bridges\Implementation\Contracts\Formatter;
use App\Patterns\Structural\Bridge\Entities\Animal;

class JsonFormater implements Formatter
{
    public function format(Animal $animal): string
    {
        return json_encode([
            'data' => (string) $animal,
        ]);
    }
}
