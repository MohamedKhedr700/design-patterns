<?php

namespace App\Patterns\Behavioral\Cor\Entities;

use App\Patterns\Behavioral\Cor\Cors\Handler;

use App\Patterns\Behavioral\Cor\Cors\Contracts\Handler as HandlerContract;
use Exception;
use Illuminate\Http\Request;

class AuthenticateHandler extends Handler implements HandlerContract
{
    /**
     * @throws Exception
     */
    public function handle(Request $request)
    {
        if ($request->has('Authorization')) {
            throw new Exception('Authorization failed');
        }
    }

}
