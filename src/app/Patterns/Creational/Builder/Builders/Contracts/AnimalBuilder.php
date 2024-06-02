<?php

namespace App\Patterns\Creational\Builder\Builders\Contracts;

use App\Patterns\Creational\Builder\Entities\Animal;

interface AnimalBuilder
{
    public function name(string $name): static;

    public function head(string $head): static;

    public function body(string $body): static;

    public function arms(string $arms): static;

    public function legs(string $legs): static;

    public function build(): Animal;

    public function reset(): void;
}
