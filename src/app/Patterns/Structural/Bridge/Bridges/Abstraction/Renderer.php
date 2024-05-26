<?php

namespace App\Patterns\Structural\Bridge\Bridges\Abstraction;

use App\Patterns\Structural\Bridge\Bridges\Abstraction\Contracts\Renderer as RendererContract;
use App\Patterns\Structural\Bridge\Bridges\Implementation\Contracts\Formatter;
use App\Patterns\Structural\Bridge\Entities\Animal;

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

    public function render(Animal $animal): string
    {
        return $this->getFormater()->format($animal);
    }
}
