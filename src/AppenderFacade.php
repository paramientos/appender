<?php

namespace Soysaltan\Appender;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soysaltan\Appender\Appender
 */
class AppenderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'appender';
    }
}
