<?php

namespace App\Designs\AbstractFactory\Factories\Contracts;

interface AnimalFactory
{
    public function runCat(): string;

    public function runDog(): string;
}
