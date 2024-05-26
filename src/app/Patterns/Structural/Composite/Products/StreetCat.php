<?php

namespace App\Patterns\Structural\Composite\Products;

use App\Patterns\Structural\Composite\Composites\Contracts\Renderable;

class StreetCat implements Renderable
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function render(): string
    {
        return 'Cat '.$this->getName().' in the street.';
    }
}
