<?php

namespace App\Designs\AbstractFactory;

use App\Designs\AbstractFactory\Products\Contracts\Cat;

class HomeCat implements Cat
{
    public function run(): string
    {
        return 'Home cat is running';
    }
}
