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
        protected GetTemporaryFileServiceFactory $getTemporaryFileServiceFactory,
    ) {
    }

    /**
     * @param  bool  $deleteWhenClassDestroyed  False if your file disappear too soon or you want to keep it.
     */
    public function create(bool $deleteWhenClassDestroyed = true): TemporaryFileService
    {
        $temporaryDirectory = TemporaryDirectory::make()->deleteWhenDestroyed($deleteWhenClassDestroyed);
        $storeTemporaryFileService = $this->storeTemporaryFileServiceFactory->create($temporaryDirectory);
        $pathTemporaryFileService = $this->pathTemporaryFileServiceFactory->create($temporaryDirectory);
        $deleteTemporaryFileService = $this->deleteTemporaryFileServiceFactory->create($temporaryDirectory);
        $getTemporaryFileService = $this->getTemporaryFileServiceFactory->create($temporaryDirectory);

        return app()->make(TemporaryFileService::class, [
            'storeTemporaryFileService' => $storeTemporaryFileService,
            'pathTemporaryFileService' => $pathTemporaryFileService,
            'deleteTemporaryFileService' => $deleteTemporaryFileService,
            'getTemporaryFileService' => $getTemporaryFileService,
        ]);
    }
}
