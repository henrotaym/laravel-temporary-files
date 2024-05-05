<?php

namespace Henrotaym\LaravelTemporaryFiles\Factories\Services\TemporaryFiles;

use Henrotaym\LaravelTemporaryFiles\Services\TemporaryFiles\StoreTemporaryFileService;
use Spatie\TemporaryDirectory\TemporaryDirectory;

class StoreTemporaryFileServiceFactory
{
    public function create(TemporaryDirectory $temporaryDirectory): StoreTemporaryFileService
    {
        return app()->make(StoreTemporaryFileService::class, [
            'temporaryDirectory' => $temporaryDirectory,
        ]);
    }
}
