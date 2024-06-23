# Laravel Seeder and Migration Files for State, District, City of the country Nepal.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/anuzpandey/laravel-nepali-state-district-city.svg?style=flat-square)](https://packagist.org/packages/anuzpandey/laravel-nepali-state-district-city)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/anuzpandey/laravel-nepali-state-district-city/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/anuzpandey/laravel-nepali-state-district-city/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/anuzpandey/laravel-nepali-state-district-city/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/anuzpandey/laravel-nepali-state-district-city/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/anuzpandey/laravel-nepali-state-district-city.svg?style=flat-square)](https://packagist.org/packages/anuzpandey/laravel-nepali-state-district-city)

## Installation

You can install the package via composer:

```bash
composer require anuzpandey/laravel-nepali-state-district-city
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-nepali-state-district-city-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-nepali-state-district-city-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-nepali-state-district-city-views"
```

## Usage

```php
$laravelNepaliStateDistrictCity = new AnuzPandey\LaravelNepaliStateDistrictCity();
echo $laravelNepaliStateDistrictCity->echoPhrase('Hello, AnuzPandey!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [AnuzPandey](https://github.com/anuzpandey)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
