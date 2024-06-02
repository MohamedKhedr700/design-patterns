<?php

namespace App\Patterns\Behavioral\Cor\Client;

use App\Http\Controllers\Controller;
use App\Patterns\Behavioral\Cor\Entities\AuthenticateHandler;
use App\Patterns\Behavioral\Cor\Entities\AuthorizeHandler;
use App\Patterns\Behavioral\Cor\Entities\CacheHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Pipeline;

class CorController extends Controller
{
    private array $handlers = [
        CacheHandler::class,
        AuthenticateHandler::class,
        AuthorizeHandler::class,
    ];

    public function __construct()
    {
        Pipeline::send(request())
            ->through($this->handlers)
            ->thenReturn();
    }

    public function __invoke(Request $request): void
    {
        pre_output(
            'Cached successful,',
            '<br>',
            'Authenticated successful,',
            '<br>',
            'Authorized successful,',
        );
    }
}
