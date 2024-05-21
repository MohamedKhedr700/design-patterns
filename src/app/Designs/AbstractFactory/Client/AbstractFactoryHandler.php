<?php

namespace App\Designs\AbstractFactory\Client;

use App\Designs\AbstractFactory\Factories\Contracts\AnimalFactory;

class AbstractFactoryHandler
{
    private AnimalFactory $factory;

    public function setFactory(AnimalFactory $factory): void
    {
        $this->factory = $factory;
    }

    public function getFactory(): AnimalFactory
    {
        return $this->factory;
    }

    public function runAnimals(): array
    {
        return [
            'cat' => $this->getFactory()->runCat(),
            'dog' => $this->getFactory()->runDog(),
        ];
    }
}
