<?php

namespace App\Patterns\Structural\Adapter\Entities;

use App\Patterns\Structural\Adapter\Entities\Contracts\HomeCat as HomeCatContract;

class HomeCat implements HomeCatContract
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

    public function __toString()
    {
        return
            'Cat name is '.
            $this->getName();
    }
}
