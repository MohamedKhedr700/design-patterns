<?php

namespace App\Patterns\Behavioral\Cor\Cors\Contracts;

use Illuminate\Http\Request;

interface Handler
{
    public function handle(Request $request);
}
