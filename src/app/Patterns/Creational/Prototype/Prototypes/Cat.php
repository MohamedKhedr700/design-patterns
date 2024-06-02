<?php

namespace App\Patterns\Creational\Prototype\Prototypes;

use App\Patterns\Creational\Prototype\Prototypes\Contracts\Prototype;

class Cat extends Animal implements Prototype
{
    private string $color;

    public function __construct(string $color)
    {
        parent::__construct('Cat');

        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function __clone()
    {
        return new static($this->color);
    }

    public function __toString()
    {
        return
            $this->getName().
            ' color is '.
            $this->getColor();
    }
}
