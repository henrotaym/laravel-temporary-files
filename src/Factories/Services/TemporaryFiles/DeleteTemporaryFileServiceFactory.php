<?php

namespace Henrotaym\LaravelTemporaryFiles\Factories\Services\TemporaryFiles;

use Henrotaym\LaravelTemporaryFiles\Services\TemporaryFiles\DeleteTemporaryFileService;
use Spatie\TemporaryDirectory\TemporaryDirectory;

class DeleteTemporaryFileServiceFactory
{
    public function create(TemporaryDirectory $temporaryDirectory): DeleteTemporaryFileService
    {
        return app()->make(DeleteTemporaryFileService::class, [
            'temporaryDirectory' => $temporaryDirectory,
        ]);
    }
}
