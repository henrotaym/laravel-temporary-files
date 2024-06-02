<?php

namespace Henrotaym\LaravelTemporaryFiles\Services\TemporaryFiles;

use Spatie\TemporaryDirectory\TemporaryDirectory;

class GetTemporaryFileService
{
    public function __construct(
        protected TemporaryDirectory $temporaryDirectory,
    ) {
    }

    public function content(string $path): string
    {
        return file_get_contents($path);
    }

    /**
     * @return resource
     */
    public function resource(string $path)
    {
        return fopen($path, 'r');
    }
}
