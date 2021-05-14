<?php

namespace Soysaltan\Appender;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AppenderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package)
    {
        $package
            ->name('appender');
    }
}
