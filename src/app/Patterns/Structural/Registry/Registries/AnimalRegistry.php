<?php

namespace App\Patterns\Structural\Registry\Registries;

use App\Patterns\Structural\Registry\Entities\Contracts\Service;
use Exception;

abstract class AnimalRegistry
{
    public const CAT = 'cat';

    public const DOG = 'dog';

    private static array $services = [];

    private static array $allowed = [
        self::CAT,
        self::DOG,
    ];

    /**
     * @throws Exception
     */
    final public static function set(string $key, Service $service): void
    {
        if (! in_array($key, self::$allowed)) {
            throw new Exception(sprintf('%s is not allowed in this registry', ucfirst($key)));
        }

        self::$services[$key] = $service;
    }

    /**
     * @throws Exception
     */
    final public static function get(string $key): Service
    {
        if (! in_array($key, self::$allowed) || ! isset(self::$services[$key])) {
            throw new Exception(sprintf('%s is not available in this registry', ucfirst($key)));
        }

        return self::$services[$key];
    }
}
