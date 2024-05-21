<?php

namespace App\Designs\AbstractFactory;

use App\Designs\AbstractFactory\Products\Contracts\Dog;

class StreetDog implements Dog
{
    public function run(): string
    {
        return 'Street dog is running';
    }
}
