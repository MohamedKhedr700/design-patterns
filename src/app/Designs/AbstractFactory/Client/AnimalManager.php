<?php

namespace App\Designs\AbstractFactory\Client;

use App\Designs\AbstractFactory\Contracts\AnimalFactory;
use App\Designs\AbstractFactory\Factories\StreetAnimalFactory;

class AnimalManager
{
    private AnimalFactory $factory;

    public function __construct(AnimalFactory $factory)
    {
        $this->setFactory($factory);
    }

    public function setFactory(AnimalFactory $factory): void
    {
        $this->factory = $factory;
    }

    public function getFactory(): AnimalFactory
    {
        return $this->factory;
    }

    public function run(): array
    {
        return [
            'cat' => $this->getFactory()->runCat(),
            'dog' => $this->getFactory()->runDog(),
        ];
    }
}
