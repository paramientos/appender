<?php

namespace Soysaltan\Appender;

use Illuminate\Support\ServiceProvider;

class Provider extends ServiceProvider
{
    const VERSION = '1.0.0';

    protected $defer = true;

    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->register("\Soysaltan\Appender\Provider");
    }
}
