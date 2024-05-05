# laravel-temporary-files

[![Latest Version on Packagist](https://img.shields.io/packagist/v/henrotaym/laravel-temporary-files.svg?style=flat-square)](https://packagist.org/packages/henrotaym/laravel-temporary-files)
[![Total Downloads](https://img.shields.io/packagist/dt/henrotaym/laravel-temporary-files.svg?style=flat-square)](https://packagist.org/packages/henrotaym/laravel-temporary-files)

## Installation

You can install the package via composer:

```bash
composer require henrotaym/laravel-temporary-files
```

You can install package with:

```bash
php artisan laravel-temporary-files:install
```

<!-- You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-temporary-files-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-temporary-files-config"
``` -->

This is the contents of the published config file:

```php
return [
];
```

<!-- Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-temporary-files-views"
``` -->

## Usage

```php
    use Henrotaym\LaravelTemporaryFiles\Facades\LaravelTemporaryFiles;
    use Henrotaym\LaravelTemporaryFiles\Factories\Services\TemporaryFiles\TemporaryFileServiceFactory;
    use Henrotaym\LaravelTemporaryFiles\Services\TemporaryFiles\TemporaryFileService;

    // SERVICE CREATION

    // USING FACTORY
    $service = app(TemporaryFileServiceFactory::class)->create();
    // USING FACADE
    $service = LaravelTemporaryFiles::factory()->create();

    // STORE SERVICE
    $content = 'test';
    $contentPath = $service->store()->content($content, 'txt');
    $base64ContentPath = $service->store()->base64(base64_encode($content), 'txt');
    $urlContentPath = $service->store()->url('https://avatars.githubusercontent.com/u/24230736?v=4');

    // PATH SERVICE
    $filePath = $service->path()->name('test.php');
    $filePath = $service->path()->extension('php');

    // DELETE SERVICE
    $service->delete()->directory();
```

## Testing

```bash
./cli test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
