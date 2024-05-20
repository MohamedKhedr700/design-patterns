<?php

namespace App\Designs\AbstractFactory\Factories;

use App\Designs\AbstractFactory\Contracts\AnimalFactory;

class AbstractAnimalFactory implements AnimalFactory
{
    private AnimalFactory $factory;

    public function __construct(StreetAnimalFactory $factory)
    {
        $this->factory = $factory;
    }

    public function run(): array
    {
        return $this->factory->run();
    }
}
