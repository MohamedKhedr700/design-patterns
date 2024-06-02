<?php

namespace App\Patterns\Behavioral\Cor\Cors;

use App\Patterns\Behavioral\Cor\Cors\Contracts\Handler as HandlerContract;
use Illuminate\Http\Request;

abstract class Handler implements HandlerContract
{
    protected HandlerContract $next;

    public function setNext(HandlerContract $handler): void
    {
        $this->next = $handler;
    }

    abstract public function handle(Request $request);
}
