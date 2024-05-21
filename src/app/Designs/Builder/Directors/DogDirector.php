<?php

namespace App\Designs\Builder\Directors;

use App\Designs\Builder\Builders\Contracts\AnimalBuilder;
use App\Designs\Builder\Products\Animal;

class DogDirector
{
    private AnimalBuilder $builder;

    public function __construct(AnimalBuilder $builder)
    {
        $this->setBuilder($builder);
    }

    public function setBuilder(AnimalBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function build(): Animal
    {
        return $this->builder
            ->name('Dog')
            ->head('fat')
            ->body('fat')
            ->arms('fat')
            ->legs('fat')
            ->build();
    }
}
