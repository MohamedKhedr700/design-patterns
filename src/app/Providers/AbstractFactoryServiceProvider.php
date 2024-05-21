<?php

namespace App\Providers;

use App\Designs\AbstractFactory\Factories\Contracts\AnimalFactory;
use App\Designs\AbstractFactory\Factories\HomeAnimalFactory;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class AbstractFactoryServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function boot(): void
    {
        $this->app->bind(AnimalFactory::class, HomeAnimalFactory::class);
    }

    public function provides(): array
    {
        return [
            AnimalFactory::class,
        ];
    }
}
