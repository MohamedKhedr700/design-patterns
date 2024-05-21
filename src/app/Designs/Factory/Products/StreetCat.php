<?php

namespace App\Designs\Factory\Products;

use App\Designs\Factory\Products\Contracts\Animal;

class StreetCat implements Animal
{
    public function run(): string
    {
        return 'Street cat is running';
    }
}
