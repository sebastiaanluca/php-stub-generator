# PHP Stub Generator

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Easily generate files and classes from stubs. Ideal for e.g. additional Laravel make commands!

## Install

Via Composer:

``` bash
composer require sebastiaanluca/php-stub-generator
```

## Usage

``` php
$stub = new StubGenerator(
    __DIR__ . '/stubs/migration.stub',
    $target
);

$stub->render([
    ':CLASS_NAME:' => 'CreateUsersTable',
    ':TABLE_NAME:' => 'users',
]);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
composer install
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hello@sebastiaanluca.com instead of using the issue tracker.

## Credits

- [Sebastiaan Luca][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sebastiaanluca/php-stub-generator.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/sebastiaanluca/php-stub-generator/develop.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/sebastiaanluca/php-stub-generator.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sebastiaanluca/php-stub-generator.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/sebastiaanluca/php-stub-generator
[link-travis]: https://travis-ci.org/sebastiaanluca/php-stub-generator
[link-scrutinizer]: https://scrutinizer-ci.com/g/sebastiaanluca/php-stub-generator/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/sebastiaanluca/php-stub-generator
[link-downloads]: https://packagist.org/packages/sebastiaanluca/php-stub-generator
[link-author]: https://github.com/sebastiaanluca
[link-contributors]: ../../contributors
