<?php

namespace App\Patterns\Creational\Builder\Builders;

use App\Patterns\Creational\Builder\Builders\Contracts\AnimalBuilder as AnimalBuilderContract;
use App\Patterns\Creational\Builder\Entities\Animal;

class AnimalBuilder implements AnimalBuilderContract
{
    private Animal $animal;

    public function __construct()
    {
        $this->reset();
    }

    public function name(string $name): static
    {
        $this->animal->name = $name;

        return $this;
    }

    public function head(string $head): static
    {
        $this->animal->head = $head;

        return $this;
    }

    public function body(string $body): static
    {
        $this->animal->body = $body;

        return $this;
    }

    public function arms(string $arms): static
    {
        $this->animal->arms = $arms;

        return $this;
    }

    public function legs(string $legs): static
    {
        $this->animal->legs = $legs;

        return $this;
    }

    public function build(): Animal
    {
        return $this->animal;
    }

    public function reset(): void
    {
        $this->animal = new Animal();
    }
}
