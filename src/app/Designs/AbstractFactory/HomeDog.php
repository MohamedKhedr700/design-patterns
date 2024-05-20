<?php

namespace App\Designs\AbstractFactory;

use App\Designs\AbstractFactory\Contracts\Dog;

class HomeDog implements Dog
{
    public function run(): string
    {
        return 'Home dog is running';
    }
}
