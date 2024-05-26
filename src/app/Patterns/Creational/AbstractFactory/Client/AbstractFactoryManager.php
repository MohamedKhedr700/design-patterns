<?php

namespace App\Patterns\Creational\AbstractFactory\Client;

use App\Patterns\Creational\AbstractFactory\Factories\Contracts\AnimalFactory;

class AbstractFactoryManager
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

    public function create(): array
    {
        return [
            'cat' => (string) $this->getFactory()->createCat(),
            'dog' => (string) $this->getFactory()->createDog(),
        ];
    }
}
