<?php

namespace App\Designs\AbstractFactory;

use App\Designs\AbstractFactory\Contracts\Dog;

class StreetDog implements Dog
{
    public function run(): string
    {
        return 'Street dog is running';
    }
}
