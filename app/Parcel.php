<?php

namespace App;

class Parcel
{
    protected static function resolveFacade(string $name)
    {
        return app()->make($name);
    }

    public static function __callStatic(
        string $method,
        array $arguments
    ) {
        return self::resolveFacade('Parcel')->$method(...$arguments);
    }
    
}