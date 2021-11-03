<?php

namespace App\Infrastructure;

use ReflectionClass;

abstract class AppConstant
{
    public static function toList()
    {
        $oClass = new ReflectionClass(static::class);
        $values = array_values($oClass->getConstants());

        return array_combine($values, $values);
    }
}
