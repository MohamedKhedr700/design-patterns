<?php

namespace App\Designs\Structural\Composite\Products;

use App\Designs\Structural\Composite\Composites\Contracts\Renderable;

class Radar implements Renderable
{
    private array $cats = [];

    public function addCat($cat): void
    {
        $this->cats[] = $cat;
    }

    public function getCats(): array
    {
        return $this->cats;
    }

    public function render(): string
    {
        $result = '';

        foreach ($this->cats as $cat) {
            $result .= $cat->render().PHP_EOL;
        }

        return $result;
    }
}
