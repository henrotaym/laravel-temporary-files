<?php

namespace Henrotaym\LaravelTemporaryFiles;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

/*
 * @see https://github.com/spatie/laravel-package-tools
 */
class LaravelTemporaryFilesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-temporary-files')
            ->hasConfigFile('laravel-temporary-files');
    }
}
