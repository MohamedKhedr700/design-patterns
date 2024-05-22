<?php

namespace App\Designs\Creational\AbstractFactory\Client;

use App\Designs\Creational\AbstractFactory\Factories\Contracts\AnimalFactory;

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

    public function run(): array
    {
        return [
            'cat' => $this->getFactory()->createCat()->run(),
            'dog' => $this->getFactory()->createDog()->run(),
        ];
    }
}