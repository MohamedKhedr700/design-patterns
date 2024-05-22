<?php

namespace App\Designs\Structural\Bridge\Bridges\Abstraction;

use App\Designs\Structural\Bridge\Bridges\Abstraction\Contracts\Renderer as RendererContract;
use App\Designs\Structural\Bridge\Bridges\Implementation\Contracts\Formatter;
use App\Designs\Structural\Bridge\Products\Cat;

class Renderer implements RendererContract
{
    private Formatter $formatter;

    public function __construct(Formatter $formatter)
    {
        $this->setFormater($formatter);
    }

    public function setFormater(Formatter $formatter): void
    {
        $this->formatter = $formatter;
    }

    public function getFormater(): Formatter
    {
        return $this->formatter;
    }

    public function render(Cat $cat): string
    {
        return $this->getFormater()->format($cat);
    }
}
