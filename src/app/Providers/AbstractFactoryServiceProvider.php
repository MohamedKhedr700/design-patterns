<?php

namespace App\Providers;

use App\Designs\AbstractFactory\Client\AnimalManager;
use App\Designs\AbstractFactory\Contracts\AnimalFactory;
use App\Designs\AbstractFactory\Factories\HomeAnimalFactory;
use App\Designs\AbstractFactory\Factories\StreetAnimalFactory;
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
