# Information on countries, fact-checked against several sources

![Tests](https://github.com/kusabi/countries/workflows/quality/badge.svg)
[![codecov](https://codecov.io/gh/kusabi/countries/branch/main/graph/badge.svg)](https://codecov.io/gh/kusabi/countries)
[![Licence Badge](https://img.shields.io/github/license/kusabi/countries.svg)](https://img.shields.io/github/license/kusabi/countries.svg)
[![Release Badge](https://img.shields.io/github/release/kusabi/countries.svg)](https://img.shields.io/github/release/kusabi/countries.svg)
[![Tag Badge](https://img.shields.io/github/tag/kusabi/countries.svg)](https://img.shields.io/github/tag/kusabi/countries.svg)
[![Issues Badge](https://img.shields.io/github/issues/kusabi/countries.svg)](https://img.shields.io/github/issues/kusabi/countries.svg)
[![Code Size](https://img.shields.io/github/languages/code-size/kusabi/countries.svg?label=size)](https://img.shields.io/github/languages/code-size/kusabi/countries.svg)

<sup>A library to assist with country detection and country codes</sup>

## Compatibility and dependencies

This library is compatible with PHP version `7.2`, `7.3`, `7.4`, `8.0`, `8.1`, `8.2` and `8.3`

This library has no dependencies.

## Installation

Installation is simple using composer.

```bash
composer require kusabi/countries
```

Or simply add it to your `composer.json` file

```json
{
    "require": {
        "kusabi/countries": "^1.0"
    }
}
```

## Contributing

This library follows [PSR-1](https://www.php-fig.org/psr/psr-1/) & [PSR-2](https://www.php-fig.org/psr/psr-2/) standards.


#### Unit Tests

Before pushing any changes, please ensure the unit tests are all passing.

If possible, feel free to improve coverage in a separate commit.

```bash
vendor/bin/phpunit
```

#### Code sniffer

Before pushing, please ensure you have run the code sniffer. **Only run it using the lowest support PHP version (7.2)**

```bash
vendor/bin/php-cs-fixer fix
```

#### Static Analyses

Before pushing, please ensure you have run the static analyses tool.

```bash
vendor/bin/phan
```

#### Benchmarks

Before pushing, please ensure you have checked the benchmarks and ensured that your code has not introduced any slowdowns.

Feel free to speed up existing code, in a separate commit.

Feel free to add more benchmarks for greater coverage, in a separate commit.

```bash
vendor/bin/phpbench run --report=speed
vendor/bin/phpbench run --report=speed --output=markdown
vendor/bin/phpbench run --report=speed --filter=benchNetFromTax --iterations=50 --revs=50000

vendor/bin/phpbench xdebug:profile
vendor/bin/phpbench xdebug:profile --gui
```

## Documentation

```php
$countries = new \Kusabi\Countries\Countries();

// Getting countries from the iterable class
$uk = $countries['gb'];
$uk = $countries['united kingdom'];
$uk = $countries->get('gbr')
$uk = $countries->getFromAlpha2('gb')
$uk = $countries->getFromAlpha3('gbr')
$uk = $countries->getFromNumeric('826')
$uk = $countries->getFromCallback(function (\Kusabi\Countries\Country $country) {
    return $country->getPhone() === '44';
});

// Cycle through all countries
foreach ($countries as $country) {
    echo $country->getName();
    echo $country->getAlpha2();
    echo $country->getAlpha3();
    echo $country->getNumeric();
    echo $country->getContinent();
    echo $country->getCapital();
    echo $country->getPhone();
    echo $country->getTimezone();
    echo $country->getAlternativeNames();
}
```