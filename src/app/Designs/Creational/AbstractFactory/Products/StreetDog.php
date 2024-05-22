<?php

namespace App\Designs\Creational\AbstractFactory\Products;

use App\Designs\Creational\AbstractFactory\Products\Contracts\Dog;

class StreetDog implements Dog
{
    public function run(): string
    {
        return 'Street dog is running';
    }
}
