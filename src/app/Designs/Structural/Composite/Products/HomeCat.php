<?php

namespace App\Designs\Structural\Composite\Products;

use App\Designs\Structural\Composite\Composites\Contracts\Renderable;

class HomeCat implements Renderable
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
        return 'Cat '.$this->getName().' in the house';
    }
}
