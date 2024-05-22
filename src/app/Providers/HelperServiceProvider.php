<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $helpers = glob(app_path().'/Helpers/*.php');

        foreach ($helpers as $helper) {
            require_once $helper;
        }
    }
}
