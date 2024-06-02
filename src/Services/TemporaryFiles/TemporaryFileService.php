<?php

namespace Henrotaym\LaravelTemporaryFiles\Services\TemporaryFiles;

class TemporaryFileService
{
    public function __construct(
        protected StoreTemporaryFileService $storeTemporaryFileService,
        protected PathTemporaryFileService $pathTemporaryFileService,
        protected DeleteTemporaryFileService $deleteTemporaryFileService,
        protected GetTemporaryFileService $getTemporaryFileService,
    ) {
    }

    public function store(): StoreTemporaryFileService
    {
        return $this->storeTemporaryFileService;
    }

    public function path(): PathTemporaryFileService
    {
        return $this->pathTemporaryFileService;
    }

    public function delete(): DeleteTemporaryFileService
    {
        return $this->deleteTemporaryFileService;
    }

    public function get(): GetTemporaryFileService
    {
        return $this->getTemporaryFileService;
    }
}
