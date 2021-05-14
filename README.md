# Laravel Appender

[![Latest Version on Packagist](https://img.shields.io/packagist/v/soysaltan/appender.svg?style=flat-square)](https://packagist.org/packages/soysaltan/appender)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/soysaltan/appender/run-tests?label=tests)](https://github.com/soysaltan/appender/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/soysaltan/appender/Check%20&%20fix%20styling?label=code%20style)](https://github.com/soysaltan/appender/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/soysaltan/appender.svg?style=flat-square)](https://packagist.org/packages/soysaltan/appender)

---
While working with Laravel, sometimes you have to return fields that are not in your db
table (https://laravel.com/docs/8.x/eloquent-serialization#appending-values-to-json). However, you may want to hide
these fields that you add in some cases. In this case, you need to dominate the eloquent model.Now, you can do it easily
with this package.

This package includes a `Appends` trait. You can use the `Appends` trait in any model you want. For example, if you want
to add to the User model:

```php
class User extends Model
{
    use HasFactory, Appends; // <--add this; 
    ...
```

---

## Installation

You can install the package via composer for Laravel 5.6+:

```bash
composer require soysaltan/appender
```

## Usage

```php
class User extends Model
{
    use HasFactory, Appends; // <--add this; 
    
    protected $appends = ['created_at_by_human', 'created_at_formatted'];
```

---

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [sosi](https://github.com/soysaltan)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
