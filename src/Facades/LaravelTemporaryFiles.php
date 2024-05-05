<?php

namespace Henrotaym\LaravelTemporaryFiles\Facades;

use Henrotaym\LaravelTemporaryFiles\Factories\Services\TemporaryFiles\TemporaryFileServiceFactory;
use Henrotaym\LaravelTemporaryFiles\LaravelTemporaryFiles as Implementation;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Henrotaym\LaravelTemporaryFiles\LaravelTemporaryFiles
 *
 * @method static TemporaryFileServiceFactory factory()
 */
class LaravelTemporaryFiles extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Implementation::class;
    }
}
