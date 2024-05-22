<?php

namespace App\Designs\Creational\Builder\Products;

class Animal
{
    public string $name;

    public string $head;

    public string $body;

    public string $arms;

    public string $legs;

    public function __toString()
    {
        return
            $this->name.
            ' has '.
            $this->head.
            ' head, '.
            $this->body.
            ' body, '.
            $this->arms.
            ' arms and '.
            $this->legs.
            ' legs.';
    }
}
