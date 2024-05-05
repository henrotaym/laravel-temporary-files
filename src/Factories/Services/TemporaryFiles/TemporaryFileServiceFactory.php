<?php

namespace Henrotaym\LaravelTemporaryFiles\Factories\Services\TemporaryFiles;

use Henrotaym\LaravelTemporaryFiles\Services\TemporaryFiles\TemporaryFileService;
use Spatie\TemporaryDirectory\TemporaryDirectory;

class TemporaryFileServiceFactory
{
    public function __construct(
        protected StoreTemporaryFileServiceFactory $storeTemporaryFileServiceFactory,
        protected PathTemporaryFileServiceFactory $pathTemporaryFileServiceFactory,
        protected DeleteTemporaryFileServiceFactory $deleteTemporaryFileServiceFactory,
    ) {
    }

    public function create(): TemporaryFileService
    {
        $temporaryDirectory = TemporaryDirectory::make()->deleteWhenDestroyed(true);
        $storeTemporaryFileService = $this->storeTemporaryFileServiceFactory->create($temporaryDirectory);
        $pathTemporaryFileService = $this->pathTemporaryFileServiceFactory->create($temporaryDirectory);
        $deleteTemporaryFileService = $this->deleteTemporaryFileServiceFactory->create($temporaryDirectory);

        return app()->make(TemporaryFileService::class, [
            'storeTemporaryFileService' => $storeTemporaryFileService,
            'pathTemporaryFileService' => $pathTemporaryFileService,
            'deleteTemporaryFileService' => $deleteTemporaryFileService,
        ]);
    }
}
