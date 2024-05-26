<?php

namespace App\Patterns\Structural\Proxy\Proxies;

use App\Patterns\Structural\Proxy\Entities\Contracts\Animal;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class AnimalProxy implements Animal
{
    private Animal $animal;

    public function __construct(Animal $animal)
    {
        $this->animal = $animal;
    }

    public function getAnimal(): Animal
    {
        return $this->animal;
    }

    /**
     * @throws Exception
     */
    public function list(): array
    {
        if (! $this->checkAccess()) {
            throw new Exception('No access');
        }

        $this->logAccess();

        return Cache::remember('animals', now()->addMinutes(1), fn () => $this->getAnimal()->list());
    }

    private function checkAccess(): bool
    {
        return true;
    }

    private function logAccess(): void
    {
        Log::info('Animal service accessed at: '.now()->toIso8601String());
    }
}
