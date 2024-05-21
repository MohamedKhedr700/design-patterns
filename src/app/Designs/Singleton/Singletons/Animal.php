<?php

namespace App\Designs\Singleton\Singletons;

class Animal extends Singleton
{
    private string $animal;

    public function setAnimal(string $animal): void
    {
        $this->animal = $animal;
    }

    public function getAnimal(): string
    {
        return $this->animal;
    }
}
