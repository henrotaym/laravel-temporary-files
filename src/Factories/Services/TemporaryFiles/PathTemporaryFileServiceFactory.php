<?php

namespace Henrotaym\LaravelTemporaryFiles\Factories\Services\TemporaryFiles;

use Henrotaym\LaravelTemporaryFiles\Services\TemporaryFiles\PathTemporaryFileService;
use Spatie\TemporaryDirectory\TemporaryDirectory;

class PathTemporaryFileServiceFactory
{
    public function create(TemporaryDirectory $temporaryDirectory): PathTemporaryFileService
    {
        return app()->make(PathTemporaryFileService::class, [
            'temporaryDirectory' => $temporaryDirectory,
        ]);
    }
}
