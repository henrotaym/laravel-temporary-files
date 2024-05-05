<?php

use Henrotaym\LaravelTemporaryFiles\Facades\LaravelTemporaryFiles;
use Henrotaym\LaravelTemporaryFiles\Factories\Services\TemporaryFiles\TemporaryFileServiceFactory;

it('can create factory', function () {
    $factory = LaravelTemporaryFiles::factory();

    expect($factory)->toBeInstanceOf(TemporaryFileServiceFactory::class);
});
