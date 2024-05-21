<?php

namespace App\Designs\Factory\Products;

use App\Designs\Factory\Products\Contracts\Animal;

class HomeCat implements Animal
{
    public function run(): string
    {
        return 'Home cat is running';
    }
}
