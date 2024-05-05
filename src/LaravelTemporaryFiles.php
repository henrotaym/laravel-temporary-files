<?php

namespace Henrotaym\LaravelTemporaryFiles;

use Henrotaym\LaravelTemporaryFiles\Factories\Services\TemporaryFiles\TemporaryFileServiceFactory;

class LaravelTemporaryFiles
{
    public function factory(): TemporaryFileServiceFactory
    {
        return app()->make(TemporaryFileServiceFactory::class);
    }
}
