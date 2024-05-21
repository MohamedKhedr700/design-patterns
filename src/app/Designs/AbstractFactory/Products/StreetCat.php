<?php

namespace App\Designs\AbstractFactory\Products;

use App\Designs\AbstractFactory\Products\Contracts\Cat;

class StreetCat implements Cat
{
    public function run(): string
    {
        return 'Street Cat is running';
    }
}
