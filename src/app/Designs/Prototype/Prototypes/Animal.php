<?php

namespace App\Designs\Prototype\Prototypes;

use App\Designs\Prototype\Prototypes\Contracts\Prototype;

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
