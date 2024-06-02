<?php

namespace App\Patterns\Creational\Prototype\Prototypes;

use App\Patterns\Creational\Prototype\Prototypes\Contracts\Prototype;

abstract class Animal implements Prototype
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function __clone();
}
