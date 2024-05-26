<?php

namespace App\Patterns\Structural\Bridge\Entities;

class Cat
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
            'Cat name is '.
            $this->name.
            ' and color is '.
            $this->color;
    }
}
