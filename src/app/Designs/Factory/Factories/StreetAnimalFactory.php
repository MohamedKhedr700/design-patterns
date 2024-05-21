<?php

namespace App\Designs\Factory\Factories;

use App\Designs\Factory\Products\Contracts\Animal;
use App\Designs\Factory\Products\StreetCat;

class StreetAnimalFactory extends AnimalFactory
{

    public function getAnimal(): Animal
    {
        return new StreetCat();
    }
}
