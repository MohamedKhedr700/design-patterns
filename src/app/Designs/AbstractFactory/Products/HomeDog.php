<?php

namespace App\Designs\AbstractFactory\Products;

use App\Designs\AbstractFactory\Products\Contracts\Dog;

class HomeDog implements Dog
{
    public function run(): string
    {
        return 'Home dog is running';
    }
}
