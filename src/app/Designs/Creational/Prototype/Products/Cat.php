<?php

namespace App\Designs\Creational\Prototype\Products;

use App\Designs\Creational\Prototype\Prototypes\Animal;
use App\Designs\Creational\Prototype\Prototypes\Contracts\Prototype;

class Cat extends Animal implements Prototype
{
    private string $color;

    public function __construct(string $color)
    {
        $this->color = $color;

        parent::__construct('Cat');
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
