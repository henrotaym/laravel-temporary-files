<?php

use Henrotaym\LaravelTemporaryFiles\Factories\Services\TemporaryFiles\TemporaryFileServiceFactory;
use Henrotaym\LaravelTemporaryFiles\Services\TemporaryFiles\TemporaryFileService;

it('can create temporary file service', function () {
    /**
     * @var TemporaryFileService
     */
    $service = app(TemporaryFileServiceFactory::class)->create();

    expect($service)->toBeInstanceOf(TemporaryFileService::class);
});

it('can generate paths', function () {
    /**
     * @var TemporaryFileService
     */
    $service = app(TemporaryFileServiceFactory::class)->create();

    expect($service->path()->name('test.php'))->toBeString();
    expect($service->path()->extension('php'))->toBeString();
});

it('can store files', function () {
    /**
     * @var TemporaryFileService
     */
    $service = app(TemporaryFileServiceFactory::class)->create();
    $content = 'test';
    $contentPath = $service->store()->content($content, 'txt');
    $base64ContentPath = $service->store()->base64(base64_encode($content), 'txt');
    $urlContentPath = $service->store()->url('https://avatars.githubusercontent.com/u/24230736?v=4');

    expect(file_get_contents($contentPath))->toBe($content);
    expect(file_get_contents($base64ContentPath))->toBe($content);
    expect(file_get_contents($urlContentPath))->toBeString();
});

it('can delete directory', function () {
    /**
     * @var TemporaryFileService
     */
    $service = app(TemporaryFileServiceFactory::class)->create();

    $contentPath = $service->store()->content('test', 'txt');

    $service->delete()->directory();

    expect(file_exists($contentPath))->toBeFalse();
});

it('can get binary file', function () {
    /**
     * @var TemporaryFileService
     */
    $service = app(TemporaryFileServiceFactory::class)->create();

    $content = 'test';
    $contentPath = $service->store()->content($content, 'txt');

    $retrievedContent = $service->get()->content($contentPath);

    expect($retrievedContent)->toBe($content);
});

it('can get resource file', function () {
    /**
     * @var TemporaryFileService
     */
    $service = app(TemporaryFileServiceFactory::class)->create();

    $content = 'test';
    $contentPath = $service->store()->content($content, 'txt');

    $resource = $service->get()->resource($contentPath);

    expect(is_resource($resource))->toBeTrue();
});
