<?php

namespace Soysaltan\Appender\Traits;

trait Appends
{
    public static $withoutAppends = false;

    protected function getArrayableAppends()
    {
        if (self::$withoutAppends) {
            return [];
        }

        return parent::getArrayableAppends();
    }
}
