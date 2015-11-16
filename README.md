# Apiary Webmention Support

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A PHP Webmention client, for PSR-7 responses. Part of the Apiary IndieWeb support packages.

This package is compliant with PSR-1, PSR-2, PSR-4 and PSR-7. If you notice compliance oversights, please send a patch via pull request.

## Install

Via Composer

``` bash
$ composer require apiary/webmention
```

## Usage

``` php
$client = new Apiary\Webmention\Client();
$client->send($source, $target);
```

You can provide an optional logger to the client:

``` php
$client->setLogger($logger);
```


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email darren@apiaryhq.com instead of using the issue tracker.

## Credits

- [Darren Mothersele][link-author]
- [All Contributors][link-contributors]
- [Skeleton](https://github.com/thephpleague/skeleton/) package from The PHP League

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/apiaryhq/webmention.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/apiaryhq/webmention/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/apiaryhq/webmention.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/apiaryhq/webmention.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/apiaryhq/webmention.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/apiaryhq/webmention
[link-travis]: https://travis-ci.org/apiaryhq/webmention
[link-scrutinizer]: https://scrutinizer-ci.com/g/apiaryhq/webmention/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/apiaryhq/webmention
[link-downloads]: https://packagist.org/packages/apiaryhq/webmention
[link-author]: https://github.com/darrenmothersele
[link-contributors]: ../../contributors
