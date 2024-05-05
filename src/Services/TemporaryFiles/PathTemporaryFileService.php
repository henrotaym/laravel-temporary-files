<?php

namespace Henrotaym\LaravelTemporaryFiles\Services\TemporaryFiles;

use Illuminate\Support\Str;
use Spatie\TemporaryDirectory\TemporaryDirectory;

class PathTemporaryFileService
{
    public function __construct(
        protected TemporaryDirectory $temporaryDirectory,
    ) {
    }

    public function extension(string $extension): string
    {
        $filename = Str::uuid().".$extension";

        return $this->name($filename);
    }

    public function name(string $name): string
    {
        return $this->temporaryDirectory->path($name);
    }
}
