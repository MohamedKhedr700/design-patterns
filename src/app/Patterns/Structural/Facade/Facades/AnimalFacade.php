<?php

namespace App\Patterns\Structural\Facade\Facades;

use App\Patterns\Structural\Facade\Product\Animal;

class AnimalFacade
{
    private static string $animal;

    public static function setAnimal(string $animal): void
    {
        static::$animal = $animal;
    }

    public static function getAnimal(): string
    {
        return static::$animal;
    }

    public static function render(): string
    {
        $animal = (new (static::getAnimal())(fake()->name));

        return (new Animal($animal))->render();
    }
}
