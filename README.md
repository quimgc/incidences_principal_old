# incidences

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


#Laravel package

https://laravel.com/docs/5.5/packages


##Instal·lació paquet laravel

1) Require: un paquet PHP general.
2) Instal·lar el ServiceProvider. 
3) Install Facades (Optional).

El fitxer principal de conf. de Laravel està a **config/app.php**

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require quimgc/incidences
```

## Usage

``` php
$skeleton = new Quimgc\Incidences();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email quimgonzalez@iesebre.com instead of using the issue tracker.

## Credits

- [Quim Gonzalez Colat][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/quimgc/incidences.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/quimgc/incidences/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/quimgc/incidences.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/quimgc/incidences.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/quimgc/incidences.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/quimgc/incidences
[link-travis]: https://travis-ci.org/quimgc/incidences
[link-scrutinizer]: https://scrutinizer-ci.com/g/quimgc/incidences/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/quimgc/incidences
[link-downloads]: https://packagist.org/packages/quimgc/incidences
[link-author]: https://github.com/quimgc
[link-contributors]: ../../contributors
