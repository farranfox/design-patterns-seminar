<?php

namespace App\Singleton;

class Database
{
    private static $instance;

    private function __construct() {}
    private function __clone() {}

    public static function getInstance(array $params): self
    {
        if (null === static::$instance) {
            return new static($params);
        }

        return static::$instance;
    }
}
