<?php

namespace App\Patterns\Structural\Bridge\Entities;

class Animal
{
    private string $name;

    private string $color;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;

        $this->color = $color;
    }

    public function __toString()
    {
        return
            'Animal name is '.
            $this->name.
            ' and color is '.
            $this->color;
    }
}
