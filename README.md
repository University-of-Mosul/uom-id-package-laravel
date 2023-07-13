# UOM ID Authenticaiton Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/uomosul/uom-id-package-laravel.svg?style=flat-square)](https://packagist.org/packages/uomosul/uom-id-package-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/uomosul/uom-id-package-laravel/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/uomosul/uom-id-package-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/uomosul/uom-id-package-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/uomosul/uom-id-package-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/uomosul/uom-id-package-laravel.svg?style=flat-square)](https://packagist.org/packages/uomosul/uom-id-package-laravel)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require uomosul/uom-id-package-laravel
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="uom-id-package-laravel-config"
```

You can publish the provider file with:

```bash
php artisan vendor:publish --tag="uom-id-package-laravel-config"
```

## Usage

- Define the following

```
// .env

# UOM ID
UOM_ID_HOST=http://172.22.0.10:4433
UOM_ID_LOGIN_URL=http://127.0.0.1:4455/login
SESSION_COOKIE=UOM_ID_META
```

- Add `UOM_ID_SESSION` to `$except` array

```
protected $except = [
    'UOM_ID_SESSION',
];
```

- Change `driver` to `uom`

```
'driver' => 'uom'
```

- Register service provider

```
'providers' => ServiceProvider::defaultProviders()->merge([
    // ...
    App\Providers\uomAuthServiceProvider::class
])->toArray(),
```

- Link to UOM ID network through docker

```
services:
    laravel.test:
        networks:
            - uom_id_intranet

networks:
    uom_id_intranet:
        name: uom_id_intranet
        external: true
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [University of Mosul](https://github.com/uomosul)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
