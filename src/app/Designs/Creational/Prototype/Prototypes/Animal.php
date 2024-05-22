<?php

namespace App\Designs\Creational\Prototype\Prototypes;

use App\Designs\Creational\Prototype\Prototypes\Contracts\Prototype;

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
