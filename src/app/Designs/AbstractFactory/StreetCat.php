<?php

namespace App\Designs\AbstractFactory;

use App\Designs\AbstractFactory\Contracts\Cat;
use App\Designs\AbstractFactory\Contracts\Dog;

class StreetCat implements Cat
{
    public function run(): string
    {
        return 'Street Cat is running';
    }
}
