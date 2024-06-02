<?php

namespace App\Patterns\Creational\Factory\Client;

use App\Patterns\Creational\Factory\Factories\AnimalFactory;

class FactoryManager
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

    public function create(): string
    {
        return $this->getFactory()->createAnimal();
    }
}
