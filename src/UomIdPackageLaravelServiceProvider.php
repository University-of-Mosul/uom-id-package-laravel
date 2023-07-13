<?php

namespace UoMosul\UomIdPackageLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UomIdPackageLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('uom-id-package-laravel')
            ->hasConfigFile(['uom-id'])
            ->publishesServiceProvider('UomAuthServiceProvider');
    }
}
