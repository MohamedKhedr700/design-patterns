<?php

namespace App\Designs\Creational\AbstractFactory\Products;

use App\Designs\Creational\AbstractFactory\Products\Contracts\Cat;

class StreetCat implements Cat
{
    public function run(): string
    {
        return 'Street Cat is running';
    }
}
