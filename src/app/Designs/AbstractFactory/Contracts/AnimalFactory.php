<?php

namespace App\Designs\AbstractFactory\Contracts;

interface AnimalFactory
{
    public function runCat(): string;

    public function runDog(): string;
}
