<?php

namespace Henrotaym\LaravelTemporaryFiles\Factories\Services\TemporaryFiles;

use Henrotaym\LaravelTemporaryFiles\Services\TemporaryFiles\GetTemporaryFileService;
use Spatie\TemporaryDirectory\TemporaryDirectory;

class GetTemporaryFileServiceFactory
{
    public function create(TemporaryDirectory $temporaryDirectory): GetTemporaryFileService
    {
        return app()->make(GetTemporaryFileService::class, [
            'temporaryDirectory' => $temporaryDirectory,
        ]);
    }
}
