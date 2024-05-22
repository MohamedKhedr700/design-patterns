<?php

namespace App\Designs\Creational\AbstractFactory\Products;

use App\Designs\Creational\AbstractFactory\Products\Contracts\Cat;

class HomeCat implements Cat
{
    public function run(): string
    {
        return 'Home cat is running';
    }
}
