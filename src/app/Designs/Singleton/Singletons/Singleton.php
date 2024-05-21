<?php

namespace App\Designs\Singleton\Singletons;

use Exception;

abstract class Singleton
{
    private static array $instances = [];

    public function __construct()
    {
    }

    public function __clone()
    {
    }

    /**
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception('Cannot unserialize a Singleton.');
    }

    public static function getInstance()
    {
        $subClass = static::class;

        if (! isset(self::$instances[$subClass])) {
            self::$instances[$subClass] = new static;
        }

        return self::$instances[$subClass];
    }
}
