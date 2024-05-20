<?php

namespace App\Designs\AbstractFactory;

use App\Designs\AbstractFactory\Contracts\Cat;
use App\Designs\AbstractFactory\Contracts\Dog;

class HomeCat implements Cat
{
    public function run(): string
    {
        return 'Home cat is running';
    }
}
