<?php

namespace Henrotaym\LaravelTemporaryFiles\Services\TemporaryFiles;

use Illuminate\Support\Str;
use Spatie\TemporaryDirectory\TemporaryDirectory;

class StoreTemporaryFileService
{
    public function __construct(
        protected TemporaryDirectory $temporaryDirectory,
    ) {
    }

    public function base64(string $base64, string $nameOrExtension): string
    {
        $content = base64_decode($base64);

        return $this->content($content, $nameOrExtension);
    }

    public function url(string $url, ?string $nameOrExtension = null): string
    {
        $path = $this->getPath($nameOrExtension ?: $url);

        copy($url, $path);

        return $path;
    }

    public function content(string $content, string $nameOrExtension): string
    {
        $path = $this->getPath($nameOrExtension);
        file_put_contents($path, $content);

        return $path;
    }

    protected function getPath(string $nameOrExtension): string
    {
        $base = basename($nameOrExtension);
        $extension = Str::afterLast($base, '.');
        $fileName = Str::uuid().".$extension";

        return $this->temporaryDirectory->path($fileName);
    }
}
