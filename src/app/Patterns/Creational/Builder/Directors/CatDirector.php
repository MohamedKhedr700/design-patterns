<?php

namespace App\Patterns\Creational\Builder\Directors;

use App\Patterns\Creational\Builder\Builders\Contracts\AnimalBuilder;
use App\Patterns\Creational\Builder\Entities\Animal;

class CatDirector
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
            ->name('Cat')
            ->head('thin')
            ->body('thin')
            ->arms('thin')
            ->legs('thin')
            ->build();
    }
}
