<?php

namespace Henrotaym\LaravelTemporaryFiles\Services\TemporaryFiles;

use Spatie\TemporaryDirectory\TemporaryDirectory;

class DeleteTemporaryFileService
{
    public function __construct(
        protected TemporaryDirectory $temporaryDirectory,
    ) {
    }

    public function directory(): void
    {
        $this->temporaryDirectory->delete();
    }
}
