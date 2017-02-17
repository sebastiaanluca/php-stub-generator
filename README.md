# PHP Stub Generator

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Total Downloads][ico-downloads]][link-downloads]

[![Follow me on Twitter](https://img.shields.io/twitter/follow/sebastiaanluca.svg?style=social)](https://twitter.com/sebastiaanluca)
[![Share this package on Twitter](https://img.shields.io/twitter/url/http/shields.io.svg?style=social)](https://twitter.com/home?status=https%3A//github.com/sebastiaanluca/php-stub-generator%20via%20%40sebastiaanluca)

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

## About

My name is Sebastiaan and I'm a freelance back-end developer from Belgium specializing in building high-end, custom Laravel applications. Check out my [portfolio][author-portfolio] for more information and my other [packages](https://github.com/sebastiaanluca?tab=repositories) to kick-start your next project. Have a project that could use some guidance? Send me an e-mail at [hello@sebastiaanluca.com][author-email]!

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sebastiaanluca/php-stub-generator.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/sebastiaanluca/php-stub-generator/develop.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/sebastiaanluca/php-stub-generator.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sebastiaanluca/php-stub-generator.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/sebastiaanluca/php-stub-generator
[link-travis]: https://travis-ci.org/sebastiaanluca/php-stub-generator
[link-downloads]: https://packagist.org/packages/sebastiaanluca/php-stub-generator
[link-contributors]: ../../contributors
[link-author]: https://github.com/sebastiaanluca
[author-portfolio]: http://www.sebastiaanluca.com
[author-email]: mailto:hello@sebastiaanluca.com
