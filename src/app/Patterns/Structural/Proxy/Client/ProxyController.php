<?php

namespace App\Patterns\Structural\Proxy\Client;

use App\Http\Controllers\Controller;
use App\Patterns\Structural\Proxy\Entities\AnimalService;
use App\Patterns\Structural\Proxy\Proxies\AnimalProxy;
use Exception;

class ProxyController extends Controller
{
    /**
     * @throws Exception
     */
    public function __invoke(): void
    {
        $animalService = new AnimalService();

        $animalProxy = new AnimalProxy($animalService);

        pre_output(
            $animalProxy->list()
        );
    }
}
